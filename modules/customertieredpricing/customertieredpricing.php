<?php
/**
 * Customer Tiered Pricing - Spend-Based Automatic Discounts
 * Version: 1.0.0
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomerTieredPricing extends Module
{
    public function __construct()
    {
        $this->name = 'customertieredpricing';
        $this->tab = 'pricing_promotion';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Customer Tiered Pricing');
        $this->description = $this->l('Auto-apply discounts based on customer spending history');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        return parent::install()
            && $this->installDatabase()
            && $this->installTabs()
            && $this->registerHooks()
            && $this->installDefaultTiers();

    }

    public function uninstall()
    {
        return $this->uninstallDatabase()
            && $this->uninstallTabs()
            && parent::uninstall();
    }

    private function installDatabase()
    {
        include(dirname(__FILE__) . '/sql/install.php');
        return true;
    }

    private function uninstallDatabase()
    {
        include(dirname(__FILE__) . '/sql/uninstall.php');
        return true;
    }

    public function registerHooks()
    {
        return $this->registerHook('actionValidateOrder')
            && $this->registerHook('displayCustomerAccount')
            && $this->registerHook('displayShoppingCartFooter')
            && $this->registerHook('actionBeforeCartUpdateQty')
            && $this->registerHook('displayHeader');
    }

    private function installTabs()
    {
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'AdminTierPricing';
        $tab->name = array();
        $tab->id_parent = (int)Tab::getIdFromClassName('AdminParentCustomer');
        
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $this->l('Tiered Pricing');
        }
        
        $tab->module = $this->name;
        return $tab->add();
    }

    private function uninstallTabs()
    {
        $id_tab = (int)Tab::getIdFromClassName('AdminTierPricing');
        if ($id_tab) {
            $tab = new Tab($id_tab);
            return $tab->delete();
        }
        return true;
    }

    private function installDefaultTiers()
    {
        // Default tier: €500 spend → 5% off
        Db::getInstance()->insert('tier_discount', array(
            'min_spend' => 500.00,
            'discount_percent' => 5,
            'discount_type' => 'percentage',
            'active' => 1,
            'position' => 1
        ));

        // Tier 2: €1000 spend → 10% off
        Db::getInstance()->insert('tier_discount', array(
            'min_spend' => 1000.00,
            'discount_percent' => 10,
            'discount_type' => 'percentage',
            'active' => 1,
            'position' => 2
        ));

        // Tier 3: €2500 spend → 15% off + free shipping
        Db::getInstance()->insert('tier_discount', array(
            'min_spend' => 2500.00,
            'discount_percent' => 15,
            'discount_type' => 'percentage_shipping',
            'active' => 1,
            'position' => 3
        ));

        return true;
    }

    public function installOverrides()
    {
        // Override Cart class to apply discount
        $this->installOverride('classes/Cart.php');
        return true;
    }

    public function uninstallOverrides()
    {
        $this->uninstallOverride('classes/Cart.php');
        return true;
    }

    private function installOverride($file)
    {
        $overridePath = _PS_ROOT_DIR_ . '/override/' . $file;
        $moduleOverridePath = dirname(__FILE__) . '/override/' . $file;
        
        if (file_exists($moduleOverridePath)) {
            if (!file_exists(dirname($overridePath))) {
                mkdir(dirname($overridePath), 0777, true);
            }
            copy($moduleOverridePath, $overridePath);
        }
        return true;
    }

    private function uninstallOverride($file)
    {
        $overridePath = _PS_ROOT_DIR_ . '/override/' . $file;
        if (file_exists($overridePath)) {
            unlink($overridePath);
        }
        return true;
    }

    /**
     * Get customer's total spent in last X days
     */
    public static function getCustomerSpent($idCustomer, $days = 30)
    {
        if (!$idCustomer) {
            return 0;
        }

        $sql = 'SELECT SUM(total_paid_tax_incl) as total_spent
                FROM ' . _DB_PREFIX_ . 'orders
                WHERE id_customer = ' . (int)$idCustomer . '
                AND valid = 1
                AND current_state NOT IN (SELECT id_order_state FROM ' . _DB_PREFIX_ . 'order_state WHERE canceled = 1 OR deleted = 1)
                AND date_add >= DATE_SUB(NOW(), INTERVAL ' . (int)$days . ' DAY)';

        $result = Db::getInstance()->getRow($sql);
        return (float)($result['total_spent'] ?? 0);
    }

    /**
     * Get customer's active discount tier
     */
    public static function getCustomerTier($idCustomer, $days = 30)
    {
        $spent = self::getCustomerSpent($idCustomer, $days);
        
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'tier_discount
                WHERE active = 1
                AND min_spend <= ' . (float)$spent . '
                ORDER BY min_spend DESC
                LIMIT 1';
        
        return Db::getInstance()->getRow($sql);
    }

    /**
     * Get next tier for customer (progress indicator)
     */
    public static function getNextTier($idCustomer, $days = 30)
    {
        $spent = self::getCustomerSpent($idCustomer, $days);
        
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'tier_discount
                WHERE active = 1
                AND min_spend > ' . (float)$spent . '
                ORDER BY min_spend ASC
                LIMIT 1';
        
        return Db::getInstance()->getRow($sql);
    }

    /**
     * Apply discount to cart
     */
    public static function applyTierDiscount($idCart, $idCustomer)
    {
        $tier = self::getCustomerTier($idCustomer);
        
        if (!$tier) {
            return false;
        }

        $cart = new Cart($idCart);
        $discountName = 'Tier Discount - ' . $tier['discount_percent'] . '% off';
        
        // Check if discount already applied
        $existing = Db::getInstance()->getValue(
            'SELECT id_cart_rule FROM ' . _DB_PREFIX_ . 'cart_cart_rule
             WHERE id_cart = ' . (int)$idCart . ' 
             AND id_cart_rule IN (SELECT id_cart_rule FROM ' . _DB_PREFIX_ . 'cart_rule WHERE code LIKE "TIER_%")'
        );
        
        if ($existing) {
            return true; // Already applied
        }
        
        // Create new cart rule
        $cartRule = new CartRule();
        $cartRule->name = array();
        
        foreach (Language::getLanguages(true) as $lang) {
            $cartRule->name[$lang['id_lang']] = $discountName;
        }
        
        $cartRule->description = 'Automatic discount based on your spending tier';
        $cartRule->code = 'TIER_' . $idCustomer . '_' . time();
        $cartRule->reduction_percent = (float)$tier['discount_percent'];
        $cartRule->reduction_amount = 0;
        $cartRule->reduction_tax = 1;
        $cartRule->quantity = 1;
        $cartRule->quantity_per_user = 1;
        $cartRule->minimum_amount_currency = (int)Configuration::get('PS_CURRENCY_DEFAULT');
        $cartRule->active = 1;
        $cartRule->date_from = date('Y-m-d H:i:s');
        $cartRule->date_to = date('Y-m-d H:i:s', strtotime('+30 days'));
        
        if ($cartRule->add()) {
            $cart->addCartRule($cartRule->id);
            return true;
        }
        
        return false;
    }

    /**
     * Configuration page
     */
    public function getContent()
    {
        $output = '';
        
        if (Tools::isSubmit('submit' . $this->name)) {
            $this->postProcess();
            $output = $this->displayConfirmation($this->l('Settings updated'));
        }
        
        return $output . $this->renderForm();
    }

    private function renderForm()
    {
        $fieldsForm = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cog'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Spending period (days)'),
                        'name' => 'TIER_SPEND_DAYS',
                        'class' => 'fixed-width-sm',
                        'desc' => $this->l('Number of days to look back for customer spending (30, 90, 365, or 0 for lifetime)'),
                        'default_value' => 30
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Show progress banner'),
                        'name' => 'TIER_SHOW_PROGRESS',
                        'is_bool' => true,
                        'values' => array(
                            array('id' => 'on', 'value' => 1, 'label' => $this->l('Yes')),
                            array('id' => 'off', 'value' => 0, 'label' => $this->l('No'))
                        )
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Apply discount automatically'),
                        'name' => 'TIER_AUTO_APPLY',
                        'is_bool' => true,
                        'values' => array(
                            array('id' => 'on', 'value' => 1, 'label' => $this->l('Yes')),
                            array('id' => 'off', 'value' => 0, 'label' => $this->l('No'))
                        )
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Discount message'),
                        'name' => 'TIER_DISCOUNT_MESSAGE',
                        'lang' => true,
                        'desc' => $this->l('Message shown to customers about their discount')
                    )
                ),
                'submit' => array(
                    'title' => $this->l('Save')
                )
            )
        );
        
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->title = $this->displayName;
        $helper->submit_action = 'submit' . $this->name;
        
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $iso_code = $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($lang['id_lang'] == Configuration::get('PS_LANG_DEFAULT'))
            );
        }
        
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        
        $helper->fields_value['TIER_SPEND_DAYS'] = Configuration::get('TIER_SPEND_DAYS', 30);
        $helper->fields_value['TIER_SHOW_PROGRESS'] = Configuration::get('TIER_SHOW_PROGRESS', 1);
        $helper->fields_value['TIER_AUTO_APPLY'] = Configuration::get('TIER_AUTO_APPLY', 1);
        
        foreach (Language::getLanguages(false) as $lang) {
            $helper->fields_value['TIER_DISCOUNT_MESSAGE'][$lang['id_lang']] = Configuration::get('TIER_DISCOUNT_MESSAGE', $lang['id_lang'], 'You have {discount}% off because you\'ve spent {spent} in the last {days} days!');
        }
        
        return $helper->generateForm(array($fieldsForm));
    }

    private function postProcess()
    {
        Configuration::updateValue('TIER_SPEND_DAYS', (int)Tools::getValue('TIER_SPEND_DAYS'));
        Configuration::updateValue('TIER_SHOW_PROGRESS', (int)Tools::getValue('TIER_SHOW_PROGRESS'));
        Configuration::updateValue('TIER_AUTO_APPLY', (int)Tools::getValue('TIER_AUTO_APPLY'));
        
        foreach (Language::getLanguages(false) as $lang) {
            $message = Tools::getValue('TIER_DISCOUNT_MESSAGE_' . $lang['id_lang']);
            Configuration::updateValue('TIER_DISCOUNT_MESSAGE', $message, false, null, $lang['id_lang']);
        }
    }

    /**
     * Hook: After order validation - update customer spending
     */
    public function hookActionValidateOrder($params)
    {
        $customer = $params['customer'];
        if ($customer && $customer->id) {
            // Re-apply tier discount for next purchase
            // (spending updated for next time)
        }
    }

    /**
     * Hook: Display progress bar in customer account
     */
    public function hookDisplayCustomerAccount($params)
    {
        if (!Configuration::get('TIER_SHOW_PROGRESS')) {
            return '';
        }
        
        $idCustomer = (int)$this->context->customer->id;
        $days = (int)Configuration::get('TIER_SPEND_DAYS', 30);
        
        $currentSpent = self::getCustomerSpent($idCustomer, $days);
        $currentTier = self::getCustomerTier($idCustomer, $days);
        $nextTier = self::getNextTier($idCustomer, $days);
        
        if (!$nextTier) {
            return ''; // Already at highest tier
        }
        
        $amountNeeded = $nextTier['min_spend'] - $currentSpent;
        $percentageProgress = min(100, ($currentSpent / $nextTier['min_spend']) * 100);
        
        $this->context->smarty->assign(array(
            'current_spent' => $currentSpent,
            'next_tier_spend' => $nextTier['min_spend'],
            'next_tier_discount' => $nextTier['discount_percent'],
            'amount_needed' => $amountNeeded,
            'percentage_progress' => $percentageProgress,
            'days_period' => $days
        ));
        
        return $this->display(__FILE__, 'views/templates/front/customer-dashboard.tpl');
    }

    /**
     * Hook: Display discount banner on cart page
     */
    public function hookDisplayShoppingCartFooter($params)
    {
        if (!Configuration::get('TIER_SHOW_PROGRESS')) {
            return '';
        }
        
        $idCustomer = (int)$this->context->customer->id;
        
        if (!$idCustomer) {
            return '';
        }
        
        $days = (int)Configuration::get('TIER_SPEND_DAYS', 30);
        $currentSpent = self::getCustomerSpent($idCustomer, $days);
        $currentTier = self::getCustomerTier($idCustomer, $days);
        
        if ($currentTier) {
            $this->context->smarty->assign(array(
                'has_discount' => true,
                'discount_percent' => $currentTier['discount_percent'],
                'discount_message' => Configuration::get('TIER_DISCOUNT_MESSAGE', $this->context->language->id)
            ));
        }
        
        return $this->display(__FILE__, 'views/templates/front/discount-banner.tpl');
    }

    /**
     * Hook: Add CSS
     */
    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/tier-pricing.css');
    }
}
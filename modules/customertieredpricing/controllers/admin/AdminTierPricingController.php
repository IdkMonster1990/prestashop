<?php

class AdminTierPricingController extends ModuleAdminController
{
    public function __construct()
    {
        parent::__construct();
        
        $this->table = 'tier_discount';
        $this->className = 'TierDiscount';
        $this->lang = false;
        $this->explicitSelect = true;
        $this->allow_export = true;
        $this->deleted = false;
        $this->context = Context::getContext();
        
        $this->fields_list = array(
            'id_tier_discount' => array(
                'title' => 'ID',
                'align' => 'center',
                'width' => 50
            ),
            'min_spend' => array(
                'title' => 'Minimum Spend',
                'width' => 120,
                'type' => 'price',
                'currency' => true
            ),
            'discount_percent' => array(
                'title' => 'Discount %',
                'width' => 100,
                'suffix' => '%'
            ),
            'free_shipping' => array(
                'title' => 'Free Shipping',
                'width' => 100,
                'type' => 'bool',
                'active' => 'free_shipping'
            ),
            'active' => array(
                'title' => 'Active',
                'width' => 70,
                'active' => 'status',
                'type' => 'bool'
            ),
            'position' => array(
                'title' => 'Position',
                'width' => 70,
                'position' => 'position'
            )
        );
        
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?')
            ),
            'enableSelection' => array(
                'text' => $this->l('Enable selected')
            ),
            'disableSelection' => array(
                'text' => $this->l('Disable selected')
            )
        );
    }
    
    public function renderForm()
    {
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Tier Discount'),
                'icon' => 'icon-tag'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Minimum Spend'),
                    'name' => 'min_spend',
                    'required' => true,
                    'prefix' => $this->context->currency->sign,
                    'desc' => $this->l('Customer must spend at least this amount to qualify')
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Discount Percentage'),
                    'name' => 'discount_percent',
                    'required' => true,
                    'suffix' => '%',
                    'desc' => $this->l('Percentage discount off entire cart')
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Discount Type'),
                    'name' => 'discount_type',
                    'options' => array(
                        'query' => array(
                            array('id' => 'percentage', 'name' => 'Percentage only'),
                            array('id' => 'percentage_shipping', 'name' => 'Percentage + Free Shipping')
                        ),
                        'id' => 'id',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Active'),
                    'name' => 'active',
                    'is_bool' => true,
                    'values' => array(
                        array('id' => 'active_on', 'value' => 1, 'label' => $this->l('Yes')),
                        array('id' => 'active_off', 'value' => 0, 'label' => $this->l('No'))
                    )
                )
            ),
            'submit' => array(
                'title' => $this->l('Save')
            ),
            'buttons' => array(
                array(
                    'title' => $this->l('Back to list'),
                    'href' => $this->context->link->getAdminLink('AdminTierPricing'),
                    'icon' => 'process-icon-back'
                )
            )
        );
        
        return parent::renderForm();
    }
    
    public function postProcess()
    {
        if (Tools::isSubmit('submitAdd' . $this->table)) {
            $minSpend = (float)Tools::getValue('min_spend');
            $discount = (float)Tools::getValue('discount_percent');
            $discountType = pSQL(Tools::getValue('discount_type'));
            $freeShipping = ($discountType == 'percentage_shipping') ? 1 : 0;
            $active = (int)Tools::getValue('active');
            
            $data = array(
                'min_spend' => $minSpend,
                'discount_percent' => $discount,
                'discount_type' => $discountType,
                'free_shipping' => $freeShipping,
                'active' => $active
            );
            
            if (Tools::getValue('id_tier_discount')) {
                Db::getInstance()->update('tier_discount', $data, 'id_tier_discount = ' . (int)Tools::getValue('id_tier_discount'));
            } else {
                $data['position'] = (int)Db::getInstance()->getValue('SELECT MAX(position) + 1 FROM ' . _DB_PREFIX_ . 'tier_discount');
                Db::getInstance()->insert('tier_discount', $data);
            }
            
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminTierPricing'));
        }
        
        parent::postProcess();
    }
    
    public function ajaxProcessUpdatePositions()
    {
        $positions = Tools::getValue('positions');
        
        foreach ($positions as $position => $id) {
            Db::getInstance()->update('tier_discount', array('position' => (int)$position), 'id_tier_discount = ' . (int)$id);
        }
        
        die(true);
    }
}
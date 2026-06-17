<?php
/**
 * Product Video Module for PrestaShop
 * Allows adding videos to product pages
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class ProductVideo extends Module
{
    public function __construct()
    {
        $this->name = 'productvideo';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Product Video');
        $this->description = $this->l('Add YouTube, Vimeo, or self-hosted videos to your product pages');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall? All product videos will be removed.');
        
        $this->templateFile = 'module:productvideo/views/templates/front/video-display.tpl';
    }

    /**
     * Install the module
     */
    public function install()
    {
        return parent::install()
            && $this->installDatabase()
            && $this->registerHooks()
            && $this->installTabs();
    }

    /**
     * Uninstall the module
     */
    public function uninstall()
    {
        return $this->uninstallDatabase()
            && $this->uninstallTabs()
            && parent::uninstall();
    }

    /**
     * Install database tables
     */
    private function installDatabase()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS `" . _DB_PREFIX_ . "product_video` (
                `id_product_video` int(11) NOT NULL AUTO_INCREMENT,
                `id_product` int(11) NOT NULL,
                `id_lang` int(11) NOT NULL,
                `video_url` varchar(255) NOT NULL,
                `video_type` varchar(20) DEFAULT 'youtube',
                `title` varchar(255) DEFAULT NULL,
                `description` text,
                `position` int(11) DEFAULT 0,
                `active` tinyint(1) DEFAULT 1,
                `cover` tinyint(1) DEFAULT 0,
                `date_add` datetime NOT NULL,
                `date_upd` datetime NOT NULL,
                PRIMARY KEY (`id_product_video`),
                KEY `id_product` (`id_product`),
                KEY `id_lang` (`id_lang`)
            ) ENGINE=" . _MYSQL_ENGINE_ . " DEFAULT CHARSET=utf8;
        ";
        
        return Db::getInstance()->execute($sql);
    }

    /**
     * Uninstall database tables
     */
    private function uninstallDatabase()
    {
        $sql = "DROP TABLE IF EXISTS `" . _DB_PREFIX_ . "product_video`";
        return Db::getInstance()->execute($sql);
    }

    /**
     * Register all necessary hooks
     */
    private function registerHooks()
    {
        return $this->registerHook('displayAdminProductsExtra')
            && $this->registerHook('displayProductAdditionalInfo')
            && $this->registerHook('actionProductSave')
            && $this->registerHook('displayHeader')
            && $this->registerHook('actionAdminControllerSetMedia');
    }

    /**
     * Install admin tab menu
     */
    private function installTabs()
    {
        // Check if tab already exists
        $id_tab = (int)Tab::getIdFromClassName('AdminProductVideo');
        
        if (!$id_tab) {
            $tab = new Tab();
            $tab->active = 1;
            $tab->class_name = 'AdminProductVideo';
            $tab->name = array();
            
            foreach (Language::getLanguages(true) as $lang) {
                $tab->name[$lang['id_lang']] = $this->l('Product Videos');
            }
            
            $tab->id_parent = (int)Tab::getIdFromClassName('AdminCatalog');
            $tab->module = $this->name;
            
            return $tab->add();
        }
        
        return true;
    }

    /**
     * Uninstall admin tab menu
     */
    private function uninstallTabs()
    {
        $id_tab = (int)Tab::getIdFromClassName('AdminProductVideo');
        if ($id_tab) {
            $tab = new Tab($id_tab);
            return $tab->delete();
        }
        return true;
    }

    /**
     * Hook to add video tab in product back-office
     */
    public function hookDisplayAdminProductsExtra($params)
    {
        $id_product = (int)$params['id_product'];
        $id_lang = (int)$this->context->language->id;
        
        // Get existing videos for this product
        $videos = $this->getProductVideos($id_product, $id_lang);
        
        // Get all languages
        $languages = Language::getLanguages(false);
        
        $this->context->smarty->assign([
            'id_product' => $id_product,
            'videos' => $videos,
            'languages' => $languages,
            'default_lang' => (int)$this->context->language->id,
            'module_dir' => $this->_path,
            'token' => Tools::getAdminTokenLite('AdminModules')
        ]);
        
        return $this->display(__FILE__, 'views/templates/admin/product-tab-content.tpl');
    }

    /**
     * Hook to display video on product page (front office)
     */
    public function hookDisplayProductAdditionalInfo($params)
    {
        $id_product = (int)$params['product']['id_product'];
        $id_lang = (int)$this->context->language->id;
        
        // Check if product has any videos
        $has_video = Db::getInstance()->getValue(
            'SELECT COUNT(*) FROM ' . _DB_PREFIX_ . 'product_video 
             WHERE id_product = ' . $id_product . ' 
             AND id_lang = ' . $id_lang . ' 
             AND active = 1'
        );
        
        if (!$has_video) {
            return '';
        }
        
        // Get active videos
        $videos = $this->getProductVideos($id_product, $id_lang, true);
        
        // Process video URLs for embedding
        foreach ($videos as &$video) {
            $video['embed_url'] = $this->getEmbedUrl($video['video_url'], $video['video_type']);
        }
        
        $this->context->smarty->assign([
            'videos' => $videos,
            'product_id' => $id_product
        ]);
        
        return $this->display(__FILE__, 'views/templates/front/video-display.tpl');
    }

    /**
     * Hook to save videos when product is saved
     */
    /**
 * Hook to save videos when product is saved
 */
public function hookActionProductSave($params)
{
    // Check if this is an AJAX request from our module
    if (Tools::isSubmit('action') && Tools::getValue('action') == 'saveProductVideo') {
        $this->processAjaxRequest();
    }
    
    return true;
}

/**
 * Process AJAX requests directly
 */
private function processAjaxRequest()
{
    // Verify token for security
    $token = Tools::getValue('token');
    $admin_token = Tools::getAdminTokenLite('AdminModules');
    
    if ($token != $admin_token) {
        $this->sendJsonResponse(false, 'Invalid security token');
        return;
    }
    
    $id_product = (int)Tools::getValue('id_product');
    $action = Tools::getValue('video_action');
    
    if (!$id_product) {
        $this->sendJsonResponse(false, 'Missing product ID');
        return;
    }
    
    $response = ['success' => false, 'message' => ''];
    
    switch ($action) {
        case 'add':
            $response = $this->addVideo($id_product);
            break;
        case 'delete':
            $id_video = (int)Tools::getValue('id_video');
            $response = $this->deleteVideo($id_video);
            break;
        case 'update':
            $id_video = (int)Tools::getValue('id_video');
            $response = $this->updateVideo($id_video);
            break;
        case 'updatePosition':
            $positions = Tools::getValue('positions');
            $response = $this->updatePositions($positions);
            break;
        case 'toggleActive':
            $id_video = (int)Tools::getValue('id_video');
            $response = $this->toggleActive($id_video);
            break;
        default:
            $response = ['success' => false, 'message' => 'Unknown action'];
    }
    
    $this->sendJsonResponse($response['success'], $response['message'], $response);
}

/**
 * Helper to send JSON response
 */
private function sendJsonResponse($success, $message, $data = [])
{
    header('Content-Type: application/json');
    echo json_encode(array_merge(['success' => $success, 'message' => $message], $data));
    exit;
}

    /**
     * Hook to add CSS/JS to front office
     */
    public function hookDisplayHeader($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/productvideo.css');
        $this->context->controller->addJS($this->_path . 'views/js/productvideo.js');
        
        // Add fancybox or lightbox if needed
        $this->context->controller->addJqueryPlugin('fancybox');
    }

    /**
     * Hook to add assets in back office
     */
    public function hookActionAdminControllerSetMedia($params)
    {
        if ($this->context->controller->controller_name == 'AdminProducts') {
            $this->context->controller->addCSS($this->_path . 'views/css/productvideo.css');
            $this->context->controller->addJS($this->_path . 'views/js/productvideo.js');
        }
    }

    /**
     * AJAX handler for saving videos
     */
    private function ajaxProcessVideoSave($id_product)
    {
        $action = Tools::getValue('video_action');
        $response = ['success' => false, 'message' => ''];
        
        switch ($action) {
            case 'add':
                $response = $this->addVideo($id_product);
                break;
            case 'delete':
                $id_video = (int)Tools::getValue('id_video');
                $response = $this->deleteVideo($id_video);
                break;
            case 'update':
                $id_video = (int)Tools::getValue('id_video');
                $response = $this->updateVideo($id_video);
                break;
            case 'updatePosition':
                $positions = Tools::getValue('positions');
                $response = $this->updatePositions($positions);
                break;
            case 'toggleActive':
                $id_video = (int)Tools::getValue('id_video');
                $response = $this->toggleActive($id_video);
                break;
        }
        
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    /**
     * Add a new video
     */
    private function addVideo($id_product)
    {
        $id_lang = (int)Tools::getValue('id_lang');
        $video_url = Tools::getValue('video_url');
        $title = Tools::getValue('title');
        $description = Tools::getValue('description');
        $video_type = $this->detectVideoType($video_url);
        
        // Get next position
        $position = (int)Db::getInstance()->getValue(
            'SELECT MAX(position) FROM ' . _DB_PREFIX_ . 'product_video 
             WHERE id_product = ' . $id_product . ' AND id_lang = ' . $id_lang
        ) + 1;
        
        $data = [
            'id_product' => (int)$id_product,
            'id_lang' => (int)$id_lang,
            'video_url' => pSQL($video_url),
            'video_type' => pSQL($video_type),
            'title' => pSQL($title),
            'description' => pSQL($description),
            'position' => (int)$position,
            'active' => 1,
            'date_add' => date('Y-m-d H:i:s'),
            'date_upd' => date('Y-m-d H:i:s')
        ];
        
        $success = Db::getInstance()->insert('product_video', $data);
        
        if ($success) {
            return [
                'success' => true,
                'message' => $this->l('Video added successfully'),
                'id_video' => (int)Db::getInstance()->Insert_ID()
            ];
        }
        
        return ['success' => false, 'message' => $this->l('Failed to add video')];
    }

    /**
     * Delete a video
     */
    private function deleteVideo($id_video)
    {
        $success = Db::getInstance()->delete('product_video', 'id_product_video = ' . (int)$id_video);
        
        return [
            'success' => $success,
            'message' => $success ? $this->l('Video deleted successfully') : $this->l('Failed to delete video')
        ];
    }

    /**
     * Update video details
     */
    private function updateVideo($id_video)
    {
        $video_url = Tools::getValue('video_url');
        $title = Tools::getValue('title');
        $description = Tools::getValue('description');
        $video_type = $this->detectVideoType($video_url);
        
        $data = [
            'video_url' => pSQL($video_url),
            'video_type' => pSQL($video_type),
            'title' => pSQL($title),
            'description' => pSQL($description),
            'date_upd' => date('Y-m-d H:i:s')
        ];
        
        $success = Db::getInstance()->update('product_video', $data, 'id_product_video = ' . (int)$id_video);
        
        return [
            'success' => $success,
            'message' => $success ? $this->l('Video updated successfully') : $this->l('Failed to update video')
        ];
    }

    /**
     * Update video positions (for drag-and-drop sorting)
     */
    private function updatePositions($positions)
    {
        if (!is_array($positions)) {
            return ['success' => false, 'message' => $this->l('Invalid positions data')];
        }
        
        foreach ($positions as $position => $id_video) {
            Db::getInstance()->update('product_video', ['position' => (int)$position], 'id_product_video = ' . (int)$id_video);
        }
        
        return ['success' => true, 'message' => $this->l('Positions updated')];
    }

    /**
     * Toggle video active status
     */
    private function toggleActive($id_video)
    {
        $current = Db::getInstance()->getValue(
            'SELECT active FROM ' . _DB_PREFIX_ . 'product_video WHERE id_product_video = ' . (int)$id_video
        );
        
        $new_status = $current ? 0 : 1;
        $success = Db::getInstance()->update('product_video', ['active' => (int)$new_status], 'id_product_video = ' . (int)$id_video);
        
        return [
            'success' => $success,
            'active' => $new_status,
            'message' => $success ? $this->l('Status updated') : $this->l('Failed to update status')
        ];
    }

    /**
     * Get all videos for a product
     */
    public function getProductVideos($id_product, $id_lang = null, $only_active = false)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'product_video 
                WHERE id_product = ' . (int)$id_product;
        
        if ($id_lang) {
            $sql .= ' AND id_lang = ' . (int)$id_lang;
        }
        
        if ($only_active) {
            $sql .= ' AND active = 1';
        }
        
        $sql .= ' ORDER BY position ASC';
        
        return Db::getInstance()->executeS($sql);
    }

    /**
     * Detect video platform from URL
     */
    private function detectVideoType($url)
    {
        if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
            return 'youtube';
        } elseif (strpos($url, 'vimeo.com') !== false) {
            return 'vimeo';
        } elseif (strpos($url, '.mp4') !== false || strpos($url, '.webm') !== false) {
            return 'self';
        }
        
        return 'other';
    }

    /**
     * Get embed URL for video platform
     */
    public function getEmbedUrl($url, $type)
    {
        switch ($type) {
            case 'youtube':
                // Extract video ID
                preg_match('/(?:youtube\\.com\\/(?:[^\\/]+\\/.+\\/|(?:v|e(?:mbed)?)\\/|.*[?&]v=)|youtu\\.be\\/)([^"&?\\s]{11})/', $url, $matches);
                $video_id = isset($matches[1]) ? $matches[1] : '';
                return 'https://www.youtube.com/embed/' . $video_id . '?autoplay=0&rel=0';
                
            case 'vimeo':
                preg_match('/vimeo\\.com\\/(?:channels\\/|groups\\/[^\\/]+\\/|video\\/)?(\\d+)/', $url, $matches);
                $video_id = isset($matches[1]) ? $matches[1] : '';
                return 'https://player.vimeo.com/video/' . $video_id;
                
            case 'self':
                return $url;
                
            default:
                return $url;
        }
    }

    /**
     * Configuration page (optional - for module settings)
     */
    public function getContent()
    {
        $output = '';
        
        if (Tools::isSubmit('submit' . $this->name)) {
            $video_width = (int)Tools::getValue('video_width', 560);
            $video_height = (int)Tools::getValue('video_height', 315);
            $show_title = (int)Tools::getValue('show_title', 1);
            $autoplay = (int)Tools::getValue('autoplay', 0);
            
            Configuration::updateValue('PRODUCTVIDEO_WIDTH', $video_width);
            Configuration::updateValue('PRODUCTVIDEO_HEIGHT', $video_height);
            Configuration::updateValue('PRODUCTVIDEO_SHOW_TITLE', $show_title);
            Configuration::updateValue('PRODUCTVIDEO_AUTOPLAY', $autoplay);
            
            $output .= $this->displayConfirmation($this->l('Settings updated'));
        }
        
        return $output . $this->renderSettingsForm();
    }

    /**
     * Render settings form
     */
    private function renderSettingsForm()
    {
        $fields_form = [
            'form' => [
                'legend' => [
                    'title' => $this->l('Video Settings'),
                    'icon' => 'icon-cog'
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('Video Width (px)'),
                        'name' => 'video_width',
                        'class' => 'fixed-width-sm',
                        'desc' => $this->l('Width of the video player (default: 560)')
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Video Height (px)'),
                        'name' => 'video_height',
                        'class' => 'fixed-width-sm',
                        'desc' => $this->l('Height of the video player (default: 315)')
                    ],
                    [
                        'type' => 'switch',
                        'label' => $this->l('Show Video Title'),
                        'name' => 'show_title',
                        'is_bool' => true,
                        'desc' => $this->l('Display video title on product page'),
                        'values' => [
                            ['id' => 'active_on', 'value' => 1, 'label' => $this->l('Yes')],
                            ['id' => 'active_off', 'value' => 0, 'label' => $this->l('No')]
                        ]
                    ],
                    [
                        'type' => 'switch',
                        'label' => $this->l('Autoplay'),
                        'name' => 'autoplay',
                        'is_bool' => true,
                        'desc' => $this->l('Automatically play video when page loads'),
                        'values' => [
                            ['id' => 'active_on', 'value' => 1, 'label' => $this->l('Yes')],
                            ['id' => 'active_off', 'value' => 0, 'label' => $this->l('No')]
                        ]
                    ]
                ],
                'submit' => [
                    'title' => $this->l('Save'),
                    'class' => 'btn btn-default pull-right'
                ]
            ]
        ];
        
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->title = $this->displayName;
        $helper->submit_action = 'submit' . $this->name;
        
        $helper->fields_value['video_width'] = Configuration::get('PRODUCTVIDEO_WIDTH', 560);
        $helper->fields_value['video_height'] = Configuration::get('PRODUCTVIDEO_HEIGHT', 315);
        $helper->fields_value['show_title'] = Configuration::get('PRODUCTVIDEO_SHOW_TITLE', 1);
        $helper->fields_value['autoplay'] = Configuration::get('PRODUCTVIDEO_AUTOPLAY', 0);
        
        return $helper->generateForm([$fields_form]);
    }
}
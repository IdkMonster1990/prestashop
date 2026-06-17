<?php
/**
 * AJAX Controller for Product Video Module
 */

class ProductVideoAjaxModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        
        // Only accept AJAX requests
        if (!Tools::isSubmit('action') || !Tools::isSubmit('token')) {
            $this->ajaxDie(json_encode(['success' => false, 'message' => 'Invalid request']));
        }
        
        // Verify token
        $token = Tools::getValue('token');
        $admin_token = Tools::getAdminTokenLite('AdminModules');
        
        if ($token != $admin_token) {
            $this->ajaxDie(json_encode(['success' => false, 'message' => 'Invalid security token']));
        }
        
        $action = Tools::getValue('action');
        $id_product = (int)Tools::getValue('id_product');
        
        $module_instance = Module::getInstanceByName('productvideo');
        
        switch ($action) {
            case 'add_video':
                $response = $module_instance->addVideo($id_product);
                break;
            case 'delete_video':
                $id_video = (int)Tools::getValue('id_video');
                $response = $module_instance->deleteVideo($id_video);
                break;
            case 'update_video':
                $id_video = (int)Tools::getValue('id_video');
                $response = $module_instance->updateVideo($id_video);
                break;
            case 'toggle_active':
                $id_video = (int)Tools::getValue('id_video');
                $response = $module_instance->toggleActive($id_video);
                break;
            case 'update_positions':
                $positions = Tools::getValue('positions');
                $response = $module_instance->updatePositions($positions);
                break;
            default:
                $response = ['success' => false, 'message' => 'Unknown action'];
        }
        
        $this->ajaxDie(json_encode($response));
    }
}
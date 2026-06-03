<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\components\page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc6267a720_94043303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a404f9c4732073adefe491fef1152971c29ec89f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\components\\page-loader.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc6267a720_94043303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'page-loader');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15352567486a1ffc62679b93_69681527', 'page_loader');
?>

<?php }
/* {block 'page_loader'} */
class Block_15352567486a1ffc62679b93_69681527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loader' => 
  array (
    0 => 'Block_15352567486a1ffc62679b93_69681527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="page-loader js-page-loader d-none">
    <div class="spinner-border text-primary-emphasis" role="status">
      <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </div>
  </div>
<?php
}
}
/* {/block 'page_loader'} */
}

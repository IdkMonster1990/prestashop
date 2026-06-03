<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\_partials\copyright.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc62664895_47736457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '194f3d1068ff915c4fedd6ce271b6bafa2fea0f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\_partials\\copyright.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc62664895_47736457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15154088526a1ffc62662bb6_78232942', 'copyright');
?>

<?php }
/* {block 'copyright_link'} */
class Block_10692303326a1ffc626633c4_49002743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="https://www.prestashop-project.org/" target="_blank" rel="noopener noreferrer nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </a>
    <?php
}
}
/* {/block 'copyright_link'} */
/* {block 'copyright'} */
class Block_15154088526a1ffc62662bb6_78232942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright' => 
  array (
    0 => 'Block_15154088526a1ffc62662bb6_78232942',
  ),
  'copyright_link' => 
  array (
    0 => 'Block_10692303326a1ffc626633c4_49002743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="copyright">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10692303326a1ffc626633c4_49002743', 'copyright_link', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'copyright'} */
}

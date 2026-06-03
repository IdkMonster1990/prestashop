<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:21
  from 'module:ps_specialsviewstemplateshookps_specials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc61bfb325_81732836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69eca6f7099f96303240f391e6c6743858b25719' => 
    array (
      0 => 'module:ps_specialsviewstemplateshookps_specials.tpl',
      1 => 1770799095,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:components/section-title.tpl' => 1,
  ),
),false)) {
function content_6a1ffc61bfb325_81732836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '8828126736a1ffc61bf8729_63248733';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15824799256a1ffc61bf9558_71566225', 'module_products_name');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12210284816a1ffc61bf9b46_21655115', 'module_products_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20964207736a1ffc61bfa851_50564279', 'module_products_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/module-products.tpl");
}
/* {block 'module_products_name'} */
class Block_15824799256a1ffc61bf9558_71566225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_name' => 
  array (
    0 => 'Block_15824799256a1ffc61bf9558_71566225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ps-specials<?php
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_12210284816a1ffc61bf9b46_21655115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_title' => 
  array (
    0 => 'Block_12210284816a1ffc61bf9b46_21655115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special deals','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable6), 0, false);
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_footer'} */
class Block_20964207736a1ffc61bfa851_50564279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_footer' => 
  array (
    0 => 'Block_20964207736a1ffc61bfa851_50564279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="btn btn-outline-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All discounts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

    <i class="material-icons" aria-hidden="true">&#xE315;</i>
  </a>
<?php
}
}
/* {/block 'module_products_footer'} */
}

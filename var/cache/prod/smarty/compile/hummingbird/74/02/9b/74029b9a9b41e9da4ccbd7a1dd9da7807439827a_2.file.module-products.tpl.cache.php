<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:21
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\components\module-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc61c15736_88874246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74029b9a9b41e9da4ccbd7a1dd9da7807439827a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\components\\module-products.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_6a1ffc61c15736_88874246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '6456160856a1ffc61c0fe71_41387017';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4611538486a1ffc61c10f66_68507636', 'module_products');
?>

<?php }
/* {block 'module_products_variables'} */
class Block_7410894486a1ffc61c11883_30948823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('need_container', "true");?>
  <?php
}
}
/* {/block 'module_products_variables'} */
/* {block 'module_products_name'} */
class Block_15465481016a1ffc61c12851_41857095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_15135682216a1ffc61c135a6_97736700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_list'} */
class Block_3755472346a1ffc61c139a5_42381241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
          <div class="module-products__list">
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/productlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'module_products_list'} */
/* {block 'module_products_footer'} */
class Block_15369686696a1ffc61c14bc6_71404206 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="module-products__buttons">
          <?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>

        </div>
      <?php
}
}
/* {/block 'module_products_footer'} */
/* {block 'module_products'} */
class Block_4611538486a1ffc61c10f66_68507636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products' => 
  array (
    0 => 'Block_4611538486a1ffc61c10f66_68507636',
  ),
  'module_products_variables' => 
  array (
    0 => 'Block_7410894486a1ffc61c11883_30948823',
  ),
  'module_products_name' => 
  array (
    0 => 'Block_15465481016a1ffc61c12851_41857095',
  ),
  'module_products_title' => 
  array (
    0 => 'Block_15135682216a1ffc61c135a6_97736700',
  ),
  'module_products_list' => 
  array (
    0 => 'Block_3755472346a1ffc61c139a5_42381241',
  ),
  'module_products_footer' => 
  array (
    0 => 'Block_15369686696a1ffc61c14bc6_71404206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7410894486a1ffc61c11883_30948823', 'module_products_variables', $this->tplIndex);
?>


  <section class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15465481016a1ffc61c12851_41857095', 'module_products_name', $this->tplIndex);
?>
">
    <div class="module-products <?php if ((isset($_smarty_tpl->tpl_vars['need_container']->value)) && $_smarty_tpl->tpl_vars['need_container']->value) {?>container<?php }?>">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15135682216a1ffc61c135a6_97736700', 'module_products_title', $this->tplIndex);
?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3755472346a1ffc61c139a5_42381241', 'module_products_list', $this->tplIndex);
?>

        
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15369686696a1ffc61c14bc6_71404206', 'module_products_footer', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'module_products'} */
}

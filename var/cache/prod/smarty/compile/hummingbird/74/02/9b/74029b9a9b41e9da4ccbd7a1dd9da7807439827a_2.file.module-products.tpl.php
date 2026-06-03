<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:21
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\components\module-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc618c5926_30245734',
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
function content_6a1ffc618c5926_30245734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4085862886a1ffc618bc8f8_20989830', 'module_products');
?>

<?php }
/* {block 'module_products_variables'} */
class Block_4510825356a1ffc618bd0e9_44676972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('need_container', "true");?>
  <?php
}
}
/* {/block 'module_products_variables'} */
/* {block 'module_products_name'} */
class Block_20510051136a1ffc618bfb71_63150749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_17064435266a1ffc618c14f5_25099069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_list'} */
class Block_5314393346a1ffc618c19a0_88484123 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
          <div class="module-products__list">
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/productlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'module_products_list'} */
/* {block 'module_products_footer'} */
class Block_557312776a1ffc618c2632_84010931 extends Smarty_Internal_Block
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
class Block_4085862886a1ffc618bc8f8_20989830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products' => 
  array (
    0 => 'Block_4085862886a1ffc618bc8f8_20989830',
  ),
  'module_products_variables' => 
  array (
    0 => 'Block_4510825356a1ffc618bd0e9_44676972',
  ),
  'module_products_name' => 
  array (
    0 => 'Block_20510051136a1ffc618bfb71_63150749',
  ),
  'module_products_title' => 
  array (
    0 => 'Block_17064435266a1ffc618c14f5_25099069',
  ),
  'module_products_list' => 
  array (
    0 => 'Block_5314393346a1ffc618c19a0_88484123',
  ),
  'module_products_footer' => 
  array (
    0 => 'Block_557312776a1ffc618c2632_84010931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4510825356a1ffc618bd0e9_44676972', 'module_products_variables', $this->tplIndex);
?>


  <section class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20510051136a1ffc618bfb71_63150749', 'module_products_name', $this->tplIndex);
?>
">
    <div class="module-products <?php if ((isset($_smarty_tpl->tpl_vars['need_container']->value)) && $_smarty_tpl->tpl_vars['need_container']->value) {?>container<?php }?>">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17064435266a1ffc618c14f5_25099069', 'module_products_title', $this->tplIndex);
?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5314393346a1ffc618c19a0_88484123', 'module_products_list', $this->tplIndex);
?>

        
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_557312776a1ffc618c2632_84010931', 'module_products_footer', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'module_products'} */
}

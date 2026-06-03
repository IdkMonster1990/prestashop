<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc620e0721_03173664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c910276872617669705610abd5778f370bba45c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\layouts\\layout-full-width.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc620e0721_03173664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12129406036a1ffc620dcc55_65789806', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'container_class'} */
class Block_14316848316a1ffc620dcfd2_78085395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_3377993206a1ffc620dd580_55888569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_18605425036a1ffc620df070_56939661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_8065990036a1ffc620de738_58192550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page page--full-width">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18605425036a1ffc620df070_56939661', 'content', $this->tplIndex);
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_9263261886a1ffc620dfe65_22068732 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_12129406036a1ffc620dcc55_65789806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_12129406036a1ffc620dcc55_65789806',
  ),
  'container_class' => 
  array (
    0 => 'Block_14316848316a1ffc620dcfd2_78085395',
  ),
  'left_column' => 
  array (
    0 => 'Block_3377993206a1ffc620dd580_55888569',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_8065990036a1ffc620de738_58192550',
  ),
  'content' => 
  array (
    0 => 'Block_18605425036a1ffc620df070_56939661',
  ),
  'right_column' => 
  array (
    0 => 'Block_9263261886a1ffc620dfe65_22068732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14316848316a1ffc620dcfd2_78085395', 'container_class', $this->tplIndex);
?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3377993206a1ffc620dd580_55888569', 'left_column', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8065990036a1ffc620de738_58192550', 'content_wrapper', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9263261886a1ffc620dfe65_22068732', 'right_column', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_columns'} */
}

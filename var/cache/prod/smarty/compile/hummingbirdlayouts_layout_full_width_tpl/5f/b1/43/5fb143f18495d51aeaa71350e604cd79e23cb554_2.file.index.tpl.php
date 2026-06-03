<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc620c0b83_93256896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb143f18495d51aeaa71350e604cd79e23cb554' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\index.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc620c0b83_93256896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13837341276a1ffc620bbfc5_95066437', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11847968066a1ffc620bc5c7_32086467', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_13837341276a1ffc620bbfc5_95066437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_13837341276a1ffc620bbfc5_95066437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_13508185066a1ffc620bc824_60253186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_content_top'} */
class Block_19993575106a1ffc620be1e8_12501270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4510678626a1ffc620be9d0_21317045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

              <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_4477309656a1ffc620be6a9_53314761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4510678626a1ffc620be9d0_21317045', 'hook_home', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11041749556a1ffc620bdf93_69620519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="content" class="page-content page-content--home">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19993575106a1ffc620be1e8_12501270', 'page_content_top', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4477309656a1ffc620be6a9_53314761', 'page_content', $this->tplIndex);
?>

          </div>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'content'} */
class Block_4806283836a1ffc620bdc47_03662225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11041749556a1ffc620bdf93_69620519', 'page_content_container', $this->tplIndex);
?>

      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_13340796946a1ffc620bcce8_47632731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4806283836a1ffc620bdc47_03662225', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_17737607106a1ffc620c0332_60925064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_11847968066a1ffc620bc5c7_32086467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_11847968066a1ffc620bc5c7_32086467',
  ),
  'left_column' => 
  array (
    0 => 'Block_13508185066a1ffc620bc824_60253186',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_13340796946a1ffc620bcce8_47632731',
  ),
  'content' => 
  array (
    0 => 'Block_4806283836a1ffc620bdc47_03662225',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11041749556a1ffc620bdf93_69620519',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19993575106a1ffc620be1e8_12501270',
  ),
  'page_content' => 
  array (
    0 => 'Block_4477309656a1ffc620be6a9_53314761',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4510678626a1ffc620be9d0_21317045',
  ),
  'right_column' => 
  array (
    0 => 'Block_17737607106a1ffc620c0332_60925064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13508185066a1ffc620bc824_60253186', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13340796946a1ffc620bcce8_47632731', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17737607106a1ffc620c0332_60925064', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}

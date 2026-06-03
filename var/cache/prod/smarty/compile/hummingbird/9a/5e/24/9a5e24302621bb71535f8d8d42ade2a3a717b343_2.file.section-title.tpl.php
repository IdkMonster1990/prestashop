<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:21
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\components\section-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc618dd720_31041141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a5e24302621bb71535f8d8d42ade2a3a717b343' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\components\\section-title.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc618dd720_31041141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'section-title');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8394812026a1ffc618dccc2_50376910', 'section_title');
?>

<?php }
/* {block 'section_title'} */
class Block_8394812026a1ffc618dccc2_50376910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'section_title' => 
  array (
    0 => 'Block_8394812026a1ffc618dccc2_50376910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2 class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</h2>
<?php
}
}
/* {/block 'section_title'} */
}

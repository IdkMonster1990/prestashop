<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\components\toast.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc626a1f50_44268762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecce512150bda0c3f875f940eeeabc480a0775e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\components\\toast.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc626a1f50_44268762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'toast');?>

<template class="js-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-template">
  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-body"></div>
      <button type="button" class="btn-close me-2 m-auto d-none" data-bs-dismiss="toast"></button>
    </div>
  </div>
</template>
<?php }
}

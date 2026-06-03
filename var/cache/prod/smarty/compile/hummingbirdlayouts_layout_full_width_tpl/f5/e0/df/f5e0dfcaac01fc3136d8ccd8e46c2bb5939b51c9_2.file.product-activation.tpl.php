<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc6225c324_58025663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5e0dfcaac01fc3136d8ccd8e46c2bb5939b51c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc6225c324_58025663 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning" role="alert">
    <div class="container">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
        <div>
          <i class="material-icons" aria-hidden="true">&#xE001;</i>

          <p class="alert-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['notif']->value['message']), ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}

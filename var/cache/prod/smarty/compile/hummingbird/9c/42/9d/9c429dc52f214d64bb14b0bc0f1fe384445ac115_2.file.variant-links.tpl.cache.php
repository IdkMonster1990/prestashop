<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:21
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\catalog\_partials\variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc61d553e1_14701252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c429dc52f214d64bb14b0bc0f1fe384445ac115' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc61d553e1_14701252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6135631826a1ffc61d51983_05003876';
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
    class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['type']), ENT_QUOTES, 'UTF-8');?>
"
    title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
    aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['name']), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?>style="background-image: url(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['texture']), ENT_QUOTES, 'UTF-8');?>
)"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?>style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
  ></a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

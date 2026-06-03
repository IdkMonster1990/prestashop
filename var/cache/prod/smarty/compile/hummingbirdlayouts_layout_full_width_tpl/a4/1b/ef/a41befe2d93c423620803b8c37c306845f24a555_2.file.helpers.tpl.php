<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc6212b028_50525685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41befe2d93c423620803b8c37c306845f24a555' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\_partials\\helpers.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a1ffc6212b028_50525685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\hummingbirdlayouts_layout_full_width_tpl\\a4\\1b\\ef\\a41befe2d93c423620803b8c37c306845f24a555_2.file.helpers.tpl.php',
    'uid' => 'a41befe2d93c423620803b8c37c306845f24a555',
    'call_name' => 'smarty_template_function_renderLogo_8199962506a1ffc62120c64_67068391',
  ),
));
?>

<?php }
/* smarty_template_function_renderLogo_8199962506a1ffc62120c64_67068391 */
if (!function_exists('smarty_template_function_renderLogo_8199962506a1ffc62120c64_67068391')) {
function smarty_template_function_renderLogo_8199962506a1ffc62120c64_67068391(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a class="navbar-brand d-block" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src']), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width']), ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height']), ENT_QUOTES, 'UTF-8');?>
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_8199962506a1ffc62120c64_67068391 */
}

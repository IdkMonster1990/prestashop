<?php
/* Smarty version 4.5.5, created on 2026-06-09 12:02:26
  from 'module:ps_mboviewstemplateshookrecommendedmodules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a283912a28e96_81812841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d496f00a4f81df42699c4952850153d0f01d26' => 
    array (
      0 => 'module:ps_mboviewstemplateshookrecommendedmodules.tpl',
      1 => 1779376608,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a283912a28e96_81812841 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\prestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl --><?php echo '<script'; ?>
 async type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_templating_url']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['cdc_script_not_found']->value) {?>
  <?php echo '<script'; ?>
 async type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_url']->value;?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
  <?php echo '<script'; ?>
 async type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_url']->value;?>
"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['recommended_modules_js']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['recommended_modules_css']->value;?>
" type="text/css" media="all">

<?php echo '<script'; ?>
>
  window.$(document).ready(function () {
    if (undefined !== mbo) {
      mbo.initialize({
        translations: {
          'Recommended Modules and Services': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesTitleTranslated']->value,'javascript','UTF-8' ));?>
',
          'Close': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesCloseTranslated']->value,'javascript','UTF-8' ));?>
',
        },
        recommendedModulesUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesUrl']->value,'javascript','UTF-8' ));?>
',
        shouldAttachRecommendedModulesAfterContent: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesAfterContent']->value ));?>
,
        shouldAttachRecommendedModulesButton: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesButton']->value ));?>
,
        shouldUseLegacyTheme: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shouldUseLegacyTheme']->value ));?>
,
      });
    }
  });
<?php echo '</script'; ?>
>
<!-- end C:\xampp\htdocs\prestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl --><?php }
}

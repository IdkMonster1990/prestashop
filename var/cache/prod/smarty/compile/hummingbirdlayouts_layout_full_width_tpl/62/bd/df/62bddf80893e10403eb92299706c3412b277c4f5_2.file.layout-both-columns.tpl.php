<?php
/* Smarty version 4.5.5, created on 2026-06-03 06:05:22
  from 'C:\xampp\htdocs\prestashop\themes\hummingbird\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a1ffc6210a4f2_38493493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62bddf80893e10403eb92299706c3412b277c4f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\hummingbird\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1770799095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
    'file:components/page-loader.tpl' => 1,
    'file:components/toast-container.tpl' => 1,
    'file:components/password-policy-template.tpl' => 1,
  ),
),false)) {
function content_6a1ffc6210a4f2_38493493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['locale']), ENT_QUOTES, 'UTF-8');?>
">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3859013446a1ffc620f65d7_23697346', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['page_name']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] ))), ENT_QUOTES, 'UTF-8');?>
">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5048737886a1ffc620f7c40_61710964', 'top_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17430695976a1ffc620f8e12_81317688', 'skip_to_main_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19739255786a1ffc620fa665_69650567', 'hook_after_body_opening_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7244777366a1ffc620fb6e8_74151692', 'product_activation');
?>


    <header id="header" class="header js-sticky-header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3991939586a1ffc620fc1e9_78473197', 'header');
?>

    </header>

    <main id="wrapper" class="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperTop'),$_smarty_tpl ) );?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7646085846a1ffc620fdd57_31564014', 'breadcrumb');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_958125116a1ffc620fed84_04828475', 'main_content');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6108063676a1ffc620ff2f9_18742828', 'notifications');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_373243566a1ffc620ffad9_80111245', 'content_columns');
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperBottom'),$_smarty_tpl ) );?>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16358351526a1ffc62104b24_85952926', 'footer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13562395266a1ffc621052a4_41099842', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9713731566a1ffc62105c44_07963117', 'bottom_elements');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10659451556a1ffc621068f4_67665330', 'hook_before_body_closing_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18728856706a1ffc62107335_85701040', 'modal_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2308032706a1ffc62109526_75941576', 'back_to_top');
?>

  </body>
</html>
<?php }
/* {block 'head'} */
class Block_3859013446a1ffc620f65d7_23697346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3859013446a1ffc620f65d7_23697346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'top_content'} */
class Block_5048737886a1ffc620f7c40_61710964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_content' => 
  array (
    0 => 'Block_5048737886a1ffc620f7c40_61710964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="back-to-top"></div>
    <?php
}
}
/* {/block 'top_content'} */
/* {block 'skip_to_main_content'} */
class Block_17430695976a1ffc620f8e12_81317688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'skip_to_main_content' => 
  array (
    0 => 'Block_17430695976a1ffc620f8e12_81317688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a class="visually-hidden-focusable btn btn-primary skip-link" href="#main-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip to main content','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php
}
}
/* {/block 'skip_to_main_content'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_19739255786a1ffc620fa665_69650567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_19739255786a1ffc620fa665_69650567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_7244777366a1ffc620fb6e8_74151692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_7244777366a1ffc620fb6e8_74151692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_3991939586a1ffc620fc1e9_78473197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_3991939586a1ffc620fc1e9_78473197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_7646085846a1ffc620fdd57_31564014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_7646085846a1ffc620fdd57_31564014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'main_content'} */
class Block_958125116a1ffc620fed84_04828475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_958125116a1ffc620fed84_04828475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="main-content"></div>
      <?php
}
}
/* {/block 'main_content'} */
/* {block 'notifications'} */
class Block_6108063676a1ffc620ff2f9_18742828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_6108063676a1ffc620ff2f9_18742828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'container_class'} */
class Block_6748401576a1ffc621001d3_19476798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_8019429996a1ffc62100a68_31970166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="left-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_13983986816a1ffc62102b07_33872761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_11471738766a1ffc621025d9_39332212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="center-column" class="center-column page col-md-4 col-lg-6">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13983986816a1ffc62102b07_33872761', 'content', $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_15874413496a1ffc62103378_27485227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="right-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_373243566a1ffc620ffad9_80111245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_373243566a1ffc620ffad9_80111245',
  ),
  'container_class' => 
  array (
    0 => 'Block_6748401576a1ffc621001d3_19476798',
  ),
  'left_column' => 
  array (
    0 => 'Block_8019429996a1ffc62100a68_31970166',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_11471738766a1ffc621025d9_39332212',
  ),
  'content' => 
  array (
    0 => 'Block_13983986816a1ffc62102b07_33872761',
  ),
  'right_column' => 
  array (
    0 => 'Block_15874413496a1ffc62103378_27485227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6748401576a1ffc621001d3_19476798', 'container_class', $this->tplIndex);
?>
">
          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8019429996a1ffc62100a68_31970166', 'left_column', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11471738766a1ffc621025d9_39332212', 'content_wrapper', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15874413496a1ffc62103378_27485227', 'right_column', $this->tplIndex);
?>

          </div>
        </div>
      <?php
}
}
/* {/block 'content_columns'} */
/* {block 'footer'} */
class Block_16358351526a1ffc62104b24_85952926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16358351526a1ffc62104b24_85952926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer id="footer" class="footer">
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </footer>
    <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_13562395266a1ffc621052a4_41099842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_13562395266a1ffc621052a4_41099842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/javascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'bottom_elements'} */
class Block_9713731566a1ffc62105c44_07963117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom_elements' => 
  array (
    0 => 'Block_9713731566a1ffc62105c44_07963117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:components/page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/toast-container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/password-policy-template.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'bottom_elements'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_10659451556a1ffc621068f4_67665330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_10659451556a1ffc621068f4_67665330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'modal_container'} */
class Block_18728856706a1ffc62107335_85701040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal_container' => 
  array (
    0 => 'Block_18728856706a1ffc62107335_85701040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div data-ps-target="modal-container">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "modal_content", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayModalContent'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modal_content')) {?>
          <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modal_content');?>

        <?php }?>
      </div>
    <?php
}
}
/* {/block 'modal_container'} */
/* {block 'back_to_top'} */
class Block_2308032706a1ffc62109526_75941576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'back_to_top' => 
  array (
    0 => 'Block_2308032706a1ffc62109526_75941576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a class="visually-hidden-focusable btn btn-primary back-to-top-link" href="#back-to-top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php
}
}
/* {/block 'back_to_top'} */
}

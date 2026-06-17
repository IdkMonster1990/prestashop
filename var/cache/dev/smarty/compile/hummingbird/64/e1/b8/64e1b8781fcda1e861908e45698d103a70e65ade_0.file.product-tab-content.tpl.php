<?php
/* Smarty version 4.5.5, created on 2026-06-09 12:04:03
  from 'C:\xampp\htdocs\prestashop\modules\productvideo\views\templates\admin\product-tab-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a2839730468d9_96759415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e1b8781fcda1e861908e45698d103a70e65ade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\productvideo\\views\\templates\\admin\\product-tab-content.tpl',
      1 => 1780669004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a2839730468d9_96759415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="panel product-video-panel">
    <div class="panel-heading">
        <i class="icon-video-camera"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Videos','mod'=>'productvideo'),$_smarty_tpl ) );?>

        <button type="button" class="btn btn-success pull-right" id="addVideoBtn">
            <i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Video','mod'=>'productvideo'),$_smarty_tpl ) );?>

        </button>
    </div>
    
    <div class="panel-body">
        <input type="hidden" id="product_id" value="<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" />
        <input type="hidden" id="module_token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
        
        <div id="videos-list-container">
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['videos']->value) > 0) {?>
                <table class="table table-bordered table-hover" id="videos-table">
                    <thead>
                        <tr>
                            <th class="center" width="30"></th>
                            <th class="center" width="50"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'productvideo'),$_smarty_tpl ) );?>
</th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'productvideo'),$_smarty_tpl ) );?>
</th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video URL','mod'=>'productvideo'),$_smarty_tpl ) );?>
</th>
                            <th class="center" width="80"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'productvideo'),$_smarty_tpl ) );?>
</th>
                            <th class="center" width="120"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions','mod'=>'productvideo'),$_smarty_tpl ) );?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
                            <tr id="video-row-<?php echo $_smarty_tpl->tpl_vars['video']->value['id_product_video'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['id_product_video'];?>
">
                                <td class="center drag-handle" style="cursor: move">
                                    <i class="icon-arrows-v"></i>
                                </td>
                                <td class="center"><?php echo $_smarty_tpl->tpl_vars['video']->value['id_product_video'];?>
</td>
                                <td class="video-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['video']->value['title'],'htmlall','UTF-8' ));?>
</td>
                                <td class="video-url"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['video']->value['video_url'],'htmlall','UTF-8' ));?>
</td>
                                <td class="center">
                                    <span class="list-action-enable action-enabled">
                                        <a href="#" class="toggle-active" data-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['id_product_video'];?>
">
                                            <i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['video']->value['active']) {?> hidden<?php }?>"></i>
                                            <i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['video']->value['active']) {?> hidden<?php }?>"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="center">
                                    <a href="#" class="btn btn-default edit-video" data-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['id_product_video'];?>
">
                                        <i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'productvideo'),$_smarty_tpl ) );?>

                                    </a>
                                    <a href="#" class="btn btn-danger delete-video" data-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['id_product_video'];?>
">
                                        <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'productvideo'),$_smarty_tpl ) );?>

                                    </a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php } else { ?>
                <div class="alert alert-info">
                    <i class="icon-info-circle"></i> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No videos added for this product yet. Click "Add Video" to get started.','mod'=>'productvideo'),$_smarty_tpl ) );?>

                </div>
            <?php }?>
        </div>
    </div>
</div>

<div id="videoModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Details','mod'=>'productvideo'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="video_id" value="0" />
                
                <div class="form-group">
                    <label for="video_url"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video URL','mod'=>'productvideo'),$_smarty_tpl ) );?>
</label>
                    <input type="text" class="form-control" id="video_url" placeholder="https://www.youtube.com/watch?v=... or https://vimeo.com/... or /path/to/video.mp4" />
                    <small class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supports YouTube, Vimeo, or direct .mp4/.webm URLs','mod'=>'productvideo'),$_smarty_tpl ) );?>
</small>
                </div>
                
                <div class="form-group">
                    <label for="video_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title (optional)','mod'=>'productvideo'),$_smarty_tpl ) );?>
</label>
                    <input type="text" class="form-control" id="video_title" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video title','mod'=>'productvideo'),$_smarty_tpl ) );?>
" />
                </div>
                
                <div class="form-group">
                    <label for="video_description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description (optional)','mod'=>'productvideo'),$_smarty_tpl ) );?>
</label>
                    <textarea class="form-control" id="video_description" rows="3" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video description','mod'=>'productvideo'),$_smarty_tpl ) );?>
"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="video_lang"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','mod'=>'productvideo'),$_smarty_tpl ) );?>
</label>
                    <select class="form-control" id="video_lang">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang'] == $_smarty_tpl->tpl_vars['default_lang']->value) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>

                            </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                
                <div class="video-preview">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'productvideo'),$_smarty_tpl ) );?>
</label>
                    <div id="video-preview-container"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'productvideo'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-primary" id="saveVideoBtn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Video','mod'=>'productvideo'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
// JavaScript will be loaded from separate file
<?php echo '</script'; ?>
><?php }
}

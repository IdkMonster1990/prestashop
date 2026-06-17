{* 
  Product Video Tab Template for Back Office
*}

<div class="panel product-video-panel">
    <div class="panel-heading">
        <i class="icon-video-camera"></i> {l s='Product Videos' mod='productvideo'}
        <button type="button" class="btn btn-success pull-right" id="addVideoBtn">
            <i class="icon-plus"></i> {l s='Add Video' mod='productvideo'}
        </button>
    </div>
    
    <div class="panel-body">
        <input type="hidden" id="product_id" value="{$id_product}" />
        <input type="hidden" id="module_token" value="{$token}" />
        
        <div id="videos-list-container">
            {if $videos|count > 0}
                <table class="table table-bordered table-hover" id="videos-table">
                    <thead>
                        <tr>
                            <th class="center" width="30"></th>
                            <th class="center" width="50">{l s='ID' mod='productvideo'}</th>
                            <th>{l s='Title' mod='productvideo'}</th>
                            <th>{l s='Video URL' mod='productvideo'}</th>
                            <th class="center" width="80">{l s='Active' mod='productvideo'}</th>
                            <th class="center" width="120">{l s='Actions' mod='productvideo'}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$videos item=video}
                            <tr id="video-row-{$video.id_product_video}" data-id="{$video.id_product_video}">
                                <td class="center drag-handle" style="cursor: move">
                                    <i class="icon-arrows-v"></i>
                                </td>
                                <td class="center">{$video.id_product_video}</td>
                                <td class="video-title">{$video.title|escape:'htmlall':'UTF-8'}</td>
                                <td class="video-url">{$video.video_url|escape:'htmlall':'UTF-8'}</td>
                                <td class="center">
                                    <span class="list-action-enable action-enabled">
                                        <a href="#" class="toggle-active" data-id="{$video.id_product_video}">
                                            <i class="icon-check{if !$video.active} hidden{/if}"></i>
                                            <i class="icon-remove{if $video.active} hidden{/if}"></i>
                                        </a>
                                    </span>
                                </td>
                                <td class="center">
                                    <a href="#" class="btn btn-default edit-video" data-id="{$video.id_product_video}">
                                        <i class="icon-pencil"></i> {l s='Edit' mod='productvideo'}
                                    </a>
                                    <a href="#" class="btn btn-danger delete-video" data-id="{$video.id_product_video}">
                                        <i class="icon-trash"></i> {l s='Delete' mod='productvideo'}
                                    </a>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            {else}
                <div class="alert alert-info">
                    <i class="icon-info-circle"></i> 
                    {l s='No videos added for this product yet. Click "Add Video" to get started.' mod='productvideo'}
                </div>
            {/if}
        </div>
    </div>
</div>

{* Add/Edit Video Modal *}
<div id="videoModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{l s='Video Details' mod='productvideo'}</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="video_id" value="0" />
                
                <div class="form-group">
                    <label for="video_url">{l s='Video URL' mod='productvideo'}</label>
                    <input type="text" class="form-control" id="video_url" placeholder="https://www.youtube.com/watch?v=... or https://vimeo.com/... or /path/to/video.mp4" />
                    <small class="help-block">{l s='Supports YouTube, Vimeo, or direct .mp4/.webm URLs' mod='productvideo'}</small>
                </div>
                
                <div class="form-group">
                    <label for="video_title">{l s='Title (optional)' mod='productvideo'}</label>
                    <input type="text" class="form-control" id="video_title" placeholder="{l s='Video title' mod='productvideo'}" />
                </div>
                
                <div class="form-group">
                    <label for="video_description">{l s='Description (optional)' mod='productvideo'}</label>
                    <textarea class="form-control" id="video_description" rows="3" placeholder="{l s='Video description' mod='productvideo'}"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="video_lang">{l s='Language' mod='productvideo'}</label>
                    <select class="form-control" id="video_lang">
                        {foreach from=$languages item=lang}
                            <option value="{$lang.id_lang}" {if $lang.id_lang == $default_lang}selected{/if}>
                                {$lang.name}
                            </option>
                        {/foreach}
                    </select>
                </div>
                
                <div class="video-preview">
                    <label>{l s='Preview' mod='productvideo'}</label>
                    <div id="video-preview-container"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{l s='Cancel' mod='productvideo'}</button>
                <button type="button" class="btn btn-primary" id="saveVideoBtn">{l s='Save Video' mod='productvideo'}</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
// JavaScript will be loaded from separate file
</script>
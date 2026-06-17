{* 
  Video Display Template for Product Page (Front Office)
*}

{if $videos|count > 0}
    <div class="product-videos section">
        <div class="product-videos-header">
            <h3 class="h5 products-section-title">
                <i class="material-icons">video_library</i> 
                {l s='Product Videos' mod='productvideo'}
            </h3>
        </div>
        
        <div class="product-videos-container">
            {foreach from=$videos item=video name=video_loop}
                <div class="product-video-item {if $smarty.foreach.video_loop.first}active{/if}" data-video-id="{$video.id_product_video}">
                    
                    {if $video.embed_url}
                        <div class="video-wrapper" style="max-width: 100%;">
                            <iframe 
                                src="{$video.embed_url}" 
                                width="560" 
                                height="315" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    {/if}
                    
                    {if $video.title}
                        <div class="video-caption">
                            <h4>{$video.title|escape:'htmlall':'UTF-8'}</h4>
                            {if $video.description}
                                <p>{$video.description|escape:'htmlall':'UTF-8'}</p>
                            {/if}
                        </div>
                    {/if}
                </div>
            {/foreach}
        </div>
        
        {if $videos|count > 1}
            <div class="video-thumbnails">
                {foreach from=$videos item=video name=video_loop}
                    <div class="video-thumbnail" data-video-id="{$video.id_product_video}">
                        <div class="thumbnail-wrapper">
                            <i class="material-icons play-icon">play_circle_outline</i>
                            <img src="https://img.youtube.com/vi/{$video.embed_url|regex_replace:'/.*embed\/([^?]+).*/':'$1'}/mqdefault.jpg" alt="{$video.title|escape:'htmlall':'UTF-8'}" />
                        </div>
                        <div class="thumbnail-title">{$video.title|escape:'htmlall':'UTF-8'|truncate:30}</div>
                    </div>
                {/foreach}
            </div>
        {/if}
    </div>
{/if}
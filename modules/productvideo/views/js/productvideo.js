/**
 * Product Video Module JavaScript
 */

$(document).ready(function() {
    var productVideo = {
        init: function() {
            this.bindEvents();
            this.initSortable();
        },
        
        bindEvents: function() {
            // Add video button
            $('#addVideoBtn').on('click', function(e) {
                e.preventDefault();
                productVideo.openModal();
            });
            
            // Save video button
            $('#saveVideoBtn').on('click', function(e) {
                e.preventDefault();
                productVideo.saveVideo();
            });
            
            // Edit video
            $(document).on('click', '.edit-video', function(e) {
                e.preventDefault();
                var id_video = $(this).data('id');
                productVideo.editVideo(id_video);
            });
            
            // Delete video
            $(document).on('click', '.delete-video', function(e) {
                e.preventDefault();
                var id_video = $(this).data('id');
                productVideo.deleteVideo(id_video);
            });
            
            // Toggle active status
            $(document).on('click', '.toggle-active', function(e) {
                e.preventDefault();
                var id_video = $(this).data('id');
                productVideo.toggleActive(id_video);
            });
            
            // Preview video URL on change
            $('#video_url').on('input', function() {
                productVideo.previewVideo();
            });
            
            // Reset modal on close
            $('#videoModal').on('hidden.bs.modal', function() {
                productVideo.resetModal();
            });
        },
        
        initSortable: function() {
            if ($('#videos-table tbody').length) {
                $('#videos-table tbody').sortable({
                    handle: '.drag-handle',
                    update: function() {
                        var positions = [];
                        $('#videos-table tbody tr').each(function(index) {
                            positions.push($(this).data('id'));
                        });
                        productVideo.updatePositions(positions);
                    }
                });
            }
        },
        
        openModal: function(id_video) {
            if (id_video && id_video > 0) {
                this.editVideo(id_video);
            } else {
                $('#video_id').val(0);
                $('#video_url').val('');
                $('#video_title').val('');
                $('#video_description').val('');
                $('#video-preview-container').html('');
                $('#videoModal').modal('show');
            }
        },
        
        editVideo: function(id_video) {
            var row = $('#video-row-' + id_video);
            var url = row.find('.video-url').text().trim();
            var title = row.find('.video-title').text().trim();
            
            $('#video_id').val(id_video);
            $('#video_url').val(url);
            $('#video_title').val(title);
            $('#video_description').val('');
            this.previewVideo();
            $('#videoModal').modal('show');
        },
        
        saveVideo: function() {
    var id_product = $('#product_id').val();
    var id_video = $('#video_id').val();
    var id_lang = $('#video_lang').val();
    var video_url = $('#video_url').val().trim();
    var title = $('#video_title').val();
    var description = $('#video_description').val();
    
    if (!video_url) {
        alert('Please enter a video URL');
        return;
    }
    
    var action = (id_video > 0) ? 'update_video' : 'add_video';
    var data = {
        action: action,
        id_product: id_product,
        id_lang: id_lang,
        video_url: video_url,
        title: title,
        description: description,
        token: $('#module_token').val()
    };
    
    if (id_video > 0) {
        data.id_video = id_video;
    }
    
    // Use the dedicated AJAX controller
    var ajaxUrl = prestashop.urls.base + 'module/productvideo/ajax?rand=' + Math.random();
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                location.reload();
            } else {
                alert(response.message || 'Error saving video');
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', error);
            console.error('Response:', xhr.responseText);
            alert('Error saving video. Check console for details.');
        }
    });
},

deleteVideo: function(id_video) {
    if (!confirm('Are you sure you want to delete this video?')) {
        return;
    }
    
    $.ajax({
        url: prestashop.urls.base + 'module/productvideo/ajax',
        type: 'POST',
        data: {
            action: 'delete_video',
            id_video: id_video,
            token: $('#module_token').val()
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                $('#video-row-' + id_video).remove();
                if ($('#videos-table tbody tr').length === 0) {
                    location.reload();
                }
            } else {
                alert(response.message || 'Error deleting video');
            }
        }
    });
},

toggleActive: function(id_video) {
    var $iconCheck = $('#video-row-' + id_video).find('.icon-check');
    var $iconRemove = $('#video-row-' + id_video).find('.icon-remove');
    
    $.ajax({
        url: prestashop.urls.base + 'module/productvideo/ajax',
        type: 'POST',
        data: {
            action: 'toggle_active',
            id_video: id_video,
            token: $('#module_token').val()
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                if (response.active) {
                    $iconCheck.removeClass('hidden');
                    $iconRemove.addClass('hidden');
                } else {
                    $iconCheck.addClass('hidden');
                    $iconRemove.removeClass('hidden');
                }
            } else {
                alert(response.message || 'Error toggling status');
            }
        }
    });
},

updatePositions: function(positions) {
    $.ajax({
        url: prestashop.urls.base + 'module/productvideo/ajax',
        type: 'POST',
        data: {
            action: 'update_positions',
            positions: positions,
            token: $('#module_token').val()
        },
        dataType: 'json',
        success: function(response) {
            if (!response.success) {
                console.error('Error updating positions');
            }
        }
    });
},
        
        previewVideo: function() {
            var url = $('#video_url').val();
            var embedUrl = '';
            
            if (!url) {
                $('#video-preview-container').html('');
                return;
            }
            
            // YouTube
            if (url.includes('youtube.com') || url.includes('youtu.be')) {
                var videoId = '';
                var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
                var match = url.match(regExp);
                if (match && match[2].length === 11) {
                    videoId = match[2];
                }
                if (videoId) {
                    embedUrl = 'https://www.youtube.com/embed/' + videoId;
                }
            }
            // Vimeo
            else if (url.includes('vimeo.com')) {
                var vimeoId = url.match(/vimeo\.com\/(?:.*#|.*\/videos\/)?([0-9]+)/);
                if (vimeoId && vimeoId[1]) {
                    embedUrl = 'https://player.vimeo.com/video/' + vimeoId[1];
                }
            }
            // Self-hosted MP4
            else if (url.match(/\.(mp4|webm|ogg)$/i)) {
                embedUrl = url;
            }
            
            if (embedUrl) {
                $('#video-preview-container').html(
                    '<iframe width="100%" height="200" src="' + embedUrl + '" frameborder="0" allowfullscreen></iframe>'
                );
            } else {
                $('#video-preview-container').html('<p class="text-muted">Preview not available for this URL</p>');
            }
        },
        
        resetModal: function() {
            $('#video_id').val(0);
            $('#video_url').val('');
            $('#video_title').val('');
            $('#video_description').val('');
            $('#video-preview-container').html('');
        }
    };
    
    // Initialize when module tab is loaded (for dynamic product tabs)
    if ($('#product-video-tab').length) {
        productVideo.init();
    }
    
    // Also initialize if the video panel exists directly
    if ($('.product-video-panel').length) {
        productVideo.init();
    }
});
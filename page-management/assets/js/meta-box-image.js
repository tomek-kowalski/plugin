   
/*
* https://wordpress.stackexchange.com/questions/266094/upload-button-in-meta-box-not-opening-library
* Attaches the image uploader to the input field
*/
jQuery(document).ready(function($){


  var meta_image_frame;
   

   jQuery('#front-page_image_phone').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#front-page_image_up_link').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-up').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#front-page_image_up_link_1').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-icon').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#image_down_1_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-1').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#image_down_2_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-2').val(media_attachment.url);
    });
    meta_image_frame.open();

});

jQuery('#image_down_3_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
        jQuery('#meta-image-3').val(media_attachment.url);
        });
        meta_image_frame.open();
});

jQuery('#image_down_4_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-4').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#image_down_4_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-4').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#image_down_5_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-5').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#image_down_6_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-6').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#image_down_7_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-7').val(media_attachment.url);
    });
    meta_image_frame.open();
});

jQuery('#image_down_8_btn').click(function(e){
    e.preventDefault();
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'image' }
    });
    meta_image_frame.on('select', function(){
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
       jQuery('#meta-image-8').val(media_attachment.url);
    });
    meta_image_frame.open();
});


});




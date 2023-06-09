   
/*
* https://wordpress.stackexchange.com/questions/266094/upload-button-in-meta-box-not-opening-library
* Attaches the image uploader to the input field
*/
jQuery(document).ready(function($){

  // Instantiates the variable that holds the media library frame.
  var meta_image_frame;
   
   // Runs when the image button is clicked.
   jQuery('#header_ndt_btn').click(function(e){

    // Prevents the default action from occuring.
    e.preventDefault();

    // If the frame already exists, re-open it.
    if ( meta_image_frame ) {
        meta_image_frame.open();
        return;
    }

    // Sets up the media library frame
    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: { text:  meta_image.button },
        library: { type: 'application/pdf' }
    });

    // Runs when an image is selected.
    meta_image_frame.on('select', function(){

        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();

        // Sends the attachment URL to our custom image input field.
       jQuery('#meta-pdf').val(media_attachment.url);
    });

    // Opens the media library frame.
    meta_image_frame.open();
});
});


<?php

//section phone
    $title      = get_post_meta( $post->ID, 'front-page_title', true );
    $text       = get_post_meta( $post->ID, 'front-page_text', true );
    $button_url = get_post_meta( $post->ID, 'front-page_button_url', true );
    $btn_text   = get_post_meta( $post->ID, 'front-page_btn_text', true );
    $phone_no   = get_post_meta( $post->ID, 'front-page_phone_no', true );
    $image      = get_post_meta( $post->ID, 'front-page_image', true );
    //$button_ndt = get_post_meta( $post->ID, 'front-page_ndt', true );

//section up
    $image_up      = get_post_meta( $post->ID, 'front-page_image_up', true );
    $title_up      = get_post_meta( $post->ID, 'front-page_title_up', true );
    $image_up_1    = get_post_meta( $post->ID, 'front-page_image_up_1', true );
    $text_up_1     = get_post_meta( $post->ID, 'front-page_text_up_1', true );
    $text_up_2     = get_post_meta( $post->ID, 'front-page_text_up_2', true );
    $text_up_3     = get_post_meta( $post->ID, 'front-page_text_up_3', true );
    $text_up_4     = get_post_meta( $post->ID, 'front-page_text_up_4', true );

//section middle
    $text_middle_1        = get_post_meta( $post->ID, 'text_middle_1', true );
    $text_middle_2        = get_post_meta( $post->ID, 'text_middle_2', true );
    $text_middle_3        = get_post_meta( $post->ID, 'text_middle_3', true );
    $text_middle_4        = get_post_meta( $post->ID, 'text_middle_4', true );
    $text_middle_5        = get_post_meta( $post->ID, 'text_middle_5', true );
    $text_middle_6        = get_post_meta( $post->ID, 'text_middle_6', true );
    $text_middle_7        = get_post_meta( $post->ID, 'text_middle_7', true );
    $text_middle_8        = get_post_meta( $post->ID, 'text_middle_8', true );
    $text_middle_9        = get_post_meta( $post->ID, 'text_middle_9', true );
    $text_middle_10       = get_post_meta( $post->ID, 'text_middle_10', true );
    $text_middle_11       = get_post_meta( $post->ID, 'text_middle_11', true );
    $text_middle_12       = get_post_meta( $post->ID, 'text_middle_12', true );
    $text_middle_btn      = get_post_meta( $post->ID, 'text_middle_btn', true );

//section down
    $title_down           = get_post_meta( $post->ID, 'down_title', true );
    $image_down_1         = get_post_meta( $post->ID, 'image_down_1', true );
    $title_down_1         = get_post_meta( $post->ID, 'title_down_1', true );
    $text_down_1          = get_post_meta( $post->ID, 'text_down_1', true );
    $image_down_2         = get_post_meta( $post->ID, 'image_down_2', true );
    $title_down_2         = get_post_meta( $post->ID, 'title_down_2', true );
    $text_down_2          = get_post_meta( $post->ID, 'text_down_2', true );
    $image_down_3         = get_post_meta( $post->ID, 'image_down_3', true );
    $title_down_3         = get_post_meta( $post->ID, 'title_down_3', true );
    $text_down_3          = get_post_meta( $post->ID, 'text_down_3', true );
    $image_down_4         = get_post_meta( $post->ID, 'image_down_4', true );
    $title_down_4         = get_post_meta( $post->ID, 'title_down_4', true );
    $text_down_4          = get_post_meta( $post->ID, 'text_down_4', true );
    $image_down_5         = get_post_meta( $post->ID, 'image_down_5', true );
    $title_down_5         = get_post_meta( $post->ID, 'title_down_5', true );
    $text_down_5          = get_post_meta( $post->ID, 'text_down_5', true );
    $image_down_6         = get_post_meta( $post->ID, 'image_down_6', true );
    $title_down_6         = get_post_meta( $post->ID, 'title_down_6', true );
    $text_down_6          = get_post_meta( $post->ID, 'text_down_6', true );
    $image_down_7         = get_post_meta( $post->ID, 'image_down_7', true );
    $title_down_7         = get_post_meta( $post->ID, 'title_down_7', true );
    $text_down_7          = get_post_meta( $post->ID, 'text_down_7', true );
    $image_down_8         = get_post_meta( $post->ID, 'image_down_8', true );
    $title_down_8         = get_post_meta( $post->ID, 'title_down_8', true );
    $text_down_8          = get_post_meta( $post->ID, 'text_down_8', true );
   
    $title_down_row        = get_post_meta( $post->ID, 'title_down_row', true );
    $placeholder_down      = get_post_meta( $post->ID, 'placeholder_down', true );



?>
<table class="form-table front-page-metabox"> 
    <input type="hidden" name="front-page_nonce" value="<?php echo wp_create_nonce( "front-page_nonce" ); ?>">
    <tr>
        <th>
            Section phone
        </th>
    </tr>
    <tr>
        <th>
            <label for="front-page_title"><?php esc_html_e( 'Title', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="front-page_title" 
                id="front-page_title" 
                class="regular-text"
            ><?php echo( isset($title)) ? esc_html_e(trim($title)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="front-page_text"><?php esc_html_e( 'Text', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="front-page_text" 
                id="front-page_text" 
                class="regular-text"
                ><?php echo( isset ( $text ) ) ? esc_html_e($text) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="front-page_button_url"><?php esc_html_e( 'Button URL', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="url" 
                name="front-page_button_url" 
                id="front-page_button_url" 
                class="regular-text"
                value="<?php echo( isset ( $button_url ) ) ? esc_url( $button_url ) : ''; ?>"
            >
        </td>
    </tr> 
    <tr>
        <th>
            <label for="front-page_btn_text"><?php esc_html_e( 'Button Text', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="front-page_btn_text" 
                id="front-page_btn_text" 
                class="regular-text"
                value="<?php echo( isset ( $btn_text ) ) ? esc_html_e( $btn_text ) : ''; ?>"
            >
        </td>
    </tr> 
    <tr>
        <th>
            <label for="front-page_phone_no"><?php esc_html_e( 'Phone No', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="front-page_phone_no" 
                id="front-page_phone_no" 
                class="regular-text"
                value="<?php echo( isset ( $phone_no ) ) ? esc_html_e( $phone_no ) : ''; ?>"
            >
        </td>
    </tr> 
    <tr>
        <th>
            <label for="front-page_image"><?php esc_html_e( 'Image', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="front-page_image" 
                id="meta-image" 
                class="regular-text"
                value="<?php echo( isset ( $image ) ) ? esc_url( $image ) : ''; ?>"
            > 
            <input type="button" id="front-page_image_phone" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image) {
            $img_src = base64_encode(file_get_contents($image));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image ) ) ? ($image) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            Section up
        </th>
    </tr>
    <tr>
        <th>
            <label for="front-page_image_up"><?php esc_html_e( 'Image Section UP', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="front-page_image_up" 
                id="meta-image-up" 
                class="regular-text"
                value="<?php echo( isset ( $image_up ) ) ? esc_url( $image_up ) : ''; ?>"
            > 
            <input type="button" id="front-page_image_up_link" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_up) {
            $img_src = base64_encode(file_get_contents($image_up));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_up) ) ? ($image_up) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="front-page_title_up"><?php esc_html_e( 'Title Section Phone', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="front-page_title_up" 
                id="front-page_title_up" 
                class="regular-text"
            ><?php echo( isset($title_up)) ? esc_html_e(trim($title_up)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="front-page_image_up_1"><?php esc_html_e( 'Listing Image', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="front-page_image_up_1" 
                id="meta-image-icon" 
                class="regular-text"
                value="<?php echo( isset ( $image_up_1 ) ) ? esc_url( $image_up_1 ) : ''; ?>"
            > 
            <input type="button" name="front-page_image_up_1" id="front-page_image_up_link_1" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_up_1) {
            $img_src = base64_encode(file_get_contents($image_up_1));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_up_1 ) ) ? ($image_up_1) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="front-page_text_up_1"><?php esc_html_e( 'Text Listed 1', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="front-page_text_up_1" 
                id="front-page_text_up_1" 
                class="regular-text"
                ><?php echo( isset ( $text_up_1 ) ) ? esc_html_e($text_up_1) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="front-page_text_up_2"><?php esc_html_e( 'Text Listed 2', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="front-page_text_up_2" 
                id="front-page_text_up_2" 
                class="regular-text"
                ><?php echo( isset ( $text_up_2 ) ) ? esc_html_e($text_up_2) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="front-page_text_up_3"><?php esc_html_e( 'Text Listed 3', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="front-page_text_up_3" 
                id="front-page_text_up_3" 
                class="regular-text"
                ><?php echo( isset ( $text_up_3 ) ) ? esc_html_e($text_up_3) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="front-page_text_up_4"><?php esc_html_e( 'Text Listed 4', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="front-page_text_up_4" 
                id="front-page_text_up_4" 
                class="regular-text"
                ><?php echo( isset ( $text_up_4) ) ? esc_html_e($text_up_4) : ''; ?></textarea>
        </td>
    </tr>

    <tr>
        <th>
            Section middle
        </th>
    </tr>
    <tr>
        <th>
            <label for="text_middle_1"><?php esc_html_e( 'Listed Numbers 1C 1 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_1" 
                id="text_middle_1" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_1 ) ) ? esc_html_e($text_middle_1) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_2"><?php esc_html_e( 'Description 1C 2 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_2" 
                id="text_middle_2" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_2 ) ) ? esc_html_e($text_middle_2) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_3"><?php esc_html_e( 'Listed Numbers 1C 3 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_3" 
                id="text_middle_3" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_3 ) ) ? esc_html_e($text_middle_3) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_4"><?php esc_html_e( 'Description 1C 4 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_4" 
                id="text_middle_4" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_4 ) ) ? esc_html_e($text_middle_4) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_5"><?php esc_html_e( 'Listed Numbers 2C 1 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_5" 
                id="text_middle_5" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_5 ) ) ? esc_html_e($text_middle_5) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_6"><?php esc_html_e( 'Description 2C 2 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_6" 
                id="text_middle_6" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_6 ) ) ? esc_html_e($text_middle_6) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_7"><?php esc_html_e( 'Listed Numbers 2C 3 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_7" 
                id="text_middle_7" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_7 ) ) ? esc_html_e($text_middle_7) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_8"><?php esc_html_e( 'Description 2C 4 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_8" 
                id="text_middle_8" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_8 ) ) ? esc_html_e($text_middle_8) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_9"><?php esc_html_e( 'Listed Numbers 3C 1 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_9" 
                id="text_middle_9" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_9 ) ) ? esc_html_e($text_middle_9) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_10"><?php esc_html_e( 'Description 3C 2 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_10" 
                id="text_middle_10" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_10 ) ) ? esc_html_e($text_middle_10) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_11"><?php esc_html_e( 'Listed Numbers 3C 3 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_11" 
                id="text_middle_11" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_11 ) ) ? esc_html_e($text_middle_11) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_12"><?php esc_html_e( 'Listed Numbers 3C 4 Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_middle_12" 
                id="text_middle_12" 
                class="regular-text"
                ><?php echo( isset ( $text_middle_12) ) ? esc_html_e($text_middle_12) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="text_middle_btn "><?php esc_html_e( 'Button Text', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="text_middle_btn" 
                id="text_middle_btn" 
                class="regular-text"
                value="<?php echo( isset ( $text_middle_btn ) ) ? esc_html_e( $text_middle_btn ) : ''; ?>"
            >
        </td>
    </tr> 
    <tr>
        <th>
            Section down
        </th>
    </tr>
    <tr>
        <th>
            <label for="down_title"><?php esc_html_e( 'Title', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="down_title" 
                id="down_title" 
                class="regular-text"
            ><?php echo( isset($title_down)) ? esc_html_e(trim($title_down)) : ''; ?></textarea>
        </td>
    </tr>

<!--column 1 -->

    <tr>
        <th>
            <label for="image_down_1"><?php esc_html_e( 'Image 1', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_1" 
                id="meta-image-1" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_1 ) ) ? esc_url( $image_down_1 ) : ''; ?>"
            > 
            <input type="button" id="image_down_1_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_1) {
            $img_src = base64_encode(file_get_contents($image_down_1));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_1 ) ) ? ($image_down_1) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_1"><?php esc_html_e( 'Title 1', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_1" 
                id="title_down_1" 
                class="regular-text"
            ><?php echo( isset($title_down_1)) ? esc_html_e(trim($title_down_1)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_1"><?php esc_html_e( 'Text 1', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_1" 
                id="text_down_1" 
                class="regular-text"
                ><?php echo( isset ( $text_down_1 ) ) ? esc_html_e($text_down_1) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="image_down_2"><?php esc_html_e( 'Image 2', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_2" 
                id="meta-image-2" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_2 ) ) ? esc_url( $image_down_2 ) : ''; ?>"
            > 
            <input type="button" name="image_down_2" id="image_down_2_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_2) {
            $img_src = base64_encode(file_get_contents($image_down_2));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_2 ) ) ? ($image_down_2) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_2"><?php esc_html_e( 'Title 2', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_2" 
                id="title_down_2" 
                class="regular-text"
            ><?php echo( isset($title_down_2)) ? esc_html_e(trim($title_down_2)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_2"><?php esc_html_e( 'Text 2', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_2" 
                id="text_down_2" 
                class="regular-text"
                ><?php echo( isset ( $text_down_2 ) ) ? esc_html_e($text_down_2) : ''; ?></textarea>
        </td>
    </tr>

    <!--column 2 -->

<tr>
        <th>
            <label for="image_down_3"><?php esc_html_e( 'Image 3', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_3" 
                id="meta-image-3" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_3 ) ) ? esc_url( $image_down_3 ) : ''; ?>"
            > 
            <input type="button" name="image_down_3" id="image_down_3_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_3) {
            $img_src = base64_encode(file_get_contents($image_down_3));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_3 ) ) ? ($image_down_3) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_3"><?php esc_html_e( 'Title 3', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_3" 
                id="title_down_3" 
                class="regular-text"
            ><?php echo( isset($title_down_3)) ? esc_html_e(trim($title_down_3)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_3"><?php esc_html_e( 'Text 3', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_3" 
                id="text_down_3" 
                class="regular-text"
                ><?php echo( isset ($text_down_3) ) ? esc_html_e($text_down_3) : ''; ?></textarea>
        </td>
    </tr>

    <tr>
        <th>
            <label for="image_down_4"><?php esc_html_e( 'Image 4', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_4" 
                id="meta-image-4" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_4 ) ) ? esc_url( $image_down_4 ) : ''; ?>"
            > 
            <input type="button" name="image_down_4" id="image_down_4_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_4) {
            $img_src = base64_encode(file_get_contents($image_down_4));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_4 ) ) ? ($image_down_4) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_4"><?php esc_html_e( 'Title 4', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_4" 
                id="title_down_4" 
                class="regular-text"
            ><?php echo( isset($title_down_4)) ? esc_html_e(trim($title_down_4)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_4"><?php esc_html_e( 'Text 4', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_4" 
                id="text_down_4" 
                class="regular-text"
                ><?php echo( isset ( $text_down_4 ) ) ? esc_html_e($text_down_4) : ''; ?></textarea>
        </td>
    </tr>

<!--column 3 -->
    
    <tr>
        <th>
            <label for="image_down_5"><?php esc_html_e( 'Image 5', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_5" 
                id="meta-image-5" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_5 ) ) ? esc_url( $image_down_5 ) : ''; ?>"
            > 
            <input type="button" name="image_down_5" id="image_down_5_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_5) {
            $img_src = base64_encode(file_get_contents($image_down_5));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_5 ) ) ? ($image_down_5) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_5"><?php esc_html_e( 'Title 5', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_5" 
                id="title_down_5" 
                class="regular-text"
            ><?php echo( isset($title_down_5)) ? esc_html_e(trim($title_down_5)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_5"><?php esc_html_e( 'Text 5', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_5" 
                id="text_down_5" 
                class="regular-text"
                ><?php echo( isset ( $text_down_5 ) ) ? esc_html_e($text_down_5) : ''; ?></textarea>
        </td>
    </tr>    
    <tr>
        <th>
            <label for="image_down_6"><?php esc_html_e( 'Image 6', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_6" 
                id="meta-image-6" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_6 ) ) ? esc_url( $image_down_6 ) : ''; ?>"
            > 
            <input type="button" name="image_down_6" id="image_down_6_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_6) {
            $img_src = base64_encode(file_get_contents($image_down_6));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_6) ) ? ($image_down_6) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_6"><?php esc_html_e( 'Title 6', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_6" 
                id="title_down_6" 
                class="regular-text"
            ><?php echo( isset($title_down_6)) ? esc_html_e(trim($title_down_6)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_6"><?php esc_html_e( 'Text 6', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_6" 
                id="text_down_6" 
                class="regular-text"
                ><?php echo( isset ( $text_down_6 ) ) ? esc_html_e($text_down_6) : ''; ?></textarea>
        </td>
    </tr>

<!--column 4 -->

    <tr>
        <th>
            <label for="image_down_7"><?php esc_html_e( 'Image 7', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_7" 
                id="meta-image-7" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_7 ) ) ? esc_url( $image_down_7 ) : ''; ?>"
            > 
            <input type="button" name="image_down_7" id="image_down_7_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_7) {
            $img_src = base64_encode(file_get_contents($image_down_7));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_7 ) ) ? ($image_down_7) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_7"><?php esc_html_e( 'Title 7', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_7" 
                id="title_down_7" 
                class="regular-text"
            ><?php echo( isset($title_down_7)) ? esc_html_e(trim($title_down_7)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_7"><?php esc_html_e( 'Text 7', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_7" 
                id="text_down_7" 
                class="regular-text"
                ><?php echo( isset ( $text_down_7 ) ) ? esc_html_e($text_down_7) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
        <th>
            <label for="image_down_8"><?php esc_html_e( 'Image 8', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="image_down_8" 
                id="meta-image-8" 
                class="regular-text"
                value="<?php echo( isset ( $image_down_8 ) ) ? esc_url( $image_down_8 ) : ''; ?>"
            > 
            <input type="button" name="image_down_8" id="image_down_8_btn" class="button btn-plugin" value="<?php _e( 'Choose an image', 'page_manage' )?>" />
            <?php 
            if($image_down_8) {
            $img_src = base64_encode(file_get_contents($image_down_8));
            }
             ?>
        </td>
        <td>
            <img height="40px" src="<?php echo( isset ( $image_down_8) ) ? ($image_down_8) : ''; ?>">
        </td>
    </tr> 
    <tr>
        <th>
            <label for="title_down_8"><?php esc_html_e( 'Title 8', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_8" 
                id="title_down_8" 
                class="regular-text"
            ><?php echo( isset($title_down_8)) ? esc_html_e(trim($title_down_8)) : ''; ?></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        <th>
            <label for="text_down_8"><?php esc_html_e( 'Text 8', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="text_down_8" 
                id="text_down_8" 
                class="regular-text"
                ><?php echo( isset ( $text_down_8 ) ) ? esc_html_e($text_down_8) : ''; ?></textarea>
        </td>
    </tr>

 <!--section down - title and button -->

    <tr>
        <th>
            <label for="title_down_row"><?php esc_html_e( 'Title Row', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <textarea 
                type="text" 
                name="title_down_row" 
                id="title_down_row" 
                class="regular-text"
            ><?php echo( isset($title_down_row)) ? esc_html_e(trim($title_down_row)) : ''; ?></textarea>
        </td>
    </tr>

    <tr>
        <th>
            <label for="placeholder_down"><?php esc_html_e( 'Button Text', 'page-manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="placeholder_down" 
                id="placeholder_down" 
                class="regular-text"
                value="<?php echo( isset ( $placeholder_down ) ) ? esc_html_e( $placeholder_down ) : ''; ?>"
            >
        </td>
    </tr> 
      

</table>
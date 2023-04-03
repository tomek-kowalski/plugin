<?php
    $button_ndt = get_post_meta( $post->ID, 'header_ndt', true );
?>
<table class="form-table header-metabox"> 
    <input type="hidden" name="header_nonce" value="<?php echo wp_create_nonce( "header_nonce" ); ?>">
    <tr>
        <th>
            <label for="header_ndt"><?php esc_html_e( 'Button NDT URL', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="text" 
                name="header_ndt" 
                id="meta-pdf" 
                class="regular-text"
                value="<?php echo( isset ( $button_ndt ) ) ? $button_ndt : ''; ?>"
            >
            <input type="button" name="header_ndt" id="header_ndt_btn" class="button btn-plugin" value="<?php _e( 'Choose a file', 'page_manage' )?>" />
        </td>
        <?php 
            if($button_ndt) {
            $img_src = PM_URL . 'assets/images/pdf-svgrepo-com.svg';
            }
             ?>
        <td>
            <img height="40px" src="<?php echo( isset ( $img_src  ) ) ? ($img_src ) : ''; ?>">
        </td>
    </tr> 
</table>
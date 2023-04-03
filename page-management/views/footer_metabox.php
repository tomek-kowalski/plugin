<?php
    $button_ndt = get_post_meta( $post->ID, 'footer_ndt', true );
?>
<table class="form-table footer-metabox"> 
    <input type="hidden" name="footer_nonce" value="<?php echo wp_create_nonce( "footer_nonce" ); ?>">

    <tr>
        <th>
            <label for="footer_ndt"><?php esc_html_e( 'Button NDT URL', 'page_manage' ); ?></label>
        </th>
        <td class="first-cell">
            <input 
                type="url" 
                name="footer_ndt" 
                id="footer-pdf" 
                class="regular-text"
                value="<?php echo( isset ( $button_ndt ) ) ? esc_url( $button_ndt ) : ''; ?>"
            >
            <input type="button" name="footer_ndt" id="footer_ndt_btn" class="button btn-plugin" value="<?php _e( 'Choose a file', 'page_manage' )?>" />
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
<?php 

if( !class_exists( 'PM_Post_Type') ){
    class PM_Post_Type extends PM{
        function __construct(){
            add_action( 'init', array( $this, 'create_post_type' ) );
            add_action( 'save_post', array( $this, 'save_post' ), 10, 2 );
            add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
            add_action( 'admin_enqueue_scripts', array($this,'meta_image_enqueue') );
        }


        public function create_post_type(){
            register_post_type(
                'header',
                array(
                    'label' => esc_html__( 'Item', 'page_manage' ),
                    'description'   => esc_html__( 'Page management', 'page_manage' ),
                    'labels' => array(
                        'name'  => esc_html__( 'Items', 'page_manage' ),
                        'singular_name' => esc_html__( 'Item', 'page_manage' ),
                    ),
                    'public'    => true,
                    'supports'  => array( 'title' ),
                    'hierarchical'  => false,
                    'show_ui'   => true,
                    'show_in_menu'  => false,
                    'menu_position' => 5,
                    'show_in_admin_bar' => true,
                    'show_in_nav_menus' => true,
                    'can_export'    => true,
                    'has_archive'   => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'show_in_rest'  => true,
                    'menu_icon' => 'dashicons-images-alt2',
                )
            );
        }

        function meta_image_enqueue() {
  
                wp_enqueue_media();

                wp_enqueue_style( 'pm-admin', PM_URL . 'assets/css/admin.css' );
        
                // Registers and enqueues the required javascript.


                wp_register_script( 'meta-box-pdf', PM_URL . 'assets/js/meta-box-pdf.js', array( 'jquery' ) );
                wp_localize_script( 'meta-box-pdf', 'meta_image',
                    array(
                        'title'  => __( 'Choose a PDF file', 'page_manage' ),
                        'button' => __( 'Use this PDF file', 'page_manage' ),
                    )
                );

                wp_enqueue_script( 'meta-box-pdf' );
        }

        public function add_meta_boxes(){
            add_meta_box(
                'header_meta_box',
                esc_html__( 'Header Options', 'page_manage' ),
                array( $this, 'add_inner_meta_boxes' ),
                'header',
                'normal',
                'high' 
            );
        }

        public function add_inner_meta_boxes($post){
            require_once( PM_PATH . 'views/header_metabox.php' );
        }

        public function save_post( $post_id ){
            if( isset( $_POST['pmh_nonce'] ) ){
                if( ! wp_verify_nonce( $_POST['pmh_nonce'], 'pmh_nonce' ) ){
                    return;
                }
            }

            if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
                return;
            }

            if( isset( $_POST['post_type'] ) && $_POST['post_type'] === 'header' ){
                if( ! current_user_can( 'edit_page', $post_id ) ){
                    return;
                }elseif( ! current_user_can( 'edit_post', $post_id ) ){
                    return;
                }
            }
            
            if (isset($_POST['action']) && $_POST['action'] == 'editpost' && $_POST['post_type'] === 'header' ) {

                $old_button_ndt     = get_post_meta( $post_id, 'header_ndt', true ); 
                $new_button_ndt     = $_POST['header_ndt']; 

                update_post_meta( $post_id,'header_ndt', $new_button_ndt , $old_button_ndt );
            }   
        }
    }
}

$pmh = new PM_Post_Type();
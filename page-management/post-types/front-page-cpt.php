<?php 

if( !class_exists( 'PM_Post_Type_Front') ){
    class PM_Post_Type_Front extends PM{
        function __construct(){
            add_action( 'init', array( $this, 'create_post_type' ) );
            add_action( 'save_post', array( $this, 'save_post' ), 10, 2 );
            add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
            add_action( 'admin_enqueue_scripts', array($this,'meta_image_enqueue') );
        }


        public function create_post_type(){
            register_post_type(
                'front-page',
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
                wp_register_script( 'meta-box-image', PM_URL . 'assets/js/meta-box-image.js', array( 'jquery' ) );
                wp_localize_script( 'meta-box-image', 'meta_image',
                    array(
                        'title'  => __( 'Choose an Image', 'page_manage' ),
                        'button' => __( 'Use this image', 'page_manage' ),
                    )
                );
                wp_enqueue_script( 'meta-box-image' );

        }

        public function add_meta_boxes(){
            add_meta_box(
                'front-page_meta_box',
                esc_html__( 'Front Page Options', 'page_manage' ),
                array( $this, 'add_inner_meta_boxes' ),
                'front-page',
                'normal',
                'high' 
            );
        }

        public function add_inner_meta_boxes($post){
            require_once( PM_PATH . 'views/front-page_metabox.php' );
        }

        public function save_post( $post_id ){
            if( isset( $_POST['pm_nonce'] ) ){
                if( ! wp_verify_nonce( $_POST['pm_nonce'], 'pm_nonce' ) ){
                    return;
                }
            }

            if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
                return;
            }

            if( isset( $_POST['post_type'] ) && $_POST['post_type'] === 'front-page' ){
                if( ! current_user_can( 'edit_page', $post_id ) ){
                    return;
                }elseif( ! current_user_can( 'edit_post', $post_id ) ){
                    return;
                }
            }
            
            if (isset($_POST['action']) && $_POST['action'] == 'editpost' && $_POST['post_type'] === 'front-page' ) {

                $old_title          = get_post_meta( $post_id, 'front-page_title', true ); 
                $new_title          = $_POST['front-page_title'];
                $old_text           = get_post_meta( $post_id, 'front-page_text', true ); 
                $new_text           = $_POST['front-page_text'];
                $old_button_url     = get_post_meta( $post_id, 'front-page_user_url', true ); 
                $new_button_url     = $_POST['front-page_button_url']; 
                $old_btn_text       = get_post_meta( $post_id, 'front-page_btn_text', true ); 
                $new_btn_text       = $_POST['front-page_btn_text']; 
                $old_phone_no       = get_post_meta( $post_id, 'front-page_phone_no', true ); 
                $new_phone_no       = $_POST['front-page_phone_no']; 
                $old_image          = get_post_meta( $post_id, 'front-page_image', true ); 
                $new_image          = $_POST['front-page_image']; 

                update_post_meta( $post_id, 'front-page_title', $new_title , $old_title );
                update_post_meta( $post_id, 'front-page_text',  $new_text , $old_text );
                update_post_meta( $post_id, 'front-page_button_url', $new_button_url , $old_button_url );
                update_post_meta( $post_id, 'front-page_btn_text', $new_btn_text , $old_btn_text );
                update_post_meta( $post_id, 'front-page_phone_no', $new_phone_no , $old_phone_no );
                update_post_meta( $post_id, 'front-page_image', $new_image , $old_image );


                //section up

                $old_image_up       = get_post_meta( $post_id, 'front-page_image_up', true );
                $new_image_up       = $_POST['front-page_image_up'];
                $old_title_up       = get_post_meta( $post_id, 'front-page_title_up', true );
                $new_title_up       = $_POST['front-page_title_up'];
                $old_image_up_1     = get_post_meta( $post_id, 'front-page_image_up_1', true );
                $new_image_up_1     = $_POST['front-page_image_up_1'];
                $old_text_up_1      = get_post_meta( $post_id, 'front-page_text_up_1', true );
                $new_text_up_1      = $_POST['front-page_text_up_1'];
                $old_text_up_2      = get_post_meta( $post_id, 'front-page_text_up_2', true );
                $new_text_up_2      = $_POST['front-page_text_up_2'];
                $old_text_up_3      = get_post_meta( $post_id, 'front-page_text_up_3', true );
                $new_text_up_3      = $_POST['front-page_text_up_3'];
                $old_text_up_4      = get_post_meta( $post_id, 'front-page_text_up_4', true );
                $new_text_up_4      = $_POST['front-page_text_up_4'];


                update_post_meta( $post_id, 'front-page_image_up', $new_image_up, $old_image_up );
                update_post_meta( $post_id, 'front-page_title_up', $new_title_up,  $old_title_up  );
                update_post_meta( $post_id, 'front-page_image_up_1', $new_image_up_1, $old_image_up_1  );
                update_post_meta( $post_id, 'front-page_text_up_1', $new_text_up_1, $old_text_up_1);
                update_post_meta( $post_id, 'front-page_text_up_2', $new_text_up_2, $old_text_up_2);
                update_post_meta( $post_id, 'front-page_text_up_3', $new_text_up_3, $old_text_up_3);
                update_post_meta( $post_id, 'front-page_text_up_4', $new_text_up_4, $old_text_up_4);

                //section middle
                $old_text_middle_1       = get_post_meta( $post_id, 'text_middle_1', true );
                $new_text_middle_1       = $_POST['text_middle_1'];
                $old_text_middle_2       = get_post_meta( $post_id, 'text_middle_2', true );
                $new_text_middle_2       = $_POST['text_middle_2'];
                $old_text_middle_3       = get_post_meta( $post_id, 'text_middle_3', true );
                $new_text_middle_3       = $_POST['text_middle_3'];
                $old_text_middle_4       = get_post_meta( $post_id, 'text_middle_4', true );
                $new_text_middle_4       = $_POST['text_middle_4'];
                $old_text_middle_5       = get_post_meta( $post_id, 'text_middle_5', true );
                $new_text_middle_5       = $_POST['text_middle_5'];
                $old_text_middle_6       = get_post_meta( $post_id, 'text_middle_6', true );
                $new_text_middle_6       = $_POST['text_middle_6'];
                $old_text_middle_7       = get_post_meta( $post_id, 'text_middle_7', true );
                $new_text_middle_7       = $_POST['text_middle_7'];
                $old_text_middle_8       = get_post_meta( $post_id, 'text_middle_8', true );
                $new_text_middle_8       = $_POST['text_middle_8'];
                $old_text_middle_9       = get_post_meta( $post_id, 'text_middle_9', true );
                $new_text_middle_9       = $_POST['text_middle_9'];
                $old_text_middle_10      = get_post_meta( $post_id, 'text_middle_10', true );
                $new_text_middle_10      = $_POST['text_middle_10'];
                $old_text_middle_11      = get_post_meta( $post_id, 'text_middle_11', true );
                $new_text_middle_11      = $_POST['text_middle_11'];
                $old_text_middle_12      = get_post_meta( $post_id, 'text_middle_12', true );
                $new_text_middle_12      = $_POST['text_middle_12'];
                $old_text_middle_btn     = get_post_meta( $post_id, 'text_middle_btn', true );
                $new_middle_btn          = $_POST['text_middle_btn'];

                update_post_meta( $post_id, 'text_middle_1', $new_text_middle_1 , $old_text_middle_1);
                update_post_meta( $post_id, 'text_middle_2', $new_text_middle_2 , $old_text_middle_2);
                update_post_meta( $post_id, 'text_middle_3', $new_text_middle_3 ,  $old_text_middle_3);
                update_post_meta( $post_id, 'text_middle_4', $new_text_middle_4 , $old_text_middle_4);
                update_post_meta( $post_id, 'text_middle_5', $new_text_middle_5 , $old_text_middle_5);
                update_post_meta( $post_id, 'text_middle_6', $new_text_middle_6 , $old_text_middle_6);
                update_post_meta( $post_id, 'text_middle_7', $new_text_middle_7 , $old_text_middle_7);
                update_post_meta( $post_id, 'text_middle_8', $new_text_middle_8 , $old_text_middle_8);
                update_post_meta( $post_id, 'text_middle_9', $new_text_middle_9 , $old_text_middle_9);
                update_post_meta( $post_id, 'text_middle_10', $new_text_middle_10 , $old_text_middle_10);
                update_post_meta( $post_id, 'text_middle_11', $new_text_middle_11 , $old_text_middle_11);
                update_post_meta( $post_id, 'text_middle_12', $new_text_middle_12 , $old_text_middle_12);
                update_post_meta( $post_id, 'text_middle_btn', $new_middle_btn , $old_text_middle_btn);

                //section down
                $old_title_down           = get_post_meta( $post_id, 'down_title', true );
                $new_title_down           = $_POST['down_title'];
                $old_image_down_1         = get_post_meta( $post_id, 'image_down_1', true );
                $new_image_down_1         = $_POST['image_down_1'];
                $old_title_down_1         = get_post_meta( $post_id, 'title_down_1', true );
                $new_title_down_1         = $_POST['title_down_1'];
                $old_text_down_1          = get_post_meta( $post_id, 'text_down_1', true );
                $new_text_down_1          = $_POST['text_down_1'];
                $old_image_down_2         = get_post_meta( $post_id, 'image_down_2', true );
                $new_image_down_2         = $_POST['image_down_2'];
                $old_title_down_2         = get_post_meta( $post_id, 'title_down_2', true );
                $new_title_down_2         = $_POST['title_down_2'];
                $old_text_down_2          = get_post_meta( $post_id, 'text_down_2', true );
                $new_text_down_2          = $_POST['text_down_2'];
                $old_image_down_3         = get_post_meta( $post_id, 'image_down_3', true );
                $new_image_down_3         = $_POST['image_down_3'];
                $old_title_down_3         = get_post_meta( $post_id, 'title_down_3', true );
                $new_title_down_3         = $_POST['title_down_3'];
                $old_text_down_3          = get_post_meta( $post_id, 'text_down_3', true );
                $new_text_down_3          = $_POST['text_down_3'];
                $old_image_down_4         = get_post_meta( $post_id, 'image_down_4', true );
                $new_image_down_4         = $_POST['image_down_4'];
                $old_title_down_4         = get_post_meta( $post_id, 'title_down_4', true );
                $new_title_down_4         = $_POST['title_down_4'];
                $old_text_down_4          = get_post_meta( $post_id, 'text_down_4', true );
                $new_text_down_4          = $_POST['text_down_4'];
                $old_image_down_5         = get_post_meta( $post_id, 'image_down_5', true );
                $new_image_down_5         = $_POST['image_down_5'];
                $old_title_down_5         = get_post_meta( $post_id, 'title_down_5', true );
                $new_title_down_5         = $_POST['title_down_5'];
                $old_text_down_5          = get_post_meta( $post_id, 'text_down_5', true );
                $new_text_down_5          = $_POST['text_down_5'];
                $old_image_down_6         = get_post_meta( $post_id, 'image_down_6', true );
                $new_image_down_6         = $_POST['image_down_6'];
                $old_title_down_6         = get_post_meta( $post_id, 'title_down_6', true );
                $new_title_down_6         = $_POST['title_down_6'];
                $old_text_down_6          = get_post_meta( $post_id, 'text_down_6', true );
                $new_text_down_6          = $_POST['text_down_6'];
                $old_image_down_7         = get_post_meta( $post_id, 'image_down_7', true );
                $new_image_down_7         = $_POST['image_down_7'];
                $old_title_down_7         = get_post_meta( $post_id, 'title_down_7', true );
                $new_title_down_7         = $_POST['title_down_7'];
                $old_text_down_7          = get_post_meta( $post_id, 'text_down_7', true );
                $new_text_down_7          = $_POST['text_down_7'];
                $old_image_down_8         = get_post_meta( $post_id, 'image_down_8', true );
                $new_image_down_8         = $_POST['image_down_8'];
                $old_title_down_8         = get_post_meta( $post_id, 'title_down_8', true );
                $new_title_down_8         = $_POST['title_down_8'];
                $old_text_down_8          = get_post_meta( $post_id, 'text_down_8', true );
                $new_text_down_8          = $_POST['text_down_8'];
                $old_title_down_row       = get_post_meta( $post_id, 'title_down_row', true );
                $new_title_down_row       = $_POST['title_down_row'];
                $old_placeholder_down     = get_post_meta( $post_id, 'placeholder_down', true );
                $new_placeholder_down     = $_POST['placeholder_down'];

                update_post_meta( $post_id, 'down_title', $new_title_down, $old_title_down);
                update_post_meta( $post_id, 'image_down_1', $new_image_down_1 , $old_image_down_1);
                update_post_meta( $post_id, 'title_down_1', $new_title_down_1 ,  $old_title_down_1);
                update_post_meta( $post_id, 'text_down_1', $new_text_down_1 , $old_text_down_1);
                update_post_meta( $post_id, 'image_down_2', $new_image_down_2 , $old_image_down_2);
                update_post_meta( $post_id, 'title_down_2', $new_title_down_2 , $old_title_down_2);
                update_post_meta( $post_id, 'text_down_2', $new_text_down_2 , $old_text_down_2);
                update_post_meta( $post_id, 'image_down_3', $new_image_down_3 , $old_image_down_3);
                update_post_meta( $post_id, 'title_down_3', $new_title_down_3 , $old_title_down_3);
                update_post_meta( $post_id, 'text_down_3', $new_text_down_3 , $old_text_down_3);
                update_post_meta( $post_id, 'image_down_4', $new_image_down_4 , $old_image_down_4);
                update_post_meta( $post_id, 'title_down_4', $new_title_down_4 , $old_title_down_4);
                update_post_meta( $post_id, 'text_down_4', $new_text_down_4 , $old_text_down_4);
                update_post_meta( $post_id, 'image_down_5', $new_image_down_5 , $old_image_down_5);
                update_post_meta( $post_id, 'title_down_5', $new_title_down_5 ,  $old_title_down_5);
                update_post_meta( $post_id, 'text_down_5', $new_text_down_5 , $old_text_down_5);
                update_post_meta( $post_id, 'image_down_6', $new_image_down_6 , $old_image_down_6);
                update_post_meta( $post_id, 'title_down_6', $new_title_down_6 , $old_title_down_6);
                update_post_meta( $post_id, 'text_down_6', $new_text_down_6 , $old_text_down_6);
                update_post_meta( $post_id, 'image_down_7', $new_image_down_7 , $old_image_down_7);
                update_post_meta( $post_id, 'title_down_7', $new_title_down_7 , $old_title_down_7);
                update_post_meta( $post_id, 'text_down_7', $new_text_down_7 , $old_text_down_7);
                update_post_meta( $post_id, 'image_down_8', $new_image_down_8 , $old_image_down_8);
                update_post_meta( $post_id, 'title_down_8', $new_title_down_8 , $old_title_down_8);
                update_post_meta( $post_id, 'text_down_8', $new_text_down_8 , $old_text_down_8);
                update_post_meta( $post_id, 'text_middle_11', $new_text_middle_11 , $old_text_middle_11);
                update_post_meta( $post_id, 'text_middle_12', $new_text_middle_12 , $old_text_middle_12);
                update_post_meta( $post_id, 'title_down_row', $new_title_down_row , $old_title_down_row);
                update_post_meta( $post_id, 'placeholder_down', $new_placeholder_down , $old_placeholder_down);
            }   
        }
    }
}

$pm = new PM_Post_Type_Front();
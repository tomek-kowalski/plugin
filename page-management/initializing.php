<?php

//namespace Loading;

if ( ! defined( 'WPINC' ) ) {
	die;
}

ini_set('display_errors', 1);

/**
 * @link              http://www.kowalski-consulting.com/
 * @since             1.00
 * @package           Page Management
 * 
 * @wordpress-plugin
 * Plugin Name:       Page Management
 * Description:       Zadanie Testowe Page Management.
 * Version:           1.00
 * Author:            Tomasz Kowalski
 * Author URI:        https://kowalski-consulting.pl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       page_manage
 * Date:    		  2023-03-26  
 */


 class PM 
 {

	function __construct()
	{
		$this->define_constants();
		$this->load_files();

		add_action( 'admin_menu', array( $this, 'add_menu' ) );
		
		//add_action( 'init', [$this,'enable_custom_fields'] );

		add_filter( 'single_template', array( $this, 'load_custom_single_template' ) );
		

	}

/* 	public function enable_custom_fields(){
		// Replace 'events' with your custom post type name
		add_post_type_support( 'header', 'custom-fields' );
	} */
	

	public function load_files() 
	{
 		require_once( PM_PATH. 'nav/walker.php');
 		require_once( PM_PATH. 'nav/button.php');
 		require_once( PM_PATH. 'nav/logo.php');
		require_once( PM_PATH. 'post-types/header-cpt.php' );
		require_once( PM_PATH. 'post-types/front-page-cpt.php' );
		require_once( PM_PATH. 'post-types/footer-cpt.php' );
		require_once( PM_PATH. 'class/pm-settings.php' );
	}

	public function load_custom_single_template( $tpl ){

			if( is_singular( 'header' ) ){
				$tpl = $this->get_template_part_location( 'single-header.php' );
			}

			
			if( is_singular( 'front-page' ) ){
				$tpl = $this->get_template_part_location( 'single-front-page.php' );
			}

			
			if( is_singular( 'footer' ) ){
				$tpl = $this->get_template_part_location( 'single-footer.php' );
			}
		
		return $tpl;
	}

	public function get_template_part_location( $file ){
		if( file_exists( PM_PATH . 'views/templates/' . $file ) ){
			$file = PM_PATH . 'views/templates/' .$file;
		}else{
			$file = PM_PATH . 'views/templates/' . $file;
		}
		return $file;
	}

	public function define_constants()
	{
		define( 'PM_PATH', plugin_dir_path( __FILE__ ) );
		define( 'PM_URL', plugin_dir_url( __FILE__ ) );
		define( 'PM_VERSION', '1.0.0' );
	}

	public function add_menu(){
		add_menu_page(
			__('Page Management','page_manage'),
			'Page management',
			'manage_options',
			'pm_admin',
			array( $this, 'pm_settings_page' ),
			'dashicons-images-alt2'
		);

		add_submenu_page(
			'pm_admin',
			__( 'Settings', 'page_manage' ),
			__( 'Settings', 'page_manage' ),
			'manage_options',
			'pm_admin',
			null,
			null
		);

		add_submenu_page(
			'pm_admin',
			__( 'Header', 'page_manage' ),
			__( 'Header', 'page_manage' ),
			'manage_options',
			'edit.php?post_type=header',
			null,
			null
		);

		add_submenu_page(
			'pm_admin',
			__( 'Front Page', 'page_manage' ),
			__( 'Front Page', 'page_manage' ),
			'manage_options',
			'edit.php?post_type=front-page',
			null,
			null
		);

		add_submenu_page(
			'pm_admin',
			__( 'Footer', 'page_manage' ),
			__( 'Footer', 'page_manage' ),
			'manage_options',
			'edit.php?post_type=footer',
			null,
			null
		);
	}

	public function pm_settings_page(){
		if( ! current_user_can( 'manage_options' ) ){
			return;
		}

		if( isset( $_GET['settings-updated'] ) ){
			add_settings_error( 'pm_options', 'pm_message', esc_html__( 'Settings Saved', 'page_manage' ), 'success' );
		}
		
		settings_errors( 'pm_options' );

		require( PM_PATH . 'views/settings-page.php' );
	}
 }

 if( class_exists( 'PM' ) ){
    register_activation_hook( __FILE__, array( 'PM', 'activate' ) );
    register_deactivation_hook( __FILE__, array( 'PM', 'deactivate' ) );
    register_uninstall_hook( __FILE__, array( 'PM', 'uninstall' ) );

    $pm = new PM();
} 
 



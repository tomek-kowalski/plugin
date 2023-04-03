<?php

//namespace Loading;

if ( ! defined( 'WPINC' ) ) {
	die;
}

class Walker_Extend_Menu extends Walker_Nav_Menu {


	public function add_menu_list_item_class($classes, $item, $args) 
	{
		if (property_exists($args, 'list_item_class')) {
			$classes[] = $args->list_item_class;
		}
		return $classes;
	}

	public function add_menu_link_class( $atts, $item, $args ) 
	{
		if (property_exists($args, 'link_class')) {
		  $atts['class'] = $args->link_class;
		}
		return $atts;
	}


	
	function __construct()
	{
		add_filter('nav_menu_css_class', [$this,'add_menu_list_item_class'], 1, 3);
		add_filter('nav_menu_link_attributes', [$this,'add_menu_link_class'], 1, 3 );
	}
}



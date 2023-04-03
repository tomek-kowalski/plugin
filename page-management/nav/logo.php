<?php

//namespace Loading;

if ( ! defined( 'WPINC' ) ) {
	die;
}

class Logo_custom {

public function logo_setup() 
{ 

	add_theme_support( 'title-tag' ); 

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 40,
			'width'       => 187.14,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);
}

function __construct()
{
add_action('after_setup_theme', [$this,'logo_setup'] );
}	

}

$logo = new Logo_custom();
<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.1.0' );
	
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), '1.0', true);
	
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
	
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css'); 

	wp_enqueue_style ('theme-style', get_template_directory_uri().'/medium.css');	

	
}	
	
	
	
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );


add_theme_support( 'post-thumbnails' );
<?php
	
	/* LOAD STYLES AND SCRIPTS */
	add_action( 'wp_enqueue_scripts', function(){
		
		/* ENQUEUE SCRIPTS */
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true );
		wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true );
		wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery', 'popper'), '1.0', true );
		/* ENQUEUE SCRIPTS */
		
		/* ENQUEUE STYLES */
		wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.1.0' );
		wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css' ); 
		wp_enqueue_style( 'theme-style', get_template_directory_uri().'/medium.css' );	
		/* ENQUEUE STYLES */
	} );

	/* SUPPORT FOR FEATURED IMAGES */
	add_theme_support( 'post-thumbnails' );
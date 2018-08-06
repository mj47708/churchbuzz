<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title(''); ?></title>
		<?php wp_head();?>	
	</head>
 
	<body>
	<div class="container">
		<div class="d-flex justify-content-between pt-3 pb-2">
			<div class="big-logo pr-2 pt-1">
				<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/churchbuzz.jpg" height="40px" width="auto"></a>
			</div>	
		
			<div class="align-self-center"><!--<a href="#" class="p-2 sign-link">sign in</a>-->
				<button type="button" class="btn btn-success">Get started</button>
			</div>
		</div>
	</div>
	
	<div class="container bg-dark navbar-dark sticky-top">
		<div class="navbar navbar-expand-sm justify-content-start px-0">
		<?php
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 1,
				'container'         => false,
				'menu_id'			=> 'primary-menu',
				'menu_class'        => 'list-inline list-inline-item scroll',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker()
			));
		?>
		</div>
	</div>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title(''); ?></title>
		<?php wp_head();?>	
	</head>
 
	<body>
	<div class="container">
		<div class="d-flex justify-content-between pt-3 pl-3 pr-3">
			<div class="big-logo">
				<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/churchbuzz.jpg" height="40px" width="auto"></a>
			</div>	
		<!--
			<div class="align-self-center"><a href="#" class="p-2 sign-link">sign in</a>
				<button type="button" class="btn btn-success">Get started</button>
			</div>-->
		</div>
	</div>
	
	<div class="row sticky-top">
		<div class="container bg-dark navbar-dark">
			<div class="navbar navbar-expand-sm justify-content-start px-2">
				<ul class="list-inline list-inline-item scroll">
					<li class="p-2 list-inline-item"><a href="#">Categories</a></li>
					<li class="p-2 list-inline-item"><a href="#">About</a></li>
					<li class="p-2 list-inline-item"><a href="#">Add your church</a></li>
					<li class="p-2 list-inline-item"><a href="#">Submit your circle</a></li>
					<li class="p-2 list-inline-item"><a href="#">Contact</a></li>	
				</ul>
			</div>
		</div>
	</div>
	
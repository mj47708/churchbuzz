<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>
 
<body>
<div class="d-flex justify-content-around content-between p-2">
		<div class="align-self-center member-link"><a href="#" class="nav-link">About membership</a></div>
		
		<div class="d-flex align-items-center">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/churchbuzz.jpg" height="40px" width="auto" class="big-logo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/churchbuzz.jpg" height="30px" width="auto" class="small-logo">
		</div>
		
		<div class="align-self-center"><a href="#" class="p-2 sign-link">sign in</a>
			<button type="button" class="btn btn-success">Get started</button>
		</div>
	</div>
	
	<div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top justify-content-center">
		<ul class="list-inline list-inline-item scroll">
			<li class="p-2 list-inline-item"><a href="#">Categories</a></li>
			<li class="p-2 list-inline-item"><a href="#">About</a></li>
			<li class="p-2 list-inline-item"><a href="#">Add your church</a></li>
			<li class="p-2 list-inline-item"><a href="#">Submit your circle</a></li>
			<li class="p-2 list-inline-item"><a href="#">Contact</a></li>	
		</ul>
	</div>

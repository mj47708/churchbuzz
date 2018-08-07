<footer class="pt-3 container container-box">
	<div class="row">
		<div class="col-lg-6 bg-red icon-grid">
			<div class="copyright mr-4"><p>© Church Buzz</p></div>
			<ul class="list-inline list-inline-item ">
				<li class="list-inline-item"><a href="#"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="col-lg-6 text-left menu-font">
			<?php
				wp_nav_menu( array(
					'menu'              => 'secondary',
					'theme_location'    => 'secondary',
					'depth'             => 1,
					'container'         => false,
					'menu_id'			=> 'footer-menu',
					'menu_class'        => 'list-inline footer-scroll',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker()
				));
			?>
		</div>
	</div>
	<!--
	
		
		<!--
		
		
		--
	</div>
	-->
</footer>
<?php wp_footer() ?>
</body>
</html>

<?php get_header();?>
<div class="container" style="margin-top: 40px;margin-bottom: 40px;">
	<div class='row'>
		<div class='col-md-12'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'partials/post', 'list' );?>
		<?php endwhile; else :?>
			<p>There are no posts!</p>
		<?php endif;?>
		</div>
	</div>
</div>
<?php get_footer();?>
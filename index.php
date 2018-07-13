<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<article class="grid-box">
				<div class="grid-content">
					<?php the_post_thumbnail("medium");?>
				</div>
				<div class="title-content">
					<div class="grid-author-title">
						<div class="avatar-shape pt-2"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></div>
						
						<div class="author-name">
							<a href="#"><?php echo get_the_author_link(); ?></a><br>
							<p><?php echo get_the_date(); ?></p>
						</div>
					</div>
					<div class="grid-item mt-2">
						<h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
					
					<?php the_content(); ?><a href="<?php the_permalink()?>">continue reading..</a>
					</div>
				</div>	
			</article>
		</div>

	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 
get_footer();
 
?>

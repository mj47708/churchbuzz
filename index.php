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
						<div><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></div>
						
						<div>
							
							<?php echo get_the_author_link(); ?>
						</div>
					</div>
					<div class="grid-item">
						<h5><u><a href="<?php the_permalink() ?>"><?php the_title() ?></a></u></h5>
					
					<?php the_content('continue reading...'); ?>
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

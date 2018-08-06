<?php get_header();?>

<div class="container" style="margin-top: 40px;margin-bottom: 40px;">
	<div class='row'>
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="py-2">
				<h1><?php the_title();?></h1>
				<h3 style="font-weight: 100;"><?php the_excerpt();?></h3>
			</div>
			<div class="para-grid">
				<div class="content-pic"><?php the_post_thumbnail("medium");?></div>
				
				<div class="author-content-grid">
					<div class="pt-3 avatar-box-grid">
						<span class="avatar-box">
							<?php echo get_avatar('email'); ?>
						</span>
						
						<span>
							<a href="<?php the_author_link();?>">
								<?php the_author(); ?>
							</a>
						</span>
						
						<span>
						 <?php echo get_the_date(); ?>	
						</span>
					</div>
					<div class="text-left">
						<p><?php the_content();?></p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif;?>
		
	</div>
</div>
<?php get_footer();?>
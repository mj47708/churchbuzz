<article class="grid-box">
	<div class="grid-content"><?php the_post_thumbnail("medium");?></div>
	<div class="title-content">
		<div class='text-muted small' style='margin-bottom: 20px;'><a href="<?php the_author_link();?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></div>
		<div class="grid-item">
			<h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink()?>">Continue reading ...</a>
		</div>
	</div>	
</article>
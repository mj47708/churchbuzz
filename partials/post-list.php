<?php
	global $post_id;
	$url = '';
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'medium' );
	if( is_array( $thumbnail ) ){
		$url = $thumbnail[0];
	}
?>
<article class="grid-box">
	<div class="grid-content" style="background-image: url('<?php _e( $url );?>');"><?php //the_post_thumbnail("medium");?></div>
	<div class="title-content">
		<div class='text-muted small' style='margin-bottom: 20px;'><a href="<?php the_author_link();?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></div>
		<div class="grid-item">
			<h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink()?>">Continue reading ...</a>
		</div>
	</div>	
</article>
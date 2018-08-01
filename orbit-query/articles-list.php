<div id="<?php _e($atts['id']);?>" data-target="<?php _e('article.grid-box');?>" data-url="<?php _e( $atts['url'] );?>">
<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<?php get_template_part( 'partials/post', 'list' );?>
<?php endwhile;?>
</div>

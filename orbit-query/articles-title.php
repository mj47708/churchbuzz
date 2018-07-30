<?php if( isset( $atts['title'] ) && $atts['title'] ):?>
<div class="story-grid-title">
	<?php if( isset( $atts['title_link'] ) && $atts['title_link'] ):?><a href="<?php _e( $atts['title_link'] );?>"><?php endif;?><?php _e( $atts['title'] );?><?php if( isset( $atts['title_link'] ) && $atts['title_link'] ):?></a><?php endif;?>			
	<?php if( isset( $atts['title_link'] ) && $atts['title_link'] ):?>
	<a href="<?php _e( $atts['title_link'] );?>" class="story-grid-mobile-btn btn pull-right">View All</a>
	<?php endif;?>
</div>
<?php endif;?>
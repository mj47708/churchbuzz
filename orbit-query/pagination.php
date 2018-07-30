<?php if($atts['pagination'] != '0'):?>
<div class='orbit-btn-load-parent yka-container'>
	<button data-behaviour='oq-ajax-loading' data-list="<?php _e('#'.$atts['id']);?>" class="load-more" type="button">
		Load More
		<i class="fa fa-refresh"></i>
	</button>
</div>
<?php endif;?>
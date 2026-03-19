<div <?php echo get_block_wrapper_attributes(); ?>>
	<?php 
	if ($attributes['no_cached']) {
		echo doo_get_product_cats($attributes);
	} else {
		echo doo_get_product_cats_cached($attributes);
	}
	?>
</div>

<?php
/**
 * Register blocks
 */
function doo_register_blocks() {

	if ( ! function_exists( 'register_block_type' ) ) {
		// Block editor is not available.
		return;
	}

	register_block_type( __DIR__ . '/product-cat/build/block.json' );
	register_block_type( __DIR__ . '/posts-grid/build/block.json' );
	register_block_type( __DIR__ . '/banner-cat/build/block.json' );

}
add_action( 'init', 'doo_register_blocks' );


/**
 * Register blocks category
 */
if ( ! function_exists ( 'doo_block_categories_all' ) ) {
	function doo_block_categories_all( $categories, $post ) {
		array_unshift(
			$categories,
			array(
				'slug'  => 'doo-blocks',
				'title' => _x('Bloques DOO', 'dw' ),
				'icon'  => null,
			)
		);
		return $categories;
	}
	add_filter( 'block_categories_all', 'doo_block_categories_all', 10, 2 );
}

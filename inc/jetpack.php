<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package yms
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function yms_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'yms_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function yms_jetpack_setup
add_action( 'after_setup_theme', 'yms_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function yms_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function yms_infinite_scroll_render

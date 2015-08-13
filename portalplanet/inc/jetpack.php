<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package portalplanet
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function portalplanet_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'portalplanet_jetpack_setup' );

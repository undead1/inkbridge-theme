<?php
/**
 * Inkbridge Theme functions.
 *
 * @package Inkbridge_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue front-end styles.
 */
function inkbridge_theme_enqueue_styles() {
	wp_enqueue_style(
		'inkbridge-theme-style',
		get_parent_theme_file_uri( 'style.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'inkbridge_theme_enqueue_styles' );

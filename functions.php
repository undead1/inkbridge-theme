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
 * Disable wpautop.
 *
 * This is an AI-agent-first theme. Content is expected to contain proper HTML
 * markup. WordPress wpautop() mangles structured HTML by inserting <p> tags
 * around inline elements and between block-level elements, creating orphaned
 * tags and phantom whitespace.
 *
 * @see https://developer.wordpress.org/reference/functions/wpautop/
 */
function inkbridge_theme_disable_wpautop() {
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
}
add_action( 'init', 'inkbridge_theme_disable_wpautop' );

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

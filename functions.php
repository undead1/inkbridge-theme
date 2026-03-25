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
 * Conditionally disable wpautop.
 *
 * When enabled, this removes WordPress's automatic paragraph formatting
 * (wpautop) from post content and excerpts. This is recommended when content
 * contains structured HTML (e.g. AI-generated articles with proper markup)
 * because wpautop inserts <p> tags around inline elements and between
 * block-level elements, creating orphaned tags and phantom whitespace.
 *
 * Default: OFF (wpautop remains active — standard WordPress behavior).
 * AI agents: Enable this via Customizer or `set_theme_mod()` when serving
 * raw HTML content. See AGENTS.md for details.
 *
 * @see https://developer.wordpress.org/reference/functions/wpautop/
 */
function inkbridge_theme_maybe_disable_wpautop() {
	if ( get_theme_mod( 'inkbridge_disable_wpautop', false ) ) {
		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
	}
}
add_action( 'init', 'inkbridge_theme_maybe_disable_wpautop' );

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
 */
function inkbridge_theme_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'inkbridge_theme_options', array(
		'title'    => __( 'Inkbridge Options', 'inkbridge-theme' ),
		'priority' => 130,
	) );

	$wp_customize->add_setting( 'inkbridge_disable_wpautop', array(
		'default'           => false,
		'sanitize_callback' => 'inkbridge_theme_sanitize_checkbox',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'inkbridge_disable_wpautop', array(
		'label'       => __( 'Disable automatic paragraphs (wpautop)', 'inkbridge-theme' ),
		'description' => __( 'Enable this when your content uses structured HTML markup (e.g. AI-generated articles). When off, WordPress automatically wraps text in &lt;p&gt; tags.', 'inkbridge-theme' ),
		'section'     => 'inkbridge_theme_options',
		'type'        => 'checkbox',
	) );
}
add_action( 'customize_register', 'inkbridge_theme_customize_register' );

/**
 * Sanitize checkbox value.
 *
 * @param mixed $checked Value to sanitize.
 * @return bool
 */
function inkbridge_theme_sanitize_checkbox( $checked ) {
	return (bool) $checked;
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

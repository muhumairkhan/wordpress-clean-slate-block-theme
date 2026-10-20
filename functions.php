<?php
/**
 * Clean Slate functions and definitions.
 *
 * @package clean-slate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CLEAN_SLATE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme setup.
 */
function clean_slate_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'clean_slate_setup' );

/**
 * Enqueue front-end assets.
 */
function clean_slate_enqueue_assets() {
	wp_enqueue_style(
		'clean-slate-style',
		get_stylesheet_uri(),
		array(),
		CLEAN_SLATE_VERSION
	);

	// Example: custom CSS / JS files (uncomment when needed).
	// wp_enqueue_style( 'clean-slate-custom', get_theme_file_uri( 'assets/css/custom.css' ), array(), CLEAN_SLATE_VERSION );
	// wp_enqueue_script( 'clean-slate-main', get_theme_file_uri( 'assets/js/main.js' ), array(), CLEAN_SLATE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'clean_slate_enqueue_assets' );

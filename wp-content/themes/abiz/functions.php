<?php
/**
 * Abiz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package abiz
 */
if ( ! function_exists( 'abiz_setup' ) ) :
function abiz_setup() {
	
	load_theme_textdomain( 'abiz' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary_menu'			 => esc_html__( 'Primary Menu', 'abiz' )
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'custom-background', apply_filters( 'abiz_custom_background_args',    array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support('custom-logo');
	add_theme_support( 'woocommerce' );

	// Root path/URI.
	define( 'ABIZ_THEME_DIR', get_template_directory() );
	define( 'ABIZ_THEME_URI', get_template_directory_uri() );

	// Root path/URI.
	define( 'ABIZ_THEME_CORE_DIR', ABIZ_THEME_DIR . '/core');
	define( 'ABIZ_THEME_CORE_URI', ABIZ_THEME_URI . '/core');

	// Control path/URI.
	define( 'ABIZ_THEME_CONTROL_DIR', ABIZ_THEME_CORE_DIR . '/customizer/custom-controls');
	define( 'ABIZ_THEME_CONTROL_URI', ABIZ_THEME_CORE_DIR . '/customizer/custom-controls');
}
endif;
add_action( 'after_setup_theme', 'abiz_setup' );

// Content Width
function abiz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'abiz_content_width', 1200 );
}
add_action( 'after_setup_theme', 'abiz_content_width', 0 );

// Main file
require_once get_template_directory() . '/core/core.php';
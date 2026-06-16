<?php
function arvina_child_css() {
	$arvina_parent_theme_css = 'arvina-abiz-style';
	wp_enqueue_style( 
		$arvina_parent_theme_css, 
		get_template_directory_uri() . '/style.css' 
	);
	wp_enqueue_style( 
		'arvina-style', 
		get_stylesheet_uri(), 
		array( $arvina_parent_theme_css )
	);
}
add_action( 'wp_enqueue_scripts', 'arvina_child_css',999);

function arvina_custom_header_setup()
{
    $header_image = get_template_directory_uri() . '/assets/images/bg/breadcrumbg.jpg';
    add_theme_support('custom-header', apply_filters('abiz_custom_header_args', array(
        'default-image' => $header_image,
        'default-text-color' => 'fff',
        'width' => 2000,
        'height' => 200,
        'flex-height' => true,
        'wp-head-callback' => 'abiz_header_style',
    )));
}
add_action('after_setup_theme', 'arvina_custom_header_setup');

require get_stylesheet_directory() . '/core/customizer/custom-controls/customize-upgrade-control.php';

/**
 * Import Options From Parent Theme
 *
 */
function arvina_parent_theme_options() {
    $abiz_mods = get_option( 'theme_mods_abiz' );
    if ( ! empty( $abiz_mods ) ) {
        foreach ( $abiz_mods as $abiz_mod_k => $abiz_mod_v ) {
            set_theme_mod( $abiz_mod_k, $abiz_mod_v );
        }
    }
}
add_action( 'after_switch_theme', 'arvina_parent_theme_options' );
<?php
/**
 * Register customizer panels and sections.
 *
 * @package Abiz
 */
function abiz_panel_section_register( $wp_customize ) { 	
	// Section: Upgrade
	$wp_customize->add_section('abiz_upgrade_premium',array(
		'priority'      => 1,
		'title' 		=> __('Upgrade to Pro','abiz'),
	));
	
	// Section: Top Bar
	$wp_customize->add_section('top_header',array(
		'priority'      => 1,
		'title' 		=> __('Top Bar Setting','abiz'),
		'panel'  		=> 'abiz_general',
	));
	
	// Section:  Menu Bar
	$wp_customize->add_section('header_nav',array(
		'priority'      => 1,
		'title' 		=> __('Menu Bar Setting','abiz'),
		'panel'  		=> 'abiz_general',
	));
	
	// Panel: General
	$wp_customize->add_panel('abiz_general', array(
		'priority' => 31,
		'title' => esc_html__( 'General Options', 'abiz' ),
	));
	
	// Section:  Page Header
	$wp_customize->add_section('header_image', array(
		'title' => esc_html__( 'Page Header Setting', 'abiz' ),
		'priority' => 1,
		'panel' => 'abiz_general',
	));
	
	// Section:  Top Scroller
	$wp_customize->add_section('top_scroller', array(
		'title' => esc_html__( 'Top Scroller Setting', 'abiz' ),
		'priority' => 4,
		'panel' => 'abiz_general',
	));
	
	// Section:  Blog
	$wp_customize->add_section( 'blog_general',array(
		'priority'      => 34,
		'capability'    => 'edit_theme_options',
		'title'			=> __('Blog Setting', 'abiz'),
		'panel' => 'abiz_general',
	));
	
	// Section:  Footer
	$wp_customize->add_section('footer_section',array(
		'priority'      => 34,
		'capability'    => 'edit_theme_options',
		'title'			=> __('Footer Setting', 'abiz'),
		'panel' => 'abiz_general',
	));
	
	// Section:  Typography
	$wp_customize->add_section('abiz_typography',array(
		'priority'      => 1,
		'title' 		=> __('Body Typography Setting','abiz'),
		'panel'  		=> 'abiz_general',
	));
}
add_action( 'customize_register', 'abiz_panel_section_register' );
<?php
/**
 * Abiz Theme Customizer.
 *
 * @package Abiz
 */

function abiz_customizer_register($wp_customize)
    {

	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
	$wp_customize->get_setting('background_color')->transport = 'postMessage';
	$wp_customize->get_setting('custom_logo')->transport = 'refresh';

	/**
	 * Register controls
	 */
	$wp_customize->register_control_type('Abiz_Control_Sortable');
	$wp_customize->register_control_type('Abiz_Customize_Toggle_Control');

	// Control
	require ABIZ_THEME_CONTROL_DIR . '/customize-base-control.php';
	require ABIZ_THEME_CONTROL_DIR . '/customize-control-sortable.php';
	require ABIZ_THEME_CONTROL_DIR . '/customize-category-control.php';
	require ABIZ_THEME_CONTROL_DIR . '/customize-toggle-control.php';
	
	// Sainitization
	require ABIZ_THEME_CORE_DIR . '/customizer/abiz-customize-sanitization.php';
}
add_action('customize_register','abiz_customizer_register');


function abiz_customizer_script()
{
	wp_enqueue_script('abiz-customizer-section', ABIZ_THEME_CORE_URI . '/customizer/assets/js/customizer-section.js', array(
		"jquery"
	) , '', true);
}
add_action('customize_controls_enqueue_scripts','abiz_customizer_script');

// customizer settings.
function abiz_customizer_settings()
{
	/*
	 *  Customizer Notifications
	 */
	require get_template_directory() . '/core/customizer/customizer-notice/abiz-customizer-notify.php';

	$abiz_config_customizer = array(
		'recommended_plugins'                      => array(
			'daddy-plus' => array(
				'recommended' => true,
				'description' => sprintf(
					/* translators: %s: plugin name */
					esc_html__( 'Recommended Plugin: If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'abiz' ),
					'<strong>Daddy Plus</strong>'
				),
			),
		),
		'recommended_actions'                      => array(),
		'recommended_actions_title'                => esc_html__( 'Recommended Actions', 'abiz' ),
		'recommended_plugins_title'                => esc_html__( 'Add More Features', 'abiz' ),
		'install_button_label'                     => esc_html__( 'Install and Activate', 'abiz' ),
		'activate_button_label'                    => esc_html__( 'Activate', 'abiz' ),
		'abiz_deactivate_button_label' => esc_html__( 'Deactivate', 'abiz' ),
	);
	abiz_Customizer_Notify::init( apply_filters( 'abiz_customizer_notify_array', $abiz_config_customizer ) );
	
	$settings = array(
		'panels-and-sections',
		'selective-refresh-and-partial',
		'general'
	);

	foreach ($settings as $setting)
	{
		$feature_file = get_theme_file_path('/core/customizer/abiz-' . $setting . '.php');
		require $feature_file;
	}
	
	require ABIZ_THEME_CONTROL_DIR . '/customize-upgrade-control.php';
}
add_action('after_setup_theme','abiz_customizer_settings');


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function abiz_customize_preview_js()
{
	wp_enqueue_script('abiz-customizer-preview', ABIZ_THEME_CORE_URI . '/customizer/assets/js/customizer.js', array(
		'customize-preview'
	) , '20151215', true);
}
add_action('customize_preview_init','abiz_customize_preview_js');


//recommended plugin section function.
function abiz_recommended_plugin_section( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'abiz_Customize_Recommended_Plugin_Section' );
}
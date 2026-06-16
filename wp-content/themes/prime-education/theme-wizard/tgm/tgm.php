<?php require get_template_directory() . '/theme-wizard/tgm/class-tgm-plugin-activation.php';

function prime_education_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Classic Widgets', 'prime-education' ),
			'slug'             => 'classic-widgets',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'prime_education_register_recommended_plugins' );
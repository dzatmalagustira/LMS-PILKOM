<?php
/*
 *  Upgrade to pro options
 */ 

function arvina_upgrade_pro_options( $wp_customize ) {	
	class Arvina_WP_Button_Customize_Control extends WP_Customize_Control {
	public $type = 'abiz_upgrade_premium';

	   function render_content() {
		?>
			<div class="premium-info">
				<ul>					
					<li><a class="support" href="https://themesdaddy.com/support/" target="_blank"><i class="dashicons dashicons-lightbulb"></i><?php _e( 'Need Support ?','arvina' ); ?> </a></li>
					
					<li><a class="free-pro" href="https://demo.themesdaddy.com/arvina-pro/" target="_blank"><i class="dashicons dashicons-visibility"></i><?php _e( 'Premium Demo','arvina' ); ?> </a></li>
					
					<li><a class="upgrade-to-pro" href="https://themesdaddy.com/themes/arvina-pro/" target="_blank"><i class="dashicons dashicons-update-alt"></i><?php _e( 'Upgrade to Pro','arvina' ); ?> </a></li>
					
					<li><a class="show-love" href="https://wordpress.org/support/theme/arvina/reviews/#new-post" target="_blank"><i class="dashicons dashicons-smiley"></i><?php _e( 'Share a Good Review','arvina' ); ?> </a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
	$wp_customize->add_setting(
		'premium_info_buttons',
		array(
		   'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'arvina_sanitize_text',
		)	
	);
	
	$wp_customize->add_control( new Arvina_WP_Button_Customize_Control( $wp_customize, 'premium_info_buttons', array(
		'section' => 'abiz_upgrade_premium',
    ))
);
}
add_action( 'customize_register', 'arvina_upgrade_pro_options', 999 );
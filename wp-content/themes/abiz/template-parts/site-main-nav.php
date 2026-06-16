<?php
/**
 * Template part for displaying site main navigation.
 */
wp_nav_menu( 
	array(  
		'theme_location' => 'primary_menu',
		'container'  => '',
		'menu_class' => 'main-menu',
		'fallback_cb' => 'abiz_bootstrap_fallback_page_menu',
		'walker' => new abiz_bootstrap_navwalker()
		 ) 
	);
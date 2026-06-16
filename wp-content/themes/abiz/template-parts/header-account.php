<?php
/**
 * Template part for displaying Header My Account.
 */
$enable_account = get_theme_mod( 'enable_account',abiz_get_default_option( 'enable_account' )); 
if($enable_account == '1') { ?>
	<li class="header-account-wrapper">
		<?php if ( is_user_logged_in() ) { ?>
			<a href="<?php echo esc_url(wp_logout_url( home_url())); ?>"><i class="fas fa-user"></i></a>
		<?php }else{ ?>
			<a href="<?php echo esc_url(wp_login_url( home_url())); ?>"><i class="fas fa-user"></i></a>
		<?php } ?>
	</li>
<?php }
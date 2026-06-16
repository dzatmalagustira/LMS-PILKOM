<?php
/**
 * Template part for displaying Header Button.
 */
$enable_hdr_btn  =	get_theme_mod('enable_hdr_btn',abiz_get_default_option( 'enable_hdr_btn' ));
$hdr_btn_label  =	get_theme_mod('hdr_btn_label',abiz_get_default_option( 'hdr_btn_label' ));
$hdr_btn_link   =	get_theme_mod('hdr_btn_link',abiz_get_default_option( 'hdr_btn_link' ));
$hdr_btn_target = get_theme_mod('hdr_btn_target','');	
if($enable_hdr_btn == '1') { ?>
	<li class="button-area">
		<a href="<?php echo esc_url( $hdr_btn_link ); ?>" <?php if($hdr_btn_target == '1'): echo "target='_blank'"; endif;?> class="btn btn-primary btn-like-icon"><?php echo wp_kses_post( $hdr_btn_label ); ?><span class="bticn"><i class="fas fa-arrow-right"></i></span></a>
	</li>
<?php }
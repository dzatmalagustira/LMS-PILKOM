<?php
/**
 * Template part for displaying top footer.
 */
$enable_top_footer	= get_theme_mod('enable_top_footer',abiz_get_default_option( 'enable_top_footer' ));
$footer_top_info	= get_theme_mod('footer_top_info',abiz_get_default_option( 'footer_top_info' ));
if($enable_top_footer=='1'): ?>	
<div class="footer-top">
	<div class="container">
		<div class="row">
			<?php
				if ( ! empty( $footer_top_info ) ) {
				$footer_top_info = json_decode( $footer_top_info );
				foreach ( $footer_top_info as $item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'abiz_translate_single_string', $item->title, 'Footer Top section' ) : '';
					$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'abiz_translate_single_string', $item->subtitle, 'Footer Top section' ) : '';
					$link = ! empty( $item->link ) ? apply_filters( 'abiz_translate_single_string', $item->link, 'Footer Top section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'abiz_translate_single_string', $item->icon_value, 'Footer Top section' ) : '';
			?>
			<div class="col-lg-3 col-md-6 col-12 text-center wow fadeInUp mb-4">
				<aside class="widget widget-contact first">
					<div class="contact-area">
						<div class="contact-icon">
							<?php if(!empty($icon)): ?>
								<div class="contact-corn"><i class="fa <?php echo esc_attr($icon); ?>"></i></div>
							<?php endif;?>
						</div>
						<div class="contact-info">
							<?php if(!empty($title)): ?>
								<h3 class="title"><?php echo esc_html($title); ?></h3>
							<?php endif;?>
							
							<?php if(!empty($subtitle)): ?>
								<p class="text"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($subtitle); ?></a></p>
							<?php endif;?>	
						</div>
					</div>
				</aside>
			</div>
			<?php } } ?>
		</div>
	</div>
</div>
<?php		
endif; ?>
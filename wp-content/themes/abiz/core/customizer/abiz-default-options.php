<?php
/**
 * Get default option by passing option id
 */
if ( !function_exists( 'abiz_get_default_option' ) ):
	function abiz_get_default_option( $option ) {


		if ( empty( $option ) ) {
			return false;
		}

		$abiz_default_options = array(
			'logo_size' => '150',
			'site_ttl_font_size' => '30',
			'site_desc_font_size' => '14',
			'enable_top_hdr' => '1',
			'enable_top_hdr' => '1',
			'enable_hdr_info1' => '1',
			'hdr_info1_icon' => 'fas fa-envelope',
			'hdr_info1_title' => __('info@example.com', 'abiz'),
			'hdr_info1_link' => '#',
			'enable_hdr_info2' => '1',
			'hdr_info2_icon' => 'fas fa-phone',
			'hdr_info2_title' => __('+123 456 7890', 'abiz'),
			'hdr_info2_link' => '#',
			'enable_hdr_info3' => '1',
			'hdr_info3_icon' => 'fas fa-location-arrow',
			'hdr_info3_title' => __('California, TX 70240', 'abiz'),
			'hdr_info3_link' => '#',
			'enable_social_icon' => '1',
			'hdr_social_icons' => abiz_get_social_icon_default(),
			'enable_cart' => '1',
			'enable_nav_search' => '1',
			'enable_account' => '1',
			'enable_hdr_btn' => '1',
			'hdr_btn_label' => __('Get in Touch', 'abiz'),
			'hdr_btn_link' => '#',
			'enable_hdr_sticky' => '1',
			'enable_scroller' => '1',
			'top_scroller_icon' => 'fas fa-angle-up',
			'enable_page_header' => '1',
			'page_header_img_opacity' => '0.75',
			'page_header_bg_color' => '#e11c09',
			'blog_archive_ordering' => array(
											'meta',
											'title',
											'content',
										),
			'enable_blog_excerpt' => '1',
			'blog_excerpt_length' => '40',
			'blog_excerpt_after_text' => '&hellip;',			
			'enable_blog_excerpt_btn' => '1',
			'blog_excerpt_btn_label' => __('Read More', 'abiz'),			
			'enable_top_footer' => '1',
			'footer_top_info' => abiz_footer_top_default(),	
			'footer_copyright' => wp_kses_post(sprintf( __( 'Copyright &copy; {current_year}. Created by %s. Powered by %s.', 'abiz' ), '<a href="#" target="_blank" rel="noopener">Themes Daddy</a>', '<a href="https://www.wordpress.org" target="_blank" rel="noopener">WordPress</a>' )),
			'abiz_body_font_size' => '16',
		);



		$abiz_default_options = apply_filters( 'abiz_modify_default_options', $abiz_default_options );

		if ( isset( $abiz_default_options[$option] ) ) {
			return $abiz_default_options[$option];
		}

		return false;
	}
endif;
?>

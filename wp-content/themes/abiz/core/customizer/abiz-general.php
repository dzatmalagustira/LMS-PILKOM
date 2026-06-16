<?php
function abiz_general_customize($wp_customize)
{
    $selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';
	
	/*=========================================
    Site Identity
    =========================================*/
	$wp_customize->add_setting('logo_size', array(
        'default' => abiz_get_default_option( 'logo_size' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_html',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('logo_size', array(
        'label' => __('Logo Size', 'abiz') ,
        'section' => 'title_tagline',
        'type' => 'number',
    ));

    // Site Title//
	$wp_customize->add_setting('site_ttl_font_size', array(
        'default' => abiz_get_default_option( 'site_ttl_font_size' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_html',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('site_ttl_font_size', array(
        'label' => __('Site Title Font Size', 'abiz') ,
        'section' => 'title_tagline',
        'type' => 'number',
    ));
    
	// Site Description Font Size//
	$wp_customize->add_setting('site_desc_font_size', array(
	'default' => abiz_get_default_option( 'site_desc_font_size' ),
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'abiz_sanitize_html',
	'transport' => 'postMessage',
    ));

    $wp_customize->add_control('site_desc_font_size', array(
        'label' => __('Site Description Font Size', 'abiz') ,
        'section' => 'title_tagline',
        'type' => 'number',
    ));
       

    /*=========================================
    Top Header Section
    =========================================*/
    /*=========================================
    Setting
    =========================================*/
    $wp_customize->add_setting('top_hdr_set', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('top_hdr_set', array(
        'type' => 'hidden',
        'label' => __('Setting', 'abiz') ,
        'section' => 'top_header',
        'priority' => 1,
    ));

    // Enable / Disable
    $wp_customize->add_setting('enable_top_hdr', array(
        'default' => abiz_get_default_option( 'enable_top_hdr' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_top_hdr', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'top_header',
        'priority' => 2,

    )));

    /*=========================================
    Info 1
    =========================================*/
    $wp_customize->add_setting('hdr_info1_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('hdr_info1_head', array(
        'type' => 'hidden',
        'label' => __('Info 1', 'abiz') ,
        'section' => 'top_header',
        'priority' => 2,
    ));

    // hide/show
    $wp_customize->add_setting('enable_hdr_info1', array(
        'default' => abiz_get_default_option( 'enable_hdr_info1' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_hdr_info1', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'top_header',
        'priority' => 2,

    )));

    // icon //
    $wp_customize->add_setting('hdr_info1_icon', array(
        'default' => abiz_get_default_option( 'hdr_info1_icon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control('hdr_info1_icon', array(
        'label' => __('Icon', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 3,
    ));

    //  title //
    $wp_customize->add_setting('hdr_info1_title', array(
        'default' => abiz_get_default_option( 'hdr_info1_title' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_html',
        'transport' => $selective_refresh,
    ));

    $wp_customize->add_control('hdr_info1_title', array(
        'label' => __('Title', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 3,
    ));

    //  Link //
    $wp_customize->add_setting('hdr_info1_link', array(
        'default' => abiz_get_default_option( 'hdr_info1_link' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_url',
    ));

    $wp_customize->add_control('hdr_info1_link', array(
        'label' => __('Link', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 3,
    ));

    /*=========================================
    Info 2
    =========================================*/
    $wp_customize->add_setting('hdr_info2_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('hdr_info2_head', array(
        'type' => 'hidden',
        'label' => __('Info 2', 'abiz') ,
        'section' => 'top_header',
        'priority' => 4,
    ));

    // hide/show
    $wp_customize->add_setting('enable_hdr_info2', array(
         'default' => abiz_get_default_option( 'enable_hdr_info2' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_hdr_info2', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'top_header',
        'priority' => 5,

    )));

    // icon //
    $wp_customize->add_setting('hdr_info2_icon', array(
         'default' => abiz_get_default_option( 'hdr_info2_icon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control('hdr_info2_icon', array(
        'label' => __('Icon', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 6,
    ));

    //  title //
    $wp_customize->add_setting('hdr_info2_title', array(
         'default' => abiz_get_default_option( 'hdr_info2_title' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_html',
        'transport' => $selective_refresh,
    ));

    $wp_customize->add_control('hdr_info2_title', array(
        'label' => __('Title', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 7,
    ));

    //  Link //
    $wp_customize->add_setting('hdr_info2_link', array(
         'default' => abiz_get_default_option( 'hdr_info2_link' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_url',
    ));

    $wp_customize->add_control('hdr_info2_link', array(
        'label' => __('Link', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 8,
    ));

    /*=========================================
    Info 3
    =========================================*/
    $wp_customize->add_setting('hdr_info3_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('hdr_info3_head', array(
        'type' => 'hidden',
        'label' => __('Info 3', 'abiz') ,
        'section' => 'top_header',
        'priority' => 9,
    ));

    // hide/show
    $wp_customize->add_setting('enable_hdr_info3', array(
         'default' => abiz_get_default_option( 'enable_hdr_info3' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_hdr_info3', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'top_header',
        'priority' => 10,

    )));

    // icon //
    $wp_customize->add_setting('hdr_info3_icon', array(
         'default' => abiz_get_default_option( 'hdr_info3_icon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control('hdr_info3_icon', array(
        'label' => __('Icon', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 11,
    ));
	

    //  title //
    $wp_customize->add_setting('hdr_info3_title', array(
         'default' => abiz_get_default_option( 'hdr_info3_title' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_html',
        'transport' => $selective_refresh,
    ));

    $wp_customize->add_control('hdr_info3_title', array(
        'label' => __('Title', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 12,
    ));

    //  Link //
    $wp_customize->add_setting('hdr_info3_link', array(
         'default' => abiz_get_default_option( 'hdr_info3_link' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_url',
    ));

    $wp_customize->add_control('hdr_info3_link', array(
        'label' => __('Link', 'abiz') ,
        'section' => 'top_header',
        'type' => 'text',
        'priority' => 13,
    ));

    /*=========================================
    Social
    =========================================*/
    $wp_customize->add_setting('hdr_social_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('hdr_social_head', array(
        'type' => 'hidden',
        'label' => __('Social Icon', 'abiz') ,
        'section' => 'top_header',
        'priority' => 15,
    ));

    $wp_customize->add_setting('enable_social_icon', array(
        'default' => abiz_get_default_option( 'enable_social_icon' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_social_icon', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'top_header',
        'priority' => 16,

    )));

    /**
     * Customizer Repeater
     */
    $wp_customize->add_setting('hdr_social_icons', array(
		'default' => abiz_get_default_option( 'hdr_social_icons' ),
        'sanitize_callback' => 'abiz_repeater_sanitize',
    ));

    $wp_customize->add_control(new ABIZ_Repeater($wp_customize, 'hdr_social_icons', array(
        'label' => esc_html__('Social Icons', 'abiz') ,
        'priority' => 17,
        'section' => 'top_header',
        'customizer_repeater_icon_control' => true,
        'customizer_repeater_link_control' => true,
    )));
	
	// Upgrade
	if (class_exists('Daddy_Plus_Customize_Upgrade_Control'))
    {
		$wp_customize->add_setting('abiz_social_icon_upgrade',array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		));
		
		$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
				'abiz_social_icon_upgrade', 
				array(
					'label'      => __( 'Social Icons', 'abiz' ),
					'section'    => 'top_header',
					'priority' => 17,
				) 
			) 
		);	
	}
    /*=========================================
    Header Navigation
    =========================================*/
    // Cart
    $wp_customize->add_setting('hdr_nav_cart', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('hdr_nav_cart', array(
        'type' => 'hidden',
        'label' => __('Cart', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 2,
    ));

    // hide/show
    $wp_customize->add_setting('enable_cart', array(
        'default' => abiz_get_default_option( 'enable_cart' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_cart', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 2,

    )));
	
	 // Account
    $wp_customize->add_setting('hdr_nav_account', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('hdr_nav_account', array(
        'type' => 'hidden',
        'label' => __('Account', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 3,
    ));

    // hide/show
    $wp_customize->add_setting('enable_account', array(
        'default' => abiz_get_default_option( 'enable_account' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_account', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 3,

    )));
	
    // Search
    $wp_customize->add_setting('hdr_nav_search_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('hdr_nav_search_head', array(
        'type' => 'hidden',
        'label' => __('Search', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 3,
    ));

    // hide/show
    $wp_customize->add_setting('enable_nav_search', array(
        'default' => abiz_get_default_option( 'enable_nav_search' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_nav_search', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 3,

    )));

    // Header Button
    $wp_customize->add_setting('abv_hdr_btn_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('abv_hdr_btn_head', array(
        'type' => 'hidden',
        'label' => __('Button', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 18,
    ));

    $wp_customize->add_setting('enable_hdr_btn', array(
        'default' => abiz_get_default_option( 'enable_hdr_btn' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_hdr_btn', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 19,

    )));

    // Button Label //
    $wp_customize->add_setting('hdr_btn_label', array(
        'default' => abiz_get_default_option( 'hdr_btn_label' ),
        'sanitize_callback' => 'abiz_sanitize_html',
        'transport' => $selective_refresh,
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('hdr_btn_label', array(
        'label' => __('Label', 'abiz') ,
        'section' => 'header_nav',
        'type' => 'text',
        'priority' => 21,
    ));

    // Button URL //
    $wp_customize->add_setting('hdr_btn_link', array(
        'default' => abiz_get_default_option( 'hdr_btn_link' ),
        'sanitize_callback' => 'abiz_sanitize_url',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('hdr_btn_link', array(
        'label' => __('Link', 'abiz') ,
        'section' => 'header_nav',
        'type' => 'text',
        'priority' => 22,
    ));

    $wp_customize->add_setting('hdr_btn_target', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'hdr_btn_target', array(
        'label' => __('Open in New Tab ?', 'abiz') ,
        'section' => 'header_nav',
        'priority' => 23,

    )));

    /*=========================================
    Sticky Header
    =========================================*/
    // Heading
    $wp_customize->add_setting('sticky_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text'
    ));

    $wp_customize->add_control('sticky_head', array(
        'type' => 'hidden',
        'label' => __('Sticky Header', 'abiz') ,
        'section' => 'header_nav',
		 'priority' => 23,
    ));
    $wp_customize->add_setting('enable_hdr_sticky', array(
        'default' => abiz_get_default_option( 'enable_hdr_sticky' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_hdr_sticky', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'header_nav',
		 'priority' => 24,

    )));
	
    /*=========================================
    Scroller
    =========================================*/
	//  Head
    $wp_customize->add_setting('top_scroller_settings', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text'
    ));

    $wp_customize->add_control('top_scroller_settings', array(
        'type' => 'hidden',
        'label' => __('Top Scroller Setting', 'abiz') ,
        'section' => 'top_scroller'
	));
	
    $wp_customize->add_setting('enable_scroller', array(
        'default' => abiz_get_default_option( 'enable_scroller' ),
        'sanitize_callback' => 'abiz_sanitize_checkbox',
        'capability' => 'edit_theme_options',
    ));
	
	 $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_scroller', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'top_scroller'

    )));

    // Scroller icon //
    $wp_customize->add_setting('top_scroller_icon', array(
        'default' => abiz_get_default_option( 'top_scroller_icon' ),
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    ));

	$wp_customize->add_control('top_scroller_icon', array(
        'label' => __('Scroller Icon', 'abiz') ,
        'section' => 'top_scroller',
        'type' => 'text'
    ));

    /*=========================================
    Page Header
    =========================================*/
    // Heading
    $wp_customize->add_setting('header_image_set', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
    ));

    $wp_customize->add_control('header_image_set', array(
        'type' => 'hidden',
        'label' => __('Page Header', 'abiz') ,
        'section' => 'header_image',
        'priority' => 1,
    ));

    // Enable / Disable
    $wp_customize->add_setting('enable_page_header', array(
        'default' => abiz_get_default_option( 'enable_page_header' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_page_header', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'header_image',
        'priority' => 2,

    )));

    // Image Opacity //
	$wp_customize->add_setting('page_header_img_opacity', array(
		'default' => abiz_get_default_option( 'page_header_img_opacity' ),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'abiz_sanitize_html',
		'priority' => 11,
	));
	$wp_customize->add_control('page_header_img_opacity', array(
		'label' => __('Opacity', 'abiz') ,
		'section' => 'header_image',
		'type' => 'number',
	));

    $wp_customize->add_setting('page_header_bg_color', array(
        'default' => abiz_get_default_option( 'page_header_bg_color' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'priority' => 12,
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page_header_bg_color', array(
        'label' => __('Overlay Color', 'abiz') ,
        'section' => 'header_image',
    )));

    /*=========================================
    Blog
    =========================================*/
    // Head //
    $wp_customize->add_setting('blog_general_head', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
        'priority' => 1,
    ));

    $wp_customize->add_control('blog_general_head', array(
        'type' => 'hidden',
        'label' => __('Blog/Archive/Single', 'abiz') ,
        'section' => 'blog_general',
    ));

    $wp_customize->add_setting('blog_archive_ordering', array(
        'default' => abiz_get_default_option( 'blog_archive_ordering' ),
        'sanitize_callback' => 'abiz_sanitize_sortable',
        'priority' => 2,
    ));

    $wp_customize->add_control(new Abiz_Control_Sortable($wp_customize, 'blog_archive_ordering', array(
        'label' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'abiz') ,
        'section' => 'blog_general',
        'choices' => array(
            'title' => __('Title', 'abiz') ,
            'meta' => __('Meta', 'abiz') ,
            'content' => __('Content', 'abiz') ,
        ) ,
    )));
	
	// Enable / Disable
	$wp_customize->add_setting('enable_blog_excerpt', array(
        'default' => abiz_get_default_option( 'enable_blog_excerpt' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
		'priority' => 3,
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_blog_excerpt', array(
        'label' => __('Enable / Disable Blog Excerpt ?', 'abiz') ,
        'section' => 'blog_general',
        )));
	
	// Excerpt Length
	$wp_customize->add_setting('blog_excerpt_length', array(
        'default' => abiz_get_default_option( 'blog_excerpt_length' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_html',
		'priority' => 3,
    ));

    $wp_customize->add_control('blog_excerpt_length', array(
        'label' => __('Blog Excerpt Length', 'abiz') ,
        'section' => 'blog_general',
        'type' => 'number',
    ));
	
	// Excerpt Text //
    $wp_customize->add_setting('blog_excerpt_after_text', array(
        'default' => abiz_get_default_option( 'blog_excerpt_after_text' ),
        'sanitize_callback' => 'abiz_sanitize_html',
        'capability' => 'edit_theme_options',
		'priority' => 3,
    ));

    $wp_customize->add_control('blog_excerpt_after_text', array(
        'label' => __('Blog Excerpt Text', 'abiz') ,
        'section' => 'blog_general',
        'type' => 'text'
    ));
	
	// Enable / Disable
	$wp_customize->add_setting('enable_blog_excerpt_btn', array(
        'default' => abiz_get_default_option( 'enable_blog_excerpt_btn' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
		'priority' => 3,
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_blog_excerpt_btn', array(
        'label' => __('Enable / Disable Blog Excerpt Button ?', 'abiz') ,
        'section' => 'blog_general',
        )));
		
	// Button Label //
    $wp_customize->add_setting('blog_excerpt_btn_label', array(
        'default' => abiz_get_default_option( 'blog_excerpt_btn_label' ),
        'sanitize_callback' => 'abiz_sanitize_html',
        'capability' => 'edit_theme_options',
		'priority' => 5,
    ));

    $wp_customize->add_control('blog_excerpt_btn_label', array(
        'label' => __('Blog Excerpt Button Label', 'abiz') ,
        'section' => 'blog_general',
        'type' => 'text'
    ));
	
	

    /*=========================================
    Footer
    =========================================*/
    /*=========================================
    Footer Top
    =========================================*/
    // Head //
    $wp_customize->add_setting('footer_top_heading', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
        'priority' => 1,
    ));

    $wp_customize->add_control('footer_top_heading', array(
        'type' => 'hidden',
        'label' => __('Footer Top', 'abiz') ,
        'section' => 'footer_section',
    ));

    // Enable / Disable
    $wp_customize->add_setting('enable_top_footer', array(
        'default' => abiz_get_default_option( 'enable_top_footer' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_checkbox',
        'priority' => 2,
    ));

    $wp_customize->add_control(new Abiz_Customize_Toggle_Control($wp_customize, 'enable_top_footer', array(
        'label' => __('Enable / Disable ?', 'abiz') ,
        'section' => 'footer_section',

    )));

    // Footer Top Info
    $wp_customize->add_setting('footer_top_info', array(
        'sanitize_callback' => 'abiz_repeater_sanitize',
        'transport' => $selective_refresh,
        'priority' => 8,
        'default' => abiz_get_default_option( 'footer_top_info' ),
    ));

    $wp_customize->add_control(new Abiz_Repeater($wp_customize, 'footer_top_info', array(
        'label' => esc_html__('Contact', 'abiz') ,
        'section' => 'footer_section',
        'add_field_label' => esc_html__('Add New Contact', 'abiz') ,
        'item_name' => esc_html__('Contact', 'abiz') ,
        'customizer_repeater_icon_control' => true,
        'customizer_repeater_title_control' => true,
        'customizer_repeater_subtitle_control' => true,
        'customizer_repeater_link_control' => true,
    )));

	// Upgrade
	if (class_exists('Daddy_Plus_Customize_Upgrade_Control'))
    {
		$wp_customize->add_setting('abiz_footer_top_info_upgrade',array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 8
		));
		
		$wp_customize->add_control(new Daddy_Plus_Customize_Upgrade_Control($wp_customize, 
				'abiz_footer_top_info_upgrade', 
				array(
					'label'      => __( 'Info', 'abiz' ),
					'section'    => 'footer_section'
				) 
			) 
		);	
	}
	
    /*=========================================
    Footer Copyright
    =========================================*/
    //  Head
    $wp_customize->add_setting('footer_copy_settings', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text',
        'priority' => 12,
    ));

    $wp_customize->add_control('footer_copy_settings', array(
        'type' => 'hidden',
        'label' => __('Footer  Copyright', 'abiz') ,
        'section' => 'footer_section',
    ));

    // Footer Copyright
    $wp_customize->add_setting('footer_copyright', array(
        'default' => abiz_get_default_option( 'footer_copyright' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_kses_post',
        'priority' => 16,
    ));

    $wp_customize->add_control('footer_copyright', array(
        'label' => __('Copyright', 'abiz') ,
        'section' => 'footer_section',
        'type' => 'textarea',
        'transport' => $selective_refresh,
    ));
	
	/*=========================================
    Abiz Typography
    =========================================*/
	//  Head
    $wp_customize->add_setting('abiz_body_font_family_settings', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'abiz_sanitize_text'
    ));

    $wp_customize->add_control('abiz_body_font_family_settings', array(
        'type' => 'hidden',
        'label' => __('Body Typography Setting', 'abiz') ,
        'section' => 'abiz_typography',
		'priority' => 1,
    ));

    // Body Font Size //
	$wp_customize->add_setting('abiz_body_font_size', array(
	'default' => abiz_get_default_option( 'abiz_body_font_size' ),
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'abiz_sanitize_html',
	'transport' => 'postMessage',
    ));

    $wp_customize->add_control('abiz_body_font_size', array(
        'label' => __('Font Size', 'abiz') ,
        'section' => 'abiz_typography',
        'type' => 'number',
		'priority' => 1,
    ));

    // Body Font weight //
    $wp_customize->add_setting('abiz_body_font_weight', array(
        'capability' => 'edit_theme_options',
        'default' => 'inherit',
        'transport' => 'postMessage',
        'sanitize_callback' => 'abiz_sanitize_select',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'abiz_body_font_weight', array(
        'label' => __('Weight', 'abiz') ,
        'section' => 'abiz_typography',
        'type' => 'select',
        'priority' => 5,
        'choices' => array(
            'inherit' => __('Default', 'abiz') ,
            '100' => __('Thin: 100', 'abiz') ,
            '200' => __('Light: 200', 'abiz') ,
            '300' => __('Book: 300', 'abiz') ,
            '400' => __('Normal: 400', 'abiz') ,
            '500' => __('Medium: 500', 'abiz') ,
            '600' => __('Semibold: 600', 'abiz') ,
            '700' => __('Bold: 700', 'abiz') ,
            '800' => __('Extra Bold: 800', 'abiz') ,
            '900' => __('Black: 900', 'abiz') ,
        ) ,
    )));

    // Body Font style //
    $wp_customize->add_setting('abiz_body_font_style', array(
        'capability' => 'edit_theme_options',
        'default' => 'inherit',
        'transport' => 'postMessage',
        'sanitize_callback' => 'abiz_sanitize_select',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'abiz_body_font_style', array(
        'label' => __('Font Style', 'abiz') ,
        'section' => 'abiz_typography',
        'type' => 'select',
        'priority' => 6,
        'choices' => array(
            'inherit' => __('Inherit', 'abiz') ,
            'normal' => __('Normal', 'abiz') ,
            'italic' => __('Italic', 'abiz') ,
            'oblique' => __('oblique', 'abiz') ,
        ) ,
    )));
    // Body Text Transform //
    $wp_customize->add_setting('abiz_body_text_transform', array(
        'capability' => 'edit_theme_options',
        'default' => 'inherit',
        'transport' => 'postMessage',
        'sanitize_callback' => 'abiz_sanitize_select',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'abiz_body_text_transform', array(
        'label' => __('Transform', 'abiz') ,
        'section' => 'abiz_typography',
        'type' => 'select',
        'priority' => 7,
        'choices' => array(
            'inherit' => __('Default', 'abiz') ,
            'uppercase' => __('Uppercase', 'abiz') ,
            'lowercase' => __('Lowercase', 'abiz') ,
            'capitalize' => __('Capitalize', 'abiz') ,
        ) ,
    )));

    // Body Text Decoration //
    $wp_customize->add_setting('abiz_body_txt_decoration', array(
        'capability' => 'edit_theme_options',
        'default' => 'inherit',
        'transport' => 'postMessage',
        'sanitize_callback' => 'abiz_sanitize_select',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'abiz_body_txt_decoration', array(
        'label' => __('Text Decoration', 'abiz') ,
        'section' => 'abiz_typography',
        'type' => 'select',
        'priority' => 8,
        'choices' => array(
            'inherit' => __('Inherit', 'abiz') ,
            'underline' => __('Underline', 'abiz') ,
            'overline' => __('Overline', 'abiz') ,
            'line-through' => __('Line Through', 'abiz') ,
            'none' => __('None', 'abiz') ,
        ) ,
    )));
}
add_action('customize_register', 'abiz_general_customize');
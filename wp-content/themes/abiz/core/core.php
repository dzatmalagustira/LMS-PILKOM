<?php
// Includes files
require_once get_template_directory() . '/core/theme-menu/class-bootstrap-navwalker.php';
require_once get_template_directory() . '/core/custom-header.php';
require_once get_template_directory() . '/core/customizer/abiz-default-options.php';
require_once get_template_directory() . '/core/customizer/customizer.php';
require get_template_directory() . '/core/customizer/customizer-repeater/inc/customizer.php';

// Register Google fonts
function abiz_site_get_google_font()
{

    $font_families = array('Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900');

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	require_once get_theme_file_path( 'core/wptt-webfont-loader.php' );

	return wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

// Enqueue scripts and styles.
add_action( 'wp_enqueue_scripts', 'abiz_theme_scripts' );
function abiz_theme_scripts() {
	
	// Styles	
	wp_enqueue_style(
		'bootstrap-min',
		get_template_directory_uri().'/assets/css/bootstrap.min.css'
	);
	
	wp_enqueue_style(
		'owl-carousel-min',
		get_template_directory_uri().'/assets/css/owl.carousel.min.css'
	);
	
	wp_enqueue_style(
		'all-css',
		get_template_directory_uri().'/assets/css/all.min.css'
	);
	
	wp_enqueue_style(
		'animate',
		get_template_directory_uri().'/assets/css/animate.min.css'
	);

	wp_enqueue_style(
		'abiz-main', 
		get_template_directory_uri() . '/assets/css/main.css'
	);
	
	wp_enqueue_style(
		'abiz-media-query', 
		get_template_directory_uri() . '/assets/css/responsive.css'
	);
	
	wp_enqueue_style(
		'abiz-fonts', 
		abiz_site_get_google_font() ,
		array() , 
		null
	);
	
	wp_enqueue_style( 
		'abiz-style', 
		get_stylesheet_uri() 
	);
	
	$output_style = '';
	// Page Header
	$page_header_img_opacity = get_theme_mod('page_header_img_opacity', abiz_get_default_option( 'page_header_img_opacity' ));
	$page_header_bg_color = get_theme_mod('page_header_bg_color', abiz_get_default_option( 'page_header_bg_color' ));

	if (has_header_image())
	{
		$output_style .= ".breadcrumb-area:after {
				background-color: " . esc_attr($page_header_bg_color) . ";
				opacity: " . esc_attr($page_header_img_opacity) . ";
			}\n";
	}

	// Logo Style
	 $logo_size 		 = get_theme_mod('logo_size', abiz_get_default_option( 'logo_size' ));
	 $site_ttl_font_size = get_theme_mod('site_ttl_font_size', abiz_get_default_option( 'site_ttl_font_size' ));
	 $site_desc_font_size = get_theme_mod('site_desc_font_size', abiz_get_default_option( 'site_desc_font_size' ));
	$output_style .= ".logo img, .mobile-logo img {max-width: " . esc_attr($logo_size) . "px;}\n";
	$output_style .= ".site-title {font-size: " . esc_attr($site_ttl_font_size) . "px;}\n";
	$output_style .= ".site-description {font-size: " . esc_attr($site_desc_font_size) . "px;}\n";

	// Typography Body
	$abiz_body_font_size		 = get_theme_mod('abiz_body_font_size',abiz_get_default_option( 'abiz_body_font_size' ));
	$abiz_body_font_weight	 	 = get_theme_mod('abiz_body_font_weight','inherit');
	$abiz_body_text_transform	 = get_theme_mod('abiz_body_text_transform','inherit');
	$abiz_body_font_style	 	 = get_theme_mod('abiz_body_font_style','inherit');
	$abiz_body_txt_decoration	 = get_theme_mod('abiz_body_txt_decoration','none');
	$output_style .=" body{
	font-size: " .esc_attr($abiz_body_font_size). "px;
	font-weight: " .esc_attr($abiz_body_font_weight). ";
	text-transform: " .esc_attr($abiz_body_text_transform). ";
	font-style: " .esc_attr($abiz_body_font_style). ";
	text-decoration: " .esc_attr($abiz_body_txt_decoration). ";
	}\n";

	wp_add_inline_style(
		'abiz-style',
		 $output_style
	);

	// Scripts
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script(
		'bootstrap', 
		get_template_directory_uri() . '/assets/js/bootstrap.min.js', 
		array('jquery'), 
		false, 
		true
	);

	wp_enqueue_script(
		'owl-carousel', 
		get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 
		array('jquery'), 
		false, 
		true
	);
	
	wp_enqueue_script(
		'wow-min', 
		get_template_directory_uri() . '/assets/js/wow.min.js',
		array('jquery'),
		false, 
		false, 
		true
	);
	
	 wp_enqueue_script( 
		 'marquee', 
		 get_template_directory_uri() . '/assets/js/jquery.marquee.js',
		 array( 'jquery' ),
		 '1.0', 
		 true 
	 );

	wp_enqueue_script(
		'abiz-custom-js', 
		get_template_directory_uri() . '/assets/js/custom.js',
		array('jquery'), 
		false, 
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'admin_enqueue_scripts', 'abiz_theme_admin_scripts' );
function abiz_theme_admin_scripts() {
	wp_enqueue_style(
		'abiz-admin-style',
		ABIZ_THEME_CORE_URI . '/customizer/assets/css/admin.css'
	);
	wp_enqueue_script( 
		'abiz-admin-script', 
		ABIZ_THEME_CORE_URI . '/customizer/assets/js/admin-script.js',
		array( 'jquery' ), '',
		true
	);
    wp_localize_script( 
	'abiz-admin-script', 
	'abiz_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}

// Register widget area
add_action( 'widgets_init', 'abiz_widgets_init' );
function abiz_widgets_init() {
	
	// Sidebar Widget
	register_sidebar( 
		array(
			'name' => __( 'Main Sidebar Widget', 'abiz' ),
			'id' => 'sidebar-primary',
			'description' => __( 'Main Sidebar Widget', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 1
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 1', 'abiz' ),
			'id' => 'footer-sidebar-1',
			'description' => __( 'The Footer Widget Area 1', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		) 
	);
	
	// Footer Sidebar 2
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 2', 'abiz' ),
			'id' => 'footer-sidebar-2',
			'description' => __( 'The Footer Widget Area 2', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		) 
	);
	
	// Footer Sidebar 3
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 3', 'abiz' ),
			'id' => 'footer-sidebar-3',
			'description' => __( 'The Footer Widget Area 3', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		)
	);
	
	// Footer Sidebar 4
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 4', 'abiz' ),
			'id' => 'footer-sidebar-4',
			'description' => __( 'The Footer Widget Area 4', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		) 
	);


	// WooCommerce Sidebar
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( 
			array(
				'name' => __( 'WooCommerce Sidebar', 'abiz' ),
				'id' => 'sidebar-woocommerce',
				'description' => __( 'This Widget area for WooCommerce Widget', 'abiz' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h5 class="widget-title">',
				'after_title' => '</h5>',
			) 
		);
	}
}




// Function that returns if the menu is sticky
if (!function_exists('abiz_site_header_sticky')):
    function abiz_site_header_sticky()
    {
        $enable_hdr_sticky = get_theme_mod('enable_hdr_sticky', abiz_get_default_option( 'enable_hdr_sticky' ));

        if ($enable_hdr_sticky == '1'): return 'is-sticky-on'; endif;
    }
endif;


// Abiz Section  Header
if (!function_exists('abiz_section_header')):
    function abiz_section_header($title, $subtitle, $description)
    {
        if (!empty($title) || !empty($subtitle) || !empty($description)): ?>
			<div class="row">
				<div class="col-lg-6 col-12 mx-lg-auto mb-5 text-center">
					<div class="theme-main-heading wow fadeInUp">
						<?php if (!empty($title)): ?><span class="title"><span class="htdot"></span><?php echo wp_kses_post($title); ?><span class="htdot"></span></span><?php endif; ?>
						
						<?php if (!empty($subtitle)): ?><h2 class="subtitle"><?php echo wp_kses_post($subtitle); ?></h2><?php endif; ?>
						
						<?php if (!empty($description)): ?><p class="content"><?php echo wp_kses_post($description); ?></p><?php endif; ?>	
					</div>
				</div>
			</div>
		<?php
        endif;
    }
endif;

if (!function_exists('abiz_section_header_white')):
    function abiz_section_header_white($title, $subtitle, $description)
    {
        if (!empty($title) || !empty($subtitle) || !empty($description)): ?>
			<div class="row">
				<div class="col-lg-6 col-12 mx-lg-auto mb-5 text-center">
					<div class="theme-main-heading theme-white-heading wow fadeInUp">
						<?php if (!empty($title)): ?><span class="title"><span class="htdot"></span><?php echo wp_kses_post($title); ?><span class="htdot"></span></span><?php endif; ?>
						
						<?php if (!empty($subtitle)): ?><h2 class="subtitle"><?php echo wp_kses_post($subtitle); ?></h2><?php endif; ?>
						
						<?php if (!empty($description)): ?><p class="content"><?php echo wp_kses_post($description); ?></p><?php endif; ?>		
					</div>
				</div>
			</div>
		<?php
        endif;
    }
endif;

// Adds custom classes to the array of body classes.
add_filter('body_class', 'abiz_get_body_classes');
function abiz_get_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {$classes[] = 'group-blog';}

    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()){$classes[] = 'hfeed';}
	
	$classes[] = 'heading-design-2';

    return $classes;
}


// Top Header
if (!function_exists('abiz_top_header')){
function abiz_top_header(){
	$enable_top_hdr			=	get_theme_mod('enable_top_hdr',abiz_get_default_option( 'enable_top_hdr' ));
	$enable_hdr_info1		=	get_theme_mod('enable_hdr_info1',abiz_get_default_option( 'enable_hdr_info1' ));
	$hdr_info1_icon			=	get_theme_mod('hdr_info1_icon',abiz_get_default_option( 'hdr_info1_icon' ));	
	$hdr_info1_title		=	get_theme_mod('hdr_info1_title',abiz_get_default_option( 'hdr_info1_title' ));
	$hdr_info1_link			=	get_theme_mod('hdr_info1_link',abiz_get_default_option( 'hdr_info1_link' ));

	$enable_hdr_info2		=	get_theme_mod('enable_hdr_info2',abiz_get_default_option( 'enable_hdr_info2' ));
	$hdr_info2_icon			=	get_theme_mod('hdr_info2_icon',abiz_get_default_option( 'hdr_info2_icon' ));	
	$hdr_info2_title		=	get_theme_mod('hdr_info2_title',abiz_get_default_option( 'hdr_info2_title' ));
	$hdr_info2_link			=	get_theme_mod('hdr_info2_link',abiz_get_default_option( 'hdr_info2_link' ));

	$enable_hdr_info3		=	get_theme_mod('enable_hdr_info3',abiz_get_default_option( 'enable_hdr_info3' ));
	$hdr_info3_icon			=	get_theme_mod('hdr_info3_icon',abiz_get_default_option( 'hdr_info3_icon' ));	
	$hdr_info3_title		=	get_theme_mod('hdr_info3_title',abiz_get_default_option( 'hdr_info3_title' ));
	$hdr_info3_link			=	get_theme_mod('hdr_info3_link',abiz_get_default_option( 'hdr_info3_link' ));

	$enable_social_icon		=	get_theme_mod('enable_social_icon',abiz_get_default_option( 'enable_social_icon' ));
	$hdr_social_icons		=	get_theme_mod('hdr_social_icons',abiz_get_default_option( 'hdr_social_icons' ));	
	if($enable_top_hdr=='1'): ?>
	<div id="above-header" class="above-header d-lg-block wow fadeInDown">
		<div class="header-widget d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12 mb-lg-0 mb-4">
						<div class="widget-left text-lg-left text-center">
							<?php if($enable_hdr_info1=='1'): ?>
								<aside class="widget widget-contact info1">
									<div class="contact-area">
										<?php if(!empty($hdr_info1_icon)): ?>
											<div class="contact-icon">
												<div class="contact-corn"><i class="<?php echo esc_attr($hdr_info1_icon); ?>"></i></div>
											</div>
										<?php endif;?>
										<?php if(!empty($hdr_info1_title)): ?>
											<div class="contact-info">
												<h6 class="title"><a href="<?php echo esc_url($hdr_info1_link); ?>"><?php echo wp_kses_post($hdr_info1_title); ?></a></h6>
											</div>
										<?php endif;?>
									</div>
								</aside>
							<?php endif; ?>	
							
							<?php if($enable_hdr_info2=='1'): ?>
								<aside class="widget widget-contact info2">
									<div class="contact-area">
										<?php if(!empty($hdr_info2_icon)): ?>
											<div class="contact-icon">
												<div class="contact-corn"><i class="<?php echo esc_attr($hdr_info2_icon); ?>"></i></div>
											</div>
										<?php endif;?>
										<?php if(!empty($hdr_info2_title)): ?>
											<div class="contact-info">
												<h6 class="title"><a href="<?php echo esc_url($hdr_info2_link); ?>"><?php echo wp_kses_post($hdr_info2_title); ?></a></h6>
											</div>
										<?php endif;?>
									</div>
								</aside>
							<?php endif; ?>	
						</div>
					</div>
						<div class="col-lg-6 col-12 mb-lg-0 mb-4">                            
							<div class="widget-right justify-content-lg-end justify-content-center text-lg-right text-center">
								<?php if($enable_hdr_info3=='1'): ?>
									<aside class="widget widget-contact info3">
										<div class="contact-area">
											<?php if(!empty($hdr_info3_icon)): ?>
												<div class="contact-icon">
													<div class="contact-corn"><i class="<?php echo esc_attr($hdr_info3_icon); ?>"></i></div>
												</div>
											<?php endif;?>
											<?php if(!empty($hdr_info3_title)): ?>
												<div class="contact-info">
													<h6 class="title"><a href="<?php echo esc_url($hdr_info3_link); ?>"><?php echo wp_kses_post($hdr_info3_title); ?></a></h6>
												</div>
											<?php endif;?>
										</div>
									</aside>
								<?php endif; ?>		
									
								<?php if($enable_social_icon=='1'): ?>	
									<aside class="widget widget_social_widget third">
										<ul>
											<?php
												$social_icons = json_decode($hdr_social_icons);
												if( $social_icons!='' )
												{
												foreach($social_icons as $social_item){	
												$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'abiz_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
												$social_link = ! empty( $social_item->link ) ? apply_filters( 'abiz_translate_single_string', $social_item->link, 'Header section' ) : '';
											?>
											<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="<?php echo esc_attr( $social_icon ); ?>"></i></a></li>
											<?php }} ?>
										</ul>
									</aside>
								<?php endif; ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endif;
}}

/**
 * Add WooCommerce Cart Icon With Cart Count 
 */
add_filter('woocommerce_add_to_cart_fragments', 'abiz_woo_add_to_cart_fragment');
function abiz_woo_add_to_cart_fragment($fragments)
{

    ob_start();
    $count = WC()
        ->cart->cart_contents_count;
?> 
	<button type="button" class="cart-icon-wrap header-cart"><i class="fa fa-shopping-bag"></i>
	<?php
    if ($count > 0)
    {
?>
        <span><?php echo esc_html($count); ?></span>
	<?php
    }
    else
    {
?>	
		<span><?php esc_html_e('0','abiz'); ?></span>
	<?php
    }
?></button><?php
    $fragments['.cart-icon-wrap'] = ob_get_clean();

    return $fragments;
}

add_filter( 'woocommerce_show_admin_notice', function ( $show, $notice ) {
	if ( 'template_files' === $notice ) { return false; }
	return $show;
}, 10, 2 );

// Page Title
if (!function_exists('abiz_page_title'))
{
    function abiz_page_title()
    {

        if (is_home() || is_front_page()): single_post_title();

        elseif (is_day()): printf(__('Daily Archives: %s', 'abiz') , get_the_date());

        elseif (is_month()): printf(__('Monthly Archives: %s', 'abiz') , (get_the_date('F Y')));

        elseif (is_year()): printf(__('Yearly Archives: %s', 'abiz') , (get_the_date('Y')));

        elseif (is_category()): printf(__('Category Archives: %s', 'abiz') , (single_cat_title('', false)));

        elseif (is_tag()): printf(__('Tag Archives: %s', 'abiz') , (single_tag_title('', false)));

        elseif (is_404()): printf(__('Error 404', 'abiz'));

        elseif (is_author()): printf(__('Author: %s', 'abiz') , (get_the_author('', false)));

        elseif (class_exists('woocommerce')):

            if (is_shop()) { woocommerce_page_title(); }
			elseif (is_tax('product_cat')){ printf(__('Product Category : %s', 'abiz') , (single_term_title('', false))); }
			elseif (is_cart()){ the_title(); }
            elseif (is_checkout()) { the_title();}
			else { the_title();}
            else: the_title();
		endif;
        }
    }

// Page Header
function abiz_page_header()
{
	global $post;

		echo '<li><a href="' . esc_url(home_url()) . '">' . esc_html_e('Home','abiz') . '</a> ' . '&nbsp/&nbsp';

		if (is_category())
		{
			$thisCat = get_category(get_query_var('cat') , false);
			if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, true, ' ' . ' ');
			echo '<li class="active">' . esc_html__('Archive by category', 'abiz') . ' "' . esc_html(single_cat_title('', false)) . '"' . '</li>';

		}

		elseif (is_search())
		{
			echo '<li class="active">' . esc_html__('Search results for ', 'abiz') . ' "' . esc_html(get_search_query()) . '"' . '</li>';
		}

		elseif (is_day())
		{
			echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . '&nbsp/&nbsp';
			echo '<a href="' . esc_url(get_month_link(get_the_time('Y') , get_the_time('m'))) . '">' . esc_html(get_the_time('F')) . '</a> ' . '&nbsp/&nbsp';
			echo '<li class="active">' . esc_html(get_the_time('d')) . '</li>';
		}

		elseif (is_month())
		{
			echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> &nbsp/&nbsp';
			echo '<li class="active">' . esc_html(get_the_time('F')) . '</li>';
		}

		elseif (is_year())
		{
			echo '<li class="active">' . esc_html(get_the_time('Y')) . '</li>';
		}

		elseif (is_single() && !is_attachment())
		{
			if (get_post_type() != 'post')
			{
				if (class_exists('WooCommerce'))
				{
					 echo ' &nbsp&nbsp' . '<li class="active">' . wp_kses_post(get_the_title()) . '</li>';
				}
				else
				{
					$post_type = get_post_type_object(get_post_type());
					$slug = $post_type->rewrite;
					echo '<a href="' . esc_url(home_url()) . '/' . $slug['slug'] . '/">' . $post_type
						->labels->singular_name . '</a>';
					 echo ' &nbsp/&nbsp' . '<li class="active">' . wp_kses_post(get_the_title()) . '</li>';
				}
			}
			else
			{
				$cat = get_the_category();
				$cat = $cat[0];
				$cats = get_category_parents($cat, true, ' &nbsp/&nbsp');
				$cats = preg_replace("#^(.+)\s\s$#", "$1", $cats);
				echo $cats;
				echo '<li class="active">' . esc_html(get_the_title()) . '</li>';
			}

		}

		elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404())
		{
			if (class_exists('WooCommerce'))
			{
				if (is_shop())
				{
					$thisshop = woocommerce_page_title();
				}
			}
			else
			{
				$post_type = get_post_type_object(get_post_type());
				echo '<li class="active">' . $post_type
					->labels->singular_name . '</li>';
			}
		}

		elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404())
		{
			$post_type = get_post_type_object(get_post_type());
			echo '<li class="active">' . $post_type
				->labels->singular_name . '</li>';
		}

		elseif (is_attachment())
		{
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID);
			if (!empty($cat))
			{
				$cat = $cat[0];
				echo get_category_parents($cat, true, ' &nbsp/&nbsp');
			}
			echo '<a href="' . esc_url(get_permalink($parent)) . '">' . $parent->post_title . '</a>';
			echo '<li class="active">' . esc_html(get_the_title()) . '</li>';

		}

		elseif (is_page() && !$post->post_parent)
		{
			echo '<li class="active">' . esc_html(get_the_title()) . '</li>';
		}

		elseif (is_page() && $post->post_parent)
		{
			$parent_id = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id)
			{
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html(get_the_title($page->ID)) . '</a>' . '&nbsp/&nbsp';
				$parent_id = $page->post_parent;
			}

			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0;$i < count($breadcrumbs);$i++)
			{
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs) - 1) echo '&nbsp/&nbsp';
			}
			echo  '<li class="active">' . esc_html(get_the_title()) . '</li>';

		}
		elseif (is_tag())
		{
			echo '<li class="active">' . esc_html__('Posts tagged ', 'abiz') . ' "' . esc_html(single_tag_title('', false)) . '"' . '</li>';
		}

		elseif (is_author())
		{
			global $author;
			$userdata = get_userdata($author);
			echo '<li class="active">' . esc_html__('Articles posted by ', 'abiz') . '' . $userdata->display_name . '</li>';
		}

		elseif (is_404())
		{
			echo '<li class="active">' . esc_html__('Error 404 ', 'abiz') . '</li>';
		}

		if (get_query_var('paged'))
		{
			if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo '';
			echo ' ( ' . esc_html__('Page', 'abiz') . '' . esc_html(get_query_var('paged')) . ' )';
			if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo '';
		}

		echo '</li>';
}


// Excerpt Length
function abiz_blog_excerpt_length( $length ) {
	 $blog_excerpt_length = get_theme_mod( 'blog_excerpt_length', abiz_get_default_option( 'blog_excerpt_length' ));
    if( $blog_excerpt_length == 1000 ) {
        return 9999;
    }
    return esc_html( $blog_excerpt_length );
}
add_filter( 'excerpt_length', 'abiz_blog_excerpt_length', 999 );


// Excerpt Text
function abiz_blog_excerpt_after_text( $more ) {
	$blog_excerpt_after_text = get_theme_mod( 'blog_excerpt_after_text', abiz_get_default_option( 'blog_excerpt_after_text' ));
	return $blog_excerpt_after_text;
}
add_filter( 'excerpt_more', 'abiz_blog_excerpt_after_text' );


// Blog Excerpt Button
if ( ! function_exists( 'abiz_blog_excerpt_button' ) ) :
function abiz_blog_excerpt_button() {
	$enable_blog_excerpt_btn = get_theme_mod( 'enable_blog_excerpt_btn', abiz_get_default_option( 'enable_blog_excerpt_btn' ));
	$blog_excerpt_btn_label = get_theme_mod( 'blog_excerpt_btn_label', abiz_get_default_option( 'blog_excerpt_btn_label' ));	
	if ( $enable_blog_excerpt_btn == '1' ):
	?>
	<a href="<?php echo esc_url(get_the_permalink()); ?>" class="more-link"><?php echo wp_kses_post($blog_excerpt_btn_label); ?></a>
<?php endif;
	} 
endif;


/*
 *
 * Social Icon
*/
function abiz_get_social_icon_default()
{
	return apply_filters('abiz_get_social_icon_default', json_encode(array(
		array(
			'icon_value' => esc_html__('fab fa-facebook', 'abiz') ,
			'link' => esc_html__('#', 'abiz') ,
			'id' => 'customizer_repeater_header_social_001',
		) ,
		array(
			'icon_value' => esc_html__('fab fa-x-twitter', 'abiz') ,
			'link' => esc_html__('#', 'abiz') ,
			'id' => 'customizer_repeater_header_social_003',
		) ,
		array(
			'icon_value' => esc_html__('fab fa-instagram', 'abiz') ,
			'link' => esc_html__('#', 'abiz') ,
			'id' => 'customizer_repeater_header_social_004',
		) ,
		array(
			'icon_value' => esc_html__('fab fa-tiktok', 'abiz') ,
			'link' => esc_html__('#', 'abiz') ,
			'id' => 'customizer_repeater_header_social_005',
		) ,
	)));
}



/*
 *
 * Footer Top Default
*/
function abiz_footer_top_default()
{
	return apply_filters('abiz_footer_top_default', json_encode(array(
		array(
			'icon_value' => 'fas fa-envelope',
			'title' => esc_html__('Email Us 24/7', 'abiz') ,
			'subtitle' => esc_html__('info@example.com', 'abiz') ,
			'link' => 'mailto:info@example.com',
			'id' => 'customizer_repeater_footer_top_001'
		) ,
		array(
			'icon_value' => 'fas fa-question',
			'title' => esc_html__('Have Questions?', 'abiz') ,
			'subtitle' => esc_html__('Contact Us', 'abiz') ,
			'id' => 'customizer_repeater_footer_top_002',
		) ,
		array(
			'icon_value' => 'fas fa-phone',
			'title' => esc_html__('Call Us 24/7', 'abiz') ,
			'subtitle' => esc_html__('+123 456 7890', 'abiz') ,
			'link' => 'tell:+123 456 7890',
			'id' => 'customizer_repeater_footer_top_003',
		) ,
		array(
			'icon_value' => 'far fa-clock',
			'title' => esc_html__('Opening Hours', 'abiz') ,
			'subtitle' => esc_html__('Mon-Sat: 10- 6 Pm', 'abiz') ,
			'id' => 'customizer_repeater_footer_top_004',
		) ,
	)));
}	

/*******************************************************************************
 *  Get Started Notice
 *******************************************************************************/

add_action( 'wp_ajax_abiz_dismissed_notice_handler', 'abiz_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function abiz_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function abiz_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {
            // Added the class "notice-get-started-class" so jQuery pick it up and pass via AJAX,
            // and added "data-notice" attribute in order to track multiple / different notices
            // multiple dismissible notice states ?>
            <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <div class="abiz-getting-started-notice clearfix">
                    <div class="abiz-theme-screenshot">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'abiz' ); ?>" />
                    </div><!-- /.abiz-theme-screenshot -->
                    <div class="abiz-theme-notice-content">
                        <h2 class="abiz-notice-h2">
                            <?php
                        printf(
                        /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                            esc_html__( 'Welcome! Thank you for choosing %1$s!', 'abiz' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                        ?>
                        </h2>

                        <p class="plugin-install-notice"><?php echo sprintf(__('Install and activate <strong>Daddy Plus</strong> plugin for taking full advantage of all the features this theme has to offer.', 'abiz')) ?></p>

                        <a class="abiz-btn-get-started button button-primary button-hero abiz-button-padding" href="#" data-name="" data-slug="">
						<?php
                        printf(
                        /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                            esc_html__( 'Get started with %1$s', 'abiz' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                        ?>
						
						</a><span class="abiz-push-down">
                        <?php
                            /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                            printf(
                                'or %1$sCustomize theme%2$s</a></span>',
                                '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                                '</a>'
                            );
                        ?>
                    </div><!-- /.abiz-theme-notice-content -->
                </div>
            </div>
        <?php }
}

add_action( 'admin_notices', 'abiz_deprecated_hook_admin_notice' );

/*******************************************************************************
 *  Plugin Installer
 *******************************************************************************/

add_action( 'wp_ajax_install_act_plugin', 'abiz_admin_install_plugin' );

function abiz_admin_install_plugin() {
    /**
     * Install Plugin.
     */
    include_once ABSPATH . '/wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    if ( ! file_exists( WP_PLUGIN_DIR . '/daddy-plus' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'daddy-plus' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );

        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }

    // Activate plugin.
    if ( current_user_can( 'activate_plugin' ) ) {
        $result = activate_plugin( 'daddy-plus/daddy-plus.php' );
    }
}	
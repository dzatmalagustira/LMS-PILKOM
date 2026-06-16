<?php
/**
 * Customizer default options
 *
 * @package Theme Palace
 * @subpackage EduMag
 * @since EduMag 0.1
 * @return array An array of default values
 */

if ( ! function_exists( 'edumag_get_default_theme_options' ) ) :
	function edumag_get_default_theme_options() {
		$edumag_default_options = array(

			/*
			 * Homepage sections options
			 */

			// Featured Category
			'featured_category_enable'		=> 'disabled',
			'featured_category_content_type'=> 'category',

			// popular articles
			'popular_articles_enable'		=> 'disabled',
			'popular_articles_title'		=> 'Popular Articles',

			// search 
			'search_section_enable'		    => 'disabled',
			'search_section_button_text'	=> 'Find Courses',

			// latest news
			'latest_news_enable'			=> 'disabled',
			'latest_news_content_type' 		=> 'category',
			'latest_news_title' 			=> 'Latest News',

			// Blog Sections
			'blogs_section_enable'			=> 'disabled',
			'blogs_section_content_type'	=> 'category',

			/*
			 * Theme Options
			 */
			'theme_color'					=> 'blue',
			'site_layout'         			=> 'wide',
			'sidebar_position'         		=> 'right-sidebar',
			'long_excerpt_length'           => 25,
			'short_excerpt_length'          => 10,
			'read_more_text'		        => 'Read More >>',
			'breadcrumb_enable'         	=> true,
			'pagination_enable'         	=> true,
			'scroll_top_visible'        	=> true,
			'copyright_text' => 'Copyright &copy; [the-year] [site-link]',
			'reset_options'      			=> false,
			'enable_frontpage_content' 		=> true,
			'append_search'					=> true,
		);

		$output = apply_filters( 'edumag_default_theme_options', $edumag_default_options );
		// Sort array in ascending order, according to the key:
		if ( ! empty( $output ) ) {
			ksort( $output );
		}

		return $output;
	}
endif;
<?php

$prime_education_custom_css = "";

$prime_education_primary_color = get_theme_mod('prime_education_primary_color');
$prime_education_secondary_color = get_theme_mod('prime_education_secondary_color');

/*------------------ Primary Global Color -----------*/

if ($prime_education_primary_color) {
  $prime_education_custom_css .= ':root {';
  $prime_education_custom_css .= '--primary-color: ' . esc_attr($prime_education_primary_color) . ' !important;';
  $prime_education_custom_css .= '} ';
}

/*------------------ Secondary Global Color -----------*/

if ($prime_education_secondary_color) {
  $prime_education_custom_css .= ':root {';
  $prime_education_custom_css .= '--secondary-color: ' . esc_attr($prime_education_secondary_color) . ' !important;';
  $prime_education_custom_css .= '} ';
}

/*-------------------- Container Width-------------------*/

$prime_education_theme_width = get_theme_mod( 'prime_education_theme_width','full-width');

if($prime_education_theme_width == 'full-width'){
$prime_education_custom_css .='body{';
	$prime_education_custom_css .='max-width: 100% !important;';
$prime_education_custom_css .='}';
}else if($prime_education_theme_width == 'container'){
$prime_education_custom_css .='body{';
	$prime_education_custom_css .='width: 80% !important; padding-right: 15px; padding-left: 15px;  margin-right: auto !important; margin-left: auto !important;';
$prime_education_custom_css .='}';
}else if($prime_education_theme_width == 'container-fluid'){
$prime_education_custom_css .='body{';
	$prime_education_custom_css .='width: 95% !important;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$prime_education_custom_css .='}';
}

/*-------------------- Post Content Alignment-------------------*/

$prime_education_single_post_align = get_theme_mod( 'prime_education_single_post_align','left-align');

if($prime_education_single_post_align == 'left-align'){
$prime_education_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_education_custom_css .='text-align: left';
$prime_education_custom_css .='}';
}else if($prime_education_single_post_align == 'right-align'){
$prime_education_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_education_custom_css .='text-align: right';
$prime_education_custom_css .='}';
}else if($prime_education_single_post_align == 'center-align'){
$prime_education_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_education_custom_css .='text-align: center';
$prime_education_custom_css .='}';
}


/*-------------------- Scroll Top Alignment-------------------*/

$prime_education_scroll_top_alignment = get_theme_mod( 'prime_education_scroll_top_alignment','right-align');

if($prime_education_scroll_top_alignment == 'right-align'){
$prime_education_custom_css .='#button{';
	$prime_education_custom_css .='right: 5%;';
$prime_education_custom_css .='}';
}else if($prime_education_scroll_top_alignment == 'center-align'){
$prime_education_custom_css .='#button{';
	$prime_education_custom_css .='right:0; left:0; margin: 0 auto;';
$prime_education_custom_css .='}';
}else if($prime_education_scroll_top_alignment == 'left-align'){
$prime_education_custom_css .='#button{';
	$prime_education_custom_css .='left: 5%;';
$prime_education_custom_css .='}';
}

/*-------------------- Archive Page Pagination Alignment-------------------*/

$prime_education_archive_pagination_alignment = get_theme_mod( 'prime_education_archive_pagination_alignment','left-align');

if($prime_education_archive_pagination_alignment == 'right-align'){
$prime_education_custom_css .='.pagination{';
	$prime_education_custom_css .='justify-content: end;';
$prime_education_custom_css .='}';
}else if($prime_education_archive_pagination_alignment == 'center-align'){
$prime_education_custom_css .='.pagination{';
	$prime_education_custom_css .='justify-content: center;';
$prime_education_custom_css .='}';
}else if($prime_education_archive_pagination_alignment == 'left-align'){
$prime_education_custom_css .='.pagination{';
	$prime_education_custom_css .='justify-content: start;';
$prime_education_custom_css .='}';
}

/*-------------------- Scroll Top Responsive-------------------*/

$prime_education_resp_scroll_top = get_theme_mod( 'prime_education_resp_scroll_top',true);
if($prime_education_resp_scroll_top == true && get_theme_mod( 'prime_education_footer_scroll_to_top',true) != true){
	$prime_education_custom_css .='#button.show{';
		$prime_education_custom_css .='visibility:hidden !important;';
	$prime_education_custom_css .='} ';
}
if($prime_education_resp_scroll_top == true){
	$prime_education_custom_css .='@media screen and (max-width:575px) {';
	$prime_education_custom_css .='#button.show{';
		$prime_education_custom_css .='visibility:visible !important;';
	$prime_education_custom_css .='} }';
}else if($prime_education_resp_scroll_top == false){
	$prime_education_custom_css .='@media screen and (max-width:575px){';
	$prime_education_custom_css .='#button.show{';
		$prime_education_custom_css .='visibility:hidden !important;';
	$prime_education_custom_css .='} }';
}

/*-------------------- Preloader Responsive-------------------*/

	$prime_education_resp_loader = get_theme_mod('prime_education_resp_loader',false);
	if($prime_education_resp_loader == true && get_theme_mod('prime_education_preloader_setting',false) == false){
		$prime_education_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$prime_education_custom_css .='display:none !important;';
		$prime_education_custom_css .='} }';
	}

	if($prime_education_resp_loader == false){
		$prime_education_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$prime_education_custom_css .='display:none !important;';
		$prime_education_custom_css .='} }';
	}


	// Scroll to top button shape 

	$prime_education_scroll_border_radius = get_theme_mod( 'prime_education_scroll_to_top_radius','curved-box');
    if($prime_education_scroll_border_radius == 'box'){
		$prime_education_custom_css .='#button{';
			$prime_education_custom_css .='border-radius: 0px;';
		$prime_education_custom_css .='}';
	}else if($prime_education_scroll_border_radius == 'curved-box'){
		$prime_education_custom_css .='#button{';
			$prime_education_custom_css .='border-radius: 4px;';
		$prime_education_custom_css .='}';
	}
	else if($prime_education_scroll_border_radius == 'circle'){
		$prime_education_custom_css .='#button{';
			$prime_education_custom_css .='border-radius: 50%;';
		$prime_education_custom_css .='}';
	}

  // Footer Background Image Attatchment 

	$prime_education_footer_attatchment = get_theme_mod( 'prime_education_background_attatchment','scroll');
	if($prime_education_footer_attatchment == 'fixed'){
		$prime_education_custom_css .='.site-footer{';
			$prime_education_custom_css .='background-attachment: fixed;';
		$prime_education_custom_css .='}';
	}elseif ($prime_education_footer_attatchment == 'scroll'){
		$prime_education_custom_css .='.site-footer{';
			$prime_education_custom_css .='background-attachment: scroll;';
		$prime_education_custom_css .='}';
	}

  // Menu Hover Style	

	$prime_education_menus_item = get_theme_mod( 'prime_education_menus_style','None');
    if($prime_education_menus_item == 'None'){
		$prime_education_custom_css .='#site-navigation .menu ul li a:hover, .main-navigation .menu li a:hover{';
			$prime_education_custom_css .='';
		$prime_education_custom_css .='}';
	}else if($prime_education_menus_item == 'Zoom In'){
		$prime_education_custom_css .='#site-navigation .menu ul li a:hover, .main-navigation .menu li a:hover{';
			$prime_education_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$prime_education_custom_css .='}';
	}	

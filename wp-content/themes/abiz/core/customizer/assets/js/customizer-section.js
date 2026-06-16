function abizshomesettingsscroll(section_id) {
    var scroll_section_id = "slider-section";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch (section_id) {
        case 'accordion-section-info_section_set':
            scroll_section_id = "info-section";
            break;

        case 'accordion-section-service_section_set':
            scroll_section_id = "service-section";
            break;

		case 'accordion-section-marquee_section_set':
			scroll_section_id = "abiz-marquee-section";
			break;	

		 case 'accordion-section-features2_section_set':
            scroll_section_id = "abiz-features-section-2";
            break;
			
        case 'accordion-section-blog_section_set':
            scroll_section_id = "abiz-blog-section";
            break;
    }

    if ($contents.find('#' + scroll_section_id).length > 0) {
        $contents.find("html, body").animate({
            scrollTop: $contents.find("#" + scroll_section_id).offset().top
        }, 1000);
    }
}

jQuery('body').on('click', '#sub-accordion-panel-abiz_frontpage_sections .control-subsection .accordion-section-title', function(event) {
    var section_id = jQuery(this).parent('.control-subsection').attr('id');
    abizshomesettingsscroll(section_id);
});
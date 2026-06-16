/**
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
(function($) {
    // Site title and description.
    wp.customize('blogname', function(value) {
        value.bind(function(to) {
            $('.site-title').text(to);
        });
    });
    wp.customize('blogdescription', function(value) {
        value.bind(function(to) {
            $('.site-description').text(to);
        });
    });

    // Header text color.
    wp.customize('header_textcolor', function(value) {
        value.bind(function(to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $('.site-title, .site-description').css({
                    'clip': 'auto',
                    'position': 'relative'
                });
                $('.site-title, .site-description').css({
                    'color': to
                });
            }
        });
    });

    $(document).ready(function($) {
        $('input[data-input-type]').on('input change', function() {
            var val = $(this).val();
            $(this).prev('.cs-range-value').html(val);
            $(this).val(val);
        });
    })


    // logo_size
	wp.customize('logo_size', function(value) {
        value.bind(function(logo_size) {
            jQuery('.logo img, .mobile-logo img').css('max-width', logo_size + 'px');
        });
    });

    // site_ttl_font_size
	wp.customize('site_ttl_font_size', function(value) {
        value.bind(function(site_ttl_font_size) {
            jQuery('h4.site-title').css('font-size', site_ttl_font_size + 'px');
        });
    });
	
    // site_desc_font_size
	wp.customize('site_desc_font_size', function(value) {
        value.bind(function(site_desc_font_size) {
            jQuery('.site-description').css('font-size', site_desc_font_size + 'px');
        });
    });


    //hdr_info1_title
    wp.customize(
        'hdr_info1_title',
        function(value) {
            value.bind(
                function(newval) {
                    $('.above-header .info1 h6').text(newval);
                }
            );
        }
    );

    //hdr_info2_title
    wp.customize(
        'hdr_info2_title',
        function(value) {
            value.bind(
                function(newval) {
                    $('.main-header .info2 h6').text(newval);
                }
            );
        }
    );

    //hdr_info3_title
    wp.customize(
        'hdr_info3_title',
        function(value) {
            value.bind(
                function(newval) {
                    $('.main-header .info3 h6').text(newval);
                }
            );
        }
    );

    //hdr_btn_label
    wp.customize(
        'hdr_btn_label',
        function(value) {
            value.bind(
                function(newval) {
                    $('.main-navigation .button-area a').text(newval);
                }
            );
        }
    );

    //service_ttl
    wp.customize(
        'service_ttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-service-main  .theme-main-heading .title').text(newval);
                }
            );
        }
    );

    //service_subttl
    wp.customize(
        'service_subttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-service-main  .theme-main-heading h2').text(newval);
                }
            );
        }
    );

    //service_desc
    wp.customize(
        'service_desc',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-service-main  .theme-main-heading p').text(newval);
                }
            );
        }
    );

	//features2_ttl
    wp.customize(
        'features2_ttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-features-section-2  .theme-main-heading .title').text(newval);
                }
            );
        }
    );

    //features2_subttl
    wp.customize(
        'features2_subttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-features-section-2  .theme-main-heading h2').text(newval);
                }
            );
        }
    );

    //features2_desc
    wp.customize(
        'features2_desc',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-features-section-2  .theme-main-heading p').text(newval);
                }
            );
        }
    );
	
	//blog_ttl
    wp.customize(
        'blog_ttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-blog-main  .theme-main-heading .title').text(newval);
                }
            );
        }
    );

    //blog_subttl
    wp.customize(
        'blog_subttl',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-blog-main  .theme-main-heading h2').text(newval);
                }
            );
        }
    );

    //blog_desc
    wp.customize(
        'blog_desc',
        function(value) {
            value.bind(
                function(newval) {
                    $('.abiz-blog-main  .theme-main-heading p').text(newval);
                }
            );
        }
    );
	
    // font size
	wp.customize('abiz_body_font_size', function(value) {
        value.bind(function(abiz_body_font_size) {
            jQuery('body').css('font-size', abiz_body_font_size + 'px');
        });
    });
	
    // font weight
    wp.customize('abiz_body_font_weight', function(value) {
        value.bind(function(font_weight) {
            jQuery('body').css('font-weight', font_weight);
        });
    });

    // font style
    wp.customize('abiz_body_font_style', function(value) {
        value.bind(function(font_style) {
            jQuery('body').css('font-style', font_style);
        });
    });

    // Text Decoration
    wp.customize('abiz_body_txt_decoration', function(value) {
        value.bind(function(decoration) {
            jQuery('body, a').css('text-decoration', decoration);
        });
    });
	
    // text tranform
    wp.customize('abiz_body_text_transform', function(value) {
        value.bind(function(text_tranform) {
            jQuery('body').css('text-transform', text_tranform);
        });
    });

})(jQuery);
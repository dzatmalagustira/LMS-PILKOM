<?php
/**
 * Help Panel.
 *
 * @package prime_education
 */

$prime_education_import_done = get_option( 'prime_education_demo_import_done' );
$prime_education_button_text = $prime_education_import_done
	? __( 'View Site', 'prime-education' )
	: __( 'Start Demo Import', 'prime-education' );
$prime_education_button_link = $prime_education_import_done
	? home_url( '/' )
	: admin_url( 'themes.php?page=primeeducation-wizard' );
?>
<div id="help-panel" class="panel-left visible">
    <div class="panel-aside active">
        <div class="demo-content">
            <div class="demo-info">
                <h4><?php esc_html_e( 'DEMO CONTENT IMPORTER', 'prime-education' ); ?></h4>
                <p><?php esc_html_e('The Demo Content Importer helps you quickly set up your website to look exactly like the theme demo. Instead of building pages from scratch, you can import pre-designed layouts, pages, menus, images, and basic settings in just a few clicks.','prime-education'); ?></p>
                <a class="button button-primary first-color" style="text-transform: capitalize" href="<?php echo esc_url( $prime_education_button_link ); ?>" title="<?php echo esc_attr( $prime_education_button_text ); ?>"
                    <?php echo $prime_education_import_done ? 'target="_blank"' : ''; ?>>
                    <?php echo esc_html( $prime_education_button_text ); ?>
                </a>
            </div>
            <div class="demo-img">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" alt="<?php echo esc_attr( 'screenshot', 'prime-education'); ?>"/>
            </div>
        </div>
    </div>

    <div class="panel-aside" >
        <h4><?php esc_html_e( 'USEFUL LINKS', 'prime-education' ); ?></h4>
        <p><?php esc_html_e( 'Find everything you need to set up, customize, and manage your website with ease. These helpful resources are designed to guide you at every step, from installation to advanced customization.', 'prime-education' ); ?></p>
        <div class="useful-links">
            <a class="button button-primary second-color" href="<?php echo esc_url( PRIME_EDUCATION_DEMO_URL ); ?>" title="<?php esc_attr_e( 'Live Demo', 'prime-education' ); ?>" target="_blank">
                <?php esc_html_e( 'Live Demo', 'prime-education' ); ?>
            </a>
            <a class="button button-primary first-color" href="<?php echo esc_url( PRIME_EDUCATION_FREE_DOC_URL ); ?>" title="<?php esc_attr_e( 'Documentation', 'prime-education' ); ?>" target="_blank">
                <?php esc_html_e( 'Documentation', 'prime-education' ); ?>
            </a>
            <a class="button button-primary second-color" href="<?php echo esc_url( PRIME_EDUCATION_URL ); ?>" title="<?php esc_attr_e( 'Get Premium', 'prime-education' ); ?>" target="_blank">
                <?php esc_html_e( 'Get Premium', 'prime-education' ); ?>
            </a>
            <a class="button button-primary first-color" href="<?php echo esc_url( PRIME_EDUCATION_BUNDLE_URL ); ?>" title="<?php esc_attr_e( 'Get Bundle - 60+ Themes', 'prime-education' ); ?>" target="_blank">
                <?php esc_html_e( 'Get Bundle - 60+ Themes', 'prime-education' ); ?>
            </a>
        </div>
    </div>

    <div class="panel-aside" >
        <h4><?php esc_html_e( 'REVIEW', 'prime-education' ); ?></h4>
        <p><?php esc_html_e( 'If you have a moment, please consider leaving a rating and short review. It only takes a minute, and your support means a lot to us.', 'prime-education' ); ?></p>
        <a class="button button-primary first-color" href="<?php echo esc_url( PRIME_EDUCATION_REVIEW_URL ); ?>" title="<?php esc_attr_e( 'Visit the Review', 'prime-education' ); ?>" target="_blank">
            <?php esc_html_e( 'Leave a Review', 'prime-education' ); ?>
        </a>
    </div>
    
    <div class="panel-aside">
        <h4><?php esc_html_e( 'CONTACT SUPPORT', 'prime-education' ); ?></h4>
        <p>
            <?php esc_html_e( 'Thank you for choosing Prime Education! We appreciate your interest in our theme and are here to assist you with any support you may need.', 'prime-education' ); ?></p>
        <a class="button button-primary first-color" href="<?php echo esc_url( PRIME_EDUCATION_SUPPORT_URL ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'prime-education' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'prime-education' ); ?>
        </a>
    </div>
</div>
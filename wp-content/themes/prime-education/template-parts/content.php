<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prime_education
 */
$prime_education_heading_setting  = get_theme_mod( 'prime_education_post_heading_setting' , true );
$prime_education_meta_setting  = get_theme_mod( 'prime_education_post_meta_setting' , true );
$prime_education_image_setting  = get_theme_mod( 'prime_education_post_image_setting' , true );
$prime_education_content_setting  = get_theme_mod( 'prime_education_post_content_setting' , true );
$prime_education_read_more_setting = get_theme_mod( 'prime_education_read_more_setting' , true );
$prime_education_read_more_text = get_theme_mod( 'prime_education_read_more_text', __( 'Read More', 'prime-education' ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
    $prime_education_meta_order = get_theme_mod('prime_education_blog_meta_order', array('heading', 'author', 'featured-image', 'content', 'button'));
    
    foreach ($prime_education_meta_order as $prime_education_order) :
        if ('heading' === $prime_education_order) :
            if ($prime_education_heading_setting) { ?>
                <header class="entry-header">
                    <?php if (is_single()) {
                        the_title('<h1 class="entry-title" itemprop="headline">', '</h1>');
                    } else {
                        the_title('<h2 class="entry-title" itemprop="headline"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    } ?>
                </header>
            <?php }
        endif;

        if ('author' === $prime_education_order) :
            if ('post' === get_post_type() && $prime_education_meta_setting) { ?>
                <div class="entry-meta">
                    <?php prime_education_posted_on(); ?>
                </div>
            <?php }
        endif;

        if ('featured-image' === $prime_education_order) :
            if ($prime_education_image_setting) { ?>
                    <?php echo (!is_single()) 
                        ? '<a href="' . esc_url( get_the_permalink() ) . '" class="post-thumbnail wow fadeInUp" data-wow-delay="0.2s">'
                        : '<div class="post-thumbnail wow fadeInUp" data-wow-delay="0.2s">';
                    ?>
                    <?php if (has_post_thumbnail()) {
                        if (is_active_sidebar('right-sidebar')) {
                            the_post_thumbnail('prime-education-with-sidebar', array('itemprop' => 'image'));
                        } else {
                            the_post_thumbnail('prime-education-without-sidebar', array('itemprop' => 'image'));
                        }
                    } else { ?>
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/default-header.png'); ?>">
                    <?php } ?>
                <?php echo (!is_single()) ? '</a>' : '</div>'; ?>
            <?php }
        endif;

        if ('content' === $prime_education_order) :
            if ($prime_education_content_setting) { ?>
                <div class="entry-content" itemprop="text">
                    <?php if (is_single()) {
                        the_content(
                            sprintf(
                                wp_kses(
                                    __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'prime-education'),
                                    array('span' => array('class' => array()))
                                ),
                                '<span class="screen-reader-text">"' . get_the_title() . '"</span>'
                            )
                        );
                    } else {
                        the_excerpt();
                    }
                    
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'prime-education'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            <?php }
        endif;

        if ('button' === $prime_education_order) :
            if (!is_single() && $prime_education_read_more_setting) { ?>
                <div class="read-more-button">
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more-button"><?php echo esc_html($prime_education_read_more_text); ?></a>
                </div>
            <?php }
        endif;
    endforeach; ?>
</article>
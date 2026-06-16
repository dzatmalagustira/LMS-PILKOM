<?php
/**
 * The default template for displaying content
 */
$blog_archive_ordering = get_theme_mod( 'blog_archive_ordering', abiz_get_default_option( 'blog_archive_ordering' )); 
$enable_blog_excerpt = get_theme_mod( 'enable_blog_excerpt', abiz_get_default_option( 'enable_blog_excerpt' ));  
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-inner'); ?>>
	<div class="blog-item-current">
		<div class="inner-box">
			<div class="blog-header">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="blog-thumb">
						<div class="post-thumb blog-img">
							<div class="post-thumb-inner">
								<div class="post-thumb">
									<a href="<?php echo esc_url(get_permalink());?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="post-thumb blog-img">
							<div class="post-thumb-inner">
								<div class="post-thumb">
									<a href="<?php echo esc_url(get_permalink());?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>	
				<div class="post-category <?php if ( !has_post_thumbnail() ) : esc_attr_e('not-thumb','abiz'); endif; ?>">
					<i class="fas fa-folder"></i>
					<a href="<?php echo esc_url( get_permalink() ); ?>" rel="category tag"><?php the_category(' , '); ?></a>
				</div>
			</div>
			<div class="blog-post-content">
				<?php foreach ( $blog_archive_ordering as $blog_data_order ) : ?>
				<?php if ( 'meta' === $blog_data_order ) : ?>	
				<ul class="post-meta list-item">
					<li class="post-item author">
						<i class="fas fa-user"></i>
						<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>">
						<?php esc_html(the_author()); ?></a>
					</li>
					
					<li class="post-item date">
						<i class="fas fa-calendar-days"></i>
						<?php echo esc_html(get_the_date('d M Y')); ?></a>
					</li>
					<li class="post-item comments">
						<i class="fa fa-comment"></i>
						<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="comments-count">
						<?php echo esc_html(get_comments_number($post->ID)); ?> <?php  esc_html_e('Comments','abiz'); ?></a>
					</li>
				</ul>
				<?php 
					elseif ( 'title' === $blog_data_order ) :
						if ( is_single() ) :
							
							the_title('<h4 class="post-title">', '</h4>' );
							
							else:
						
							the_title( sprintf( '<h4 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
						
						endif; 
					elseif ( 'content' === $blog_data_order ) : 
					 if($enable_blog_excerpt == '1' && !is_single()):
							the_excerpt();
							abiz_blog_excerpt_button();
						else:
							the_content( 
									sprintf( 
										__( 'Read More', 'abiz' ), 
										'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
									) 
								);
							endif;
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abiz' ),
								'after'  => '</div>',
							) );
					endif;
					endforeach;					
				?>
			</div>
		</div>
	</div>
</article>
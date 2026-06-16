<?php
/**
 * Template part for displaying author Meta
 */
?>
<div class="col">
	<article class="blog-post author-details">
		<div class="media">
			<?php
				$abiz_author_description = get_the_author_meta( 'description' );
				$abiz_author_id          = get_the_author_meta( 'ID' );
				$abiz_current_user_id    = is_user_logged_in() ? wp_get_current_user()->ID : false;
			?>
			<div class="auth-mata">
				<?php echo get_avatar( get_the_author_meta('ID'), 200); ?>
			</div>
			<div class="media-body author-meta-det">
				<h5><?php the_author_link(); ?></h5>
				
				<?php
					if ( '' === $abiz_author_description ) {
						if ( $abiz_current_user_id && $abiz_author_id === $abiz_current_user_id ) { ?>
						<p>
							<?php 
							// Translators: %1$s: <a> tag. %2$s: </a>.
							printf( wp_kses_post( __( 'You haven&rsquo;t entered your Biographical Information yet. %1$sEdit your Profile%2$s now.', 'abiz' ) ), '<br/><a href="' . esc_url( get_edit_user_link( $abiz_current_user_id ) ) . '">', '</a>' );
							?>
							</p>
						<?php }
					} else {
					?>
					<p><?php echo wp_kses_post( $abiz_author_description ); ?></p>
					<?php	
					}
				?>
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>" class="btn btn-white"><?php esc_html_e('View All Post','abiz'); ?></a>
			</div>
		</div>  
	</article>
</div>
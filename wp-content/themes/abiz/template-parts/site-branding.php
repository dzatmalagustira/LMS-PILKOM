<?php
/**
 * Template part for displaying site branding.
 */
if(has_custom_logo())
	{	
		the_custom_logo();
	}
	else { 
	?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<h4 class="site-title">
			<?php 
				echo esc_html(bloginfo('name'));
			?>
		</h4>
	</a>	
<?php 						
	}
?>
<?php
	$abiz_description = get_bloginfo( 'description');
	if ($abiz_description) : ?>
		<p class="site-description"><?php echo esc_html($abiz_description); ?></p>
<?php endif;
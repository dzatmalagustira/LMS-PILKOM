</div>
<footer id="footer-section" class="footer-section main-footer">
	 <?php get_template_part('template-parts/footer','top'); ?>
	 <?php get_template_part('template-parts/footer','widget'); ?>
	 <?php get_template_part('template-parts/footer','copyright'); ?>       
</footer>
<?php 
$enable_scroller	=	get_theme_mod('enable_scroller',abiz_get_default_option( 'enable_scroller' ));
$top_scroller_icon	=	get_theme_mod('top_scroller_icon',abiz_get_default_option( 'top_scroller_icon' ));
?>		
<?php if ($enable_scroller == '1') { ?>
	<button type="button" class="scrollingUp scrolling-btn" aria-label="<?php esc_attr_e('scrollingUp','abiz'); ?>"><i class="<?php echo esc_attr($top_scroller_icon); ?>"></i><svg height="46" width="46"> <circle cx="23" cy="23" r="22" /></svg></button>
<?php } ?>	
<?php wp_footer(); ?>
</body>
</html>

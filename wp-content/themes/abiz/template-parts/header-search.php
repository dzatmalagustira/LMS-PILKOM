<?php
/**
 * Template part for displaying Header Search.
 */
$enable_nav_search = get_theme_mod( 'enable_nav_search',abiz_get_default_option( 'enable_nav_search' )); 
if($enable_nav_search == '1') { ?>
	<li class="search-button">
		<button type="button" id="header-search-toggle" class="header-search-toggle" aria-expanded="false" aria-label="<?php esc_attr_e('Search Popup','abiz'); ?>"><i class="fa fa-search"></i></button>
		<div class="header-search-popup">
			<div class="header-search-flex">
				<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'abiz' ); ?>">
					<input type="search" class="form-control header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'abiz' ); ?>" name="s" id="search">
					<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
				</form>
				<button type="button" id="header-search-close" class="close-style header-search-close" aria-label="<?php esc_attr_e('Search Popup Close','abiz'); ?>"></button>
			</div>
		</div>
	</li>
<?php }
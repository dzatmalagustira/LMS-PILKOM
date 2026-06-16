<?php
/**
 * Template part for displaying Header Cart.
 */
$enable_cart  = get_theme_mod( 'enable_cart',abiz_get_default_option( 'enable_cart' )); 
if ( $enable_cart == '1' && class_exists( 'WooCommerce' ) ) { ?>
	<li class="cart-wrapper">
		<button type="button" class="cart-icon-wrap header-cart">
			<i class="fa fa-shopping-bag"></i>
			<?php 
				$count = WC()->cart->cart_contents_count;
				$cart_url = wc_get_cart_url();
				
				if ( $count > 0 ) {
				?>
					 <span><?php echo esc_html( $count ); ?></span>
				<?php 
				}
				else {
					?>
					<span><?php esc_html_e('0','abiz'); ?></span>
					<?php 
				}
			?>
		</button>
		<div class="shopping-cart">
			<ul class="shopping-cart-items">
				<?php get_template_part('woocommerce/cart/mini','cart'); ?>
			</ul>
		</div>
	</li>
<?php }
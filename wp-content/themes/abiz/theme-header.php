<header id="main-header" class="main-header">
	<?php  abiz_top_header(); ?>	
	<div class="navigation-wrapper">
		<div class="main-navigation-area d-none d-lg-block">
			<div class="main-navigation <?php echo esc_attr(abiz_site_header_sticky()); ?> ">
				<div class="container">
					<div class="row">
						<div class="col-3 my-auto">
							<div class="logo">
							  <?php get_template_part('template-parts/site','branding'); ?>
							</div>
						</div>
						<div class="col-9 my-auto">
							<nav class="navbar-area">
								<div class="main-navbar">
								   <?php get_template_part('template-parts/site','main-nav'); ?>                           
								</div>
								<div class="main-menu-right">
									<ul class="menu-right-list">
										<?php get_template_part('template-parts/header','cart'); ?>
										<?php get_template_part('template-parts/header','search'); ?>
										<?php get_template_part('template-parts/header','account'); ?>
										<?php get_template_part('template-parts/header','button'); ?>
									</ul>                            
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-mobile-nav <?php echo esc_attr(abiz_site_header_sticky()); ?>"> 
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-mobile-menu">
							<div class="mobile-logo">
								<div class="logo">
								   <?php get_template_part('template-parts/site','branding'); ?>
								</div>
							</div>
							<div class="menu-collapse-wrap">
								<div class="main-menu-right">
									<ul class="menu-right-list">
										<?php get_template_part('template-parts/header','search'); ?>
										<?php get_template_part('template-parts/header','account'); ?>
										<?php get_template_part('template-parts/header','button'); ?>
									</ul>                            
								</div>
								<div class="hamburger-menu">
									<button type="button" class="menu-collapsed" aria-label="<?php esc_attr_e('Menu Collaped','abiz'); ?>">
										<div class="top-bun"></div>
										<div class="meat"></div>
										<div class="bottom-bun"></div>
									</button>
								</div>
							</div>
							<div class="main-mobile-wrapper">
								<div id="mobile-menu-build" class="main-mobile-build">
									<button type="button" class="header-close-menu close-style" aria-label="<?php esc_attr_e('Header Close Menu','abiz'); ?>"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>        
		</div>
	</div>
</header>
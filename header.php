<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HPM_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Add Lottie Player library -->
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site" >
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hpm-theme' ); ?></a>
	
	<?php if (get_field('site_header', 'option')): ?>
		<div class="top-header">
				<div class="container">
						<div class="top-header__content">
								<?php echo get_field('site_header', 'option'); ?>
						</div>
				</div>
		</div>
	<?php endif; ?>

	<header id="masthead" class="site-header side-gutter">
		<div class="container">
			<div class="site-header__inner">
				<div class="site-branding">
					<a href="/" class="custom-logo-link" rel="home" aria-current="page">
						<?php
						if (has_custom_logo()) {
							the_custom_logo();
						} else {
						?>
							<h2 class="logo-title">
								<?php echo get_bloginfo(); ?>
							</h2>
							<h3 class="logo-subtitle">
								<?php echo get_bloginfo('description'); ?>
							</h3>
						<?php
						}
						?>
					</a>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle site-header__nav-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
					<?php
					wp_nav_menu(
						array(
							'menu' => 'Main Menu',
							'menu_id'        => 'main-menu',
						)
					);
					?>
				</nav>
				<div class="menu-btn-box">
					<?php if (class_exists('WooCommerce')) : ?>
						<a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon-link">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="9" cy="21" r="1"></circle>
								<circle cx="20" cy="21" r="1"></circle>
								<path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
							</svg>
							<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						</a>
					<?php endif; ?>
					<a class="menu-btn" href="/request-a-demo/">
						Let's Talk
					</a>
				</div>
				<a href="#open-menu" class="mobile-menu__button">
					<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" width="32px" height="32px"><path d="M 4 7 L 4 9 L 28 9 L 28 7 Z M 4 15 L 4 17 L 28 17 L 28 15 Z M 4 23 L 4 25 L 28 25 L 28 23 Z"/></svg>
				</a>
				
			</div>
		</div>
	</header>

	<?php //overlay-active ?>
	<button class="mobile-menu-overlay"></button>
	<?php //menu-open ?>
	<div id="mobile-menu" class="mobile-menu">
		<div class="mobile-menu__inner">
			<div class="mobile-menu__header">
				<div class="mobile-menu__header-buttons">
					<button class="close-button" type="button">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
						</span>
					</button>
				</div>
			</div>
			<div class="mobile-menu__content side-gutter">
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'mobile-menu',
							'container_class' => 'mobile-menu',
						)
					);
				?>
			</div>
		</div>
	</div>

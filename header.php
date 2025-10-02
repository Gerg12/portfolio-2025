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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
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
	<!-- Header & Navigation -->
	<header id="masthead" class="site-header">
		<div class="container">
				<nav aria-label="Main navigation">
						<a href="/" class="logo" aria-label="Homepage">dev<span class="text-primary">greg</span>.com</a>
						<div id="main-menu">
							<?php
								wp_nav_menu(
									array(
										'menu' => 'Main Menu',
									)
								);
							?>
							<a href="mailto:thegregoryjohnson@gmail.com" target="_blank" class="nav-contact-button btn btn-primary">Contact Me</a>
						</div>
						<button class="mobile-menu-button" id="mobile-menu-button" aria-label="Open Menu" aria-expanded="false" aria-controls="mobile-menu">
									<svg aria-hidden="true" class="w-6 h-6" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
						</button>
				</nav>
		</div>
		<!-- <ul class="mobile-menu list-reset is-active" id="mobile-menu">
				<li><a href="#services">Services</a></li>
				<li><a href="#portfolio">Work</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact" class="btn btn-primary" style="margin-top: 1rem; width: 100%;">Contact Me</a></li>
		</ul> -->
		<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'mobile-menu',
							'menu_class'      => 'mobile-menu list-reset',
							'menu_id'         => 'mobile-menu'
						)
					);
				?>
				<a href="mailto:thegregoryjohnson@gmail.com" target="_blank" class="mobile-contact-button btn btn-primary" style="margin-top: 1rem; width: 100%;">Contact Me</a>
	</header>

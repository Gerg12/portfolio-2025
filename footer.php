<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HPM_Theme
 */

?>

	<footer id="colophon" class="site-footer" >
		<div class="container">
			<div class="site-footer__inner">
				<div class="site-footer__column site-footer__column-1 footer-logo__column">
					<a href="/" class="custom-logo-link" rel="home" aria-current="page">
						<?php
							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
							if ($logo) {
								echo '<img width="125" height="125" src="' . esc_url($logo[0]) . '" class="custom-logo" alt="' . get_bloginfo('name') . '" decoding="async">';
							}
						?>
					</a>
					<div class="footer-social__icon-box">
						<a href="#twitter">
							<span class="icon-box icon-twitter"></span>
						</a>
						<a href="#linkedin">
							<span class="icon-box icon-linkedin"></span>
						</a>
					</div>
				</div>
				<div class="site-footer__column footer-social__column">
					<div class="footer-social__column--inner">
						<div class="footer-social__menu-wrapper">
							<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'footer-menu',
										'container_class' => 'footer-menu',
									)
								);
							?>
						</div>
						<div class="footer-social__icons-wrapper">
							<div class="footer-cert">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer-logo.webp" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-footer__bottom">
			<p>&copy; <?php echo date('Y'); ?> HPM Theme, Inc. All rights reserved</p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>

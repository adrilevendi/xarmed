<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xarmed
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'xarmed'); ?></a>

		<header id="masthead" class="site-header">
			<div class="nav-wrapper">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'xarmed'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'list-inline'
						)
					);
					?>

					<div class="menu-toggler" id="menuToggler">
						<div class="menu-toggler__inner">
							<div class="menu-toggler__line"></div>
						</div>
						<div class="menu-toggler__inner">
							<div class="menu-toggler__line"></div>
						</div>
					</div>
			</div>

			</nav><!-- #site-navigation -->



		</header><!-- #masthead -->
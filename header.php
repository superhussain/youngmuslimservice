<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package yms
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><php esc_html_e( 'Skip to content', 'yms' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php 
	          $header_logo = get_field('header_logo');
	          if (!empty($header_logo)) { ?>
	            <img src="<?php echo $header_logo['url']; ?>" alt="Young Muslim Service" class="site-logo" />
	        <?php } else { ?>
		        <img src="<?php echo site_url() . '/wp-content/uploads/2017/02/logo-wide-mixed.png'; ?>" alt="Young Muslim Service" class="site-logo" />
	        <?php } ?>
				</a>
				<div class="hamburger-menu">
		      <div class="bar"></div>
		    </div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><php esc_html_e( 'Primary Menu', 'yms' ); ?></button> -->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

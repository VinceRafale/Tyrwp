<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Orienteringsklubben Tyr, Karlstad/Hammarö
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'tyr' ); ?></h1>
				<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'tyr' ); ?></a> -->

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
			<?php if ( get_header_image() ) : ?>
			<div class="featured" style=" background-image: url(<?php header_image(); ?>), -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #df5c27), color-stop(100%, #d9423d));
background-image: url(<?php header_image(); ?>), -webkit-linear-gradient(#df5c27, #d9423d);
background-image: url(<?php header_image(); ?>), -moz-linear-gradient(#df5c27, #d9423d);
background-image: url(<?php header_image(); ?>), -o-linear-gradient(#df5c27, #d9423d);
background-image: url(<?php header_image(); ?>), linear-gradient(#df5c27, #d9423d);">
			</div>
			<?php endif; // End header image check. ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

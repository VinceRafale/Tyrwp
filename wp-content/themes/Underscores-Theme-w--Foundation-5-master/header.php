<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package foundation5_s
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'before' ); ?>

<div class="row">
	<div class="columns">

		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => '', 'items_wrap' => '<ul id="%1$s" class="inline-list %2$s">%3$s</ul>', 'fallback_cb' => 'default_menu' ) ); ?>
		</nav>

		<hr>

	</div>
</div>


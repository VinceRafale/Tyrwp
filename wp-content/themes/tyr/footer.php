<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Orienteringsklubben Tyr, Karlstad/Hammarö
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'tyr' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'tyr' ), 'Orienteringsklubben Tyr, Karlstad/Hammarö', '<a href="http://hollowell.se" rel="designer">William Hollowell</a>' ); ?>
			<br>
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
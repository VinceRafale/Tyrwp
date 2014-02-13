<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package underfoundation
 */

get_header(); ?>
<div id="content-page" class="12-medium columns">
    <div class="row content-main">
		<main id="main" class="medium-8 columns" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php underfoundation_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

		 <nav id="site-navigation" class="medium-4 columns" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'underfoundation' ); ?></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
      </div><!-- content-main -->

<?php  get_sidebar(); ?>
  </div> <!-- content-page -->
<?php  get_footer(); ?>

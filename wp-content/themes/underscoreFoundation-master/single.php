<?php
/**
 * The Template for displaying all single posts.
 *
 * @package underfoundation
 */

get_header(); ?>


		<main id="main" class="medium-12 columns" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php underfoundation_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
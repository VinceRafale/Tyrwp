<?php
/**
 * The Sidebar containing the main widget areas.
 *   <div class="row sidebar">

 * @package underfoundation
 */
?>
	<div id="secondary" class="row widget-area" role="complementary">
		<?php //do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

			<aside id="search" class="medium-4 columns widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="medium-4 columns widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'underfoundation' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="medium-4 columns widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'underfoundation' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
  </div>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class = "side-main-container">

			<main id="main" class="site-main-single" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class = "blogpost-reel"> <?php get_template_part( 'template-parts/content-product-single'); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
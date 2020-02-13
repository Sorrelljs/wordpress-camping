<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class = "side-main-container">

			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class = "blogpost-reel"> <?php
				
							get_template_part( 'template-parts/content', 'blogpost' );
						?>
					<p class = "read-more-btn-container">
						<a href=<?php echo esc_url (get_permalink() ) ?> class="read-more-btn">Read more →</a>
					</p>

			</div>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>


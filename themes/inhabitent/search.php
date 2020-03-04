<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	
	
<div class = "side-main-container">
			<main id="main" class="site-main-search" role="main">

			<!-- <?php the_title(); ?> -->

		<?php if ( have_posts() ) : ?>

			<header class="page-header-search">
				<h1 class="page-title-search"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class = "Test123"> <?php get_template_part( 'template-parts/content', 'search' ); ?> </p>
				
				<p class = "read-more-btn-container1234">
								<a href = "<?php echo get_permalink(); ?>" class="read-more-btn123">Read entry</a>
						</p>
			<?php endwhile; ?>
			

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sdebar(); ?>
<?php get_footer(); ?>

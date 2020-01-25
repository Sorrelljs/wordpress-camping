<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts() ) : ?>

			<header class="page-header999">

			<?php
				$taxonomy = get_queried_object();
			?>
				<h1 class="page-title"><?php echo $taxonomy->name;?></h1>
					<p class= "taxonomy555333"><?php echo $taxonomy->description;?></p>
			</header>

            
            

            <?php /* Start the Loop */ ?>
            <section class = "content-container">
            <div class="grid-container">
				<div class="grid-container-wrapper123">
					<?php while (have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content-product' );
						?>

					<?php endwhile; ?>
				</div>
            </div>
        </section>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
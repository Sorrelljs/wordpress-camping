<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class = whole-content-block>


<?php $taxonmies = get_terms('product_type');?>
<?php if ( have_posts() ) : ?>
	
	<header class="page-header">
		
		<h2 class = "header-shop-tax">shop stuff</h2> 
		<div class ="product-type-wrapper123">
		<?php foreach ($taxonmies as $term) : ?>
		
						<?php echo $term->name;?>
				<?php endforeach;?>
		</div>
		
			</header><!-- .page-header -->
			<section class = "content-container">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-product' );
				?>
		
			<?php endwhile; ?>

			</section>
		</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

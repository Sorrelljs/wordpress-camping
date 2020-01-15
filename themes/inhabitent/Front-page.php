<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <section class = "home-hero">
        <div class = "logo-hero">
</div>
</section>


        <section class ="product-info-container">
            <h2 class = "shop">Shop Stuff </h2>

            <div class = "product-type-blocks">
                <div class = "product-type-wrapper">
				<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
</div>
            	<div class = "product-type-wrapper">

				<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
</div>
                <div class = "product-type-wrapper">

				<p>Get a good night's rest in the wild in a home away from home that travels well</p>

</div>
</div>
	</section>
		<h2 class = "shop2">Inhabitent Journal</h2>
<!--  CUSTOM POST LOOP -->
	<?php
   $args = array( 'post_type' => 'post', 'numberposts' => '3' );
   $posts = get_posts( $args ); // returns an array of posts
?>
<div class = "content-wrap">
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
	<article class = "wrap-posts">
   <h3><?php echo get_the_title() ?></h3>
   <img class = "images-1010" src = "<?php echo get_the_post_thumbnail_url(); ?>">
   </article>

<?php endforeach; wp_reset_postdata(); ?>
</div>
	



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>



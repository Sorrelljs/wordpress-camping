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

       <?php $taxonmies = get_terms('product_type');?>

<section class ="product-info-container">
            <h2 class = "shop-stuff-title">Shop Stuff </h2>

        <div class = "product-container123">
        <?php foreach ($taxonmies as $term) : ?>
            <div class ="product-type-wrapper">
            <img class = "icon-image" src = "<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term ->slug . '.svg'?>"/>
            <p class = "product-type-blocks"><?php echo $term->description; ?></p>
            <div class = "btn-container">
               <a href= " <?php echo get_term_link($term->term_id);?>" class = "product-type-button">
               <?php echo $term->name;?></a></div>
        </div>
 
        <?php endforeach;?>

        </div>
    </section>
    
    
		<h2 class = "inhabitent-journal-title">Inhabitent Journal</h2>

    
<!--  CUSTOM POST LOOP -->

	<?php
   $args = array( 'post_type' => 'post', 'numberposts' => '3' );
   $posts = get_posts( $args ); // returns an array of posts
?>
<div class = "content-wrap">
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
	<article class = "wrap-posts">
   <img class = "images-1010" src = "<?php echo get_the_post_thumbnail_url(); ?>">
   <span class = "date-post"><?php echo get_the_date(); ?>
   
   <?php comments_number() ?>
   <h3 class = "title-post"><?php echo get_the_title(); ?>
</h3>



<p class = "read-more-btn-container123">
<a href=<?php echo esc_url (get_permalink() ) ?> class="read-more-btn123">Read entry</a>
		</p>
   </article>

<?php endforeach; wp_reset_postdata(); ?>
</div>
	



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>



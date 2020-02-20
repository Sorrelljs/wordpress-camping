<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="product-content-wrapper">
        <header class="entry-header">
            <h1 class="single_title"><?php the_title(); ?></h1> 
        </header>
    <div class="blog-post-single">
		<!-- <img width="640" height="480" src="<?php echo CFS()->get( 'Image' ); ?>" class="attachment-large size-large wp-post-image" sizes="(max-width: 640px) 100vw, 640px">  -->
        <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>

     

<div class="entry-content1234">
        <!-- <span class = "price-tag1234"> <?php echo CFS() -> get('Price');?> 
        </span> -->
            <p class = "description-content-single"><?php the_content();?>
            </p>

     <div class="social-buttons">
        <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
        <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
        <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
    </div>
</div>
        
    </div>
</article>
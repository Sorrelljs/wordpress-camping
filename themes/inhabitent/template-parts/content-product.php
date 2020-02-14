<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>


			<div class = "taxonomy-product-container">

			<div class = "taxonomy-product-type-wrapper">

		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><img 
		 src="<?php echo CFS()->get( 'Image' ); ?>" class="shop-product-image"  sizes="(max-width: 640px) 100vw, 640px"></a>			

		 </div>
<div class = "taxonomy-product-bottom-container">
		<h1 class = "shop-title123"> <?php echo  the_title()?> </h1>

		<span class = "price-tag"> <?php echo CFS() -> get('Price');?> </span>
</div>


</div>

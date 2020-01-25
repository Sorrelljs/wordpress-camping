<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>


			<div class = "grid-container">

			<div class = "grid-container-wrapper123">

		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><img width="640" height="480"
		 src="<?php echo CFS()->get( 'Image' ); ?>" class="shop-product-image"  sizes="(max-width: 640px) 100vw, 640px"></a>			


		<h1 class = "shop-title123"> <?php echo  the_title()?> </h1>

		<span class = "price-tag"> <?php echo CFS() -> get('Price');?> </span>


		</div>

</div>

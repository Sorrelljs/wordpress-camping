<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>


<footer id="colophon" class="site-footer" role="contentinfo">
	<?php dynamic_sidebar("footer"); ?>
	
		<div class = "footer-logo">
			<a href = <?php echo home_url()?>>
				<img src = "../../wordpress/wp-content/themes/inhabitent/images/logos/inhabitent-logo-text.svg" 
				alt="inhabitent logo" class = "inhabitent-logo-footer">
			</a>
		</div>

		<div class="container">
			Copyright © 2019 Inhabitent			
		</div>

	</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>


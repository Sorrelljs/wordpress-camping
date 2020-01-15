<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

			<div class ="contact">
			<h3>Contact Info</h3>

			<p>
			<a href="info@inhabitent.com">info@inhabitent.com</a>
			<i class="fa fa-envelope"></i>
			</p>

			<p>
			<i class="fa fa-phone"></i>
			<a href="tel">778-456-7891</a>
		    </p>

			<p>
			<span> <i class="fa fa-facebook-square"></i> </span>
			<span> <i class="fa fa-twitter-square"></i> </span>
			<span> <i class="fa fa-google-plus-square"></i> </span>
			</p>

			</div>



			<div class ="business-hours">
			<h3>Business Hours</h3>
			<p> <span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
			<p> <span class="day-of-week">Saturday:</span>  10am to 2pm </p>
			<p> <span class="day-of-week">Sunday:</span>  Closed </p>
			</div>

			<div class ="footer-logo"></div>
			<div class="text-logo">
							<a href="https://tent.academy.red/" rel="home">
								<img src= "<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent logo">
							</a>
						</div>
			

			<div class="container">
					Copyright © 2019 Inhabitent			
			</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

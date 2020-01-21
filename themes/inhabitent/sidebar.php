<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</div><!-- #secondary -->

<aside id="text-2" class="widget widget_text">
	<h2 class="widget-title">Contact Info</h2>			
	<div class="textwidget"><p class="contact-meta"><i class="fa fa-phone"></i><span><a href="tel:7784567891">778-456-7891</a></span></p>
<p class="contact-meta"><i class="fa fa-envelope"></i><span><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></span></p>
<p class="contact-meta"><i class="fa fa-map-marker"></i><span>1490 W Broadway<br>Vancouver, BC V6H 1H5</span></p>
</div>
		</aside>
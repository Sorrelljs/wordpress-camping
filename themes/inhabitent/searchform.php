<?php

$icon_search = 'icon-search123';
?>



<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<label id = "header-search-id123" class = "header-search123">
			<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
			<?php if (is_page('front page') || is_page('About')) {
				$icon_search = 'icon-search';
			}  ?>	
			<a class="<?php echo $icon_search ;?>" aria-hidden="true">
				<i class="fa fa-search"></i>
			</a>

			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
</form>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label id = "header-search-id123" class = "header-search123">
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
			<?php if (is_page('front page') || is_page('About')): ?>
				<a class="icon-search" aria-hidden="true">

			<?php else : ?>
				<a id = "icon-search123" aria-hidden="true">

			<?php endif ?>	
				
				<i class="fa fa-search"></i>
			</a>

			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</fieldset>
</form>

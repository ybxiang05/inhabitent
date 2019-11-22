<?php
/**
 * The template for search bar in navigation and on 404 page.
 *
 * @package RED_Starter_Theme
 */ ?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	<label :data-state="state" for="search"
	class="search-form-container search-form-container">
		<i class="fa fa-search" @click="" aria-hidden="true"></i>
			
		<input type="search" class="search-field" placeholder="type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label>	
</form>

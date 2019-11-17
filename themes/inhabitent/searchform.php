<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	<label :data-state="state" for="search"
	class="search-form-container">
		<i class="fa fa-search" @click="" aria-hidden="true"></i>
			
		<input type="search" class="search-field" placeholder="type and hit enter..." @click="state = 'open'" @blur="state='close'" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label>
		
</form>

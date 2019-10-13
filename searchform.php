<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'rstyle'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php _ex('Search for:', 'label', 'rstyle'); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button', 'rstyle'); ?>">
</form>

<form class="search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <label for="s">Search for:</label>
  <input type="search" id="s" name="s" class="search-query" placeholder="Search" value="<?php the_search_query(); ?>">
  <button class="button"><?php _e('Go', 'satus');?></button>
</form>
<form class="search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <label for="s">Search for:</label>
  <input type="search" id="s" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
  <input class="button" type="submit" value="<?php _e('Go', 'satus');?>">
</form>
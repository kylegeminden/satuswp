<?php if (have_posts()) : ?>

  <?php get_template_part( 'templates/page-header' ); ?>

  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'templates/content', 'search' ); ?>
  <?php endwhile; ?>

  <?php satus_posts_nav(POSTS_NAV_PREV, POSTS_NAV_NEXT); ?>

<?php else : ?>     

  <?php get_template_part( 'templates/page-header' ); ?>

  <div property="mainContentOfPage">
    
    <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'satus' ); ?>
    </p>

  </div>
      
  <?php get_search_form(); ?>

<?php endif; ?>
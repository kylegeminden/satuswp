<?php get_template_part( 'templates/page-header' ); ?>

<?php if ( 'page' == get_option('show_on_front') ) : ?>

  <?php get_template_part( 'templates/content', 'home-page' ); ?>

<?php else : ?>

  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'templates/content' ); ?>
  <?php endwhile; ?>

  <?php satus_posts_nav(POSTS_NAV_PREV, POSTS_NAV_NEXT); ?>

<?php endif; ?>
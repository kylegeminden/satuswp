<?php get_template_part( 'templates/page-header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'templates/content' ); ?>
<?php endwhile; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <?php satus_posts_nav(POSTS_NAV_PREV, POSTS_NAV_NEXT); ?>
<?php endif; ?>
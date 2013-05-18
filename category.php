<?php get_template_part( 'templates/page-header' ); ?>

<?php
  $category_description = category_description();
  if ( ! empty( $category_description ) )
  echo apply_filters( 'category_archive_meta', '<div class="category-description" itemprop="description">' . $category_description . '</div>' );
?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'templates/content' ); ?>
<?php endwhile; ?>

<?php satus_posts_nav(POSTS_NAV_PREV, POSTS_NAV_NEXT); ?>
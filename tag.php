<?php get_template_part( 'templates/page-header' ); ?>

<?php
  $tag_description = tag_description();
  if ( ! empty( $tag_description ) )
    echo apply_filters( 'tag_archive_meta', '<div class="tag-description" itemprop="description">' . $tag_description . '</div>' );
?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'templates/content' ); ?>
<?php endwhile; ?>

<?php satus_posts_nav(POSTS_NAV_PREV, POSTS_NAV_NEXT); ?>
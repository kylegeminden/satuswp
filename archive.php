<?php get_template_part( 'templates/page-header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'templates/content' ); ?>
<?php endwhile; ?>

<?php satus_posts_nav(POSTS_NAV_PREV, POSTS_NAV_NEXT); ?>
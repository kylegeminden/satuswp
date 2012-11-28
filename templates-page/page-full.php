<?php
/*
Template Name: Full Width
*/
?>

<?php get_template_part( 'templates/content', 'header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'templates/content', 'page' ); ?>
<?php endwhile; ?>
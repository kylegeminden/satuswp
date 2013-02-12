<?php while ( have_posts() ) : the_post(); ?>
<div property="mainContentOfPage">
  <?php the_content(); ?>
</div>
<!-- /.main-body -->
<?php satus_paged_nav(); ?>
<?php endwhile; ?>
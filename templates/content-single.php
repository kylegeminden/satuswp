<article id="post-<?php the_ID(); ?>" <?php post_class('detail') ?> vocab="http://schema.org/" typeof="BlogPosting">

  <header>
    <h1 property="headline"><?php the_title(); ?></h1> 
    <?php get_template_part( 'templates/post-meta' ); ?> 
  </header>
  
  <div property="articleBody">
    <?php the_content(); ?>
  </div>
  
  <?php global $numpages; if ( $numpages > 1 || has_tag() ) : ?>
  <footer>
    <?php satus_paged_nav(); ?>
    <div class="meta">
      <dl class="section tags">
        <dt><?php _e('Tags:', 'satus'); ?></dt>
        <dd property="articleSection">
          <?php the_tags('', ', ', ''); ?>
        </dd>
      </dl>
      <dl class="section cats">
        <dt><?php _e('Posted in:', 'satus'); ?></dt>
        <dd property="articleSection">
          <?php echo get_the_category_list( __( ', ', 'satus' ) ); ?>
        </dd>
      </dl>
    </div>
  </footer>
  <?php endif; ?>
  
  <?php comments_template('/templates/comments.php'); ?>

</article>
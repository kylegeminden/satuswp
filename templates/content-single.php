<article <?php post_class() ?> vocab="http://schema.org/" typeof="BlogPosting">

  <header class="post-header">
    <h1 property="headline"><?php the_title(); ?></h1> 
    <?php get_template_part( 'templates/post-meta' ); ?> 
  </header>
  
  <div class="post-body" property="articleBody">
    <?php the_content(); ?>
  </div>
  
  <?php global $numpages; if ( $numpages > 1 || has_tag() ) : ?>
  <footer>
    <?php satus_paged_nav(); ?>
    <div class="post-meta">
      <dl class="post-tags">
        <dt><?php _e('Tags:', 'satus'); ?></dt>
        <dd property="articleSection">
          <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
        </dd>
      </dl>
    </div>
  </footer>
  <?php endif; ?>
  
  <?php comments_template('/templates/comments.php'); ?>

</article>
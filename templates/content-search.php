<article id="post-<?php the_ID(); ?>" <?php post_class('search-result summary') ?>>
  
  <header>
    <h2 property="headline">
      <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h2>
    <p><cite><?php the_permalink() ?></cite></p>
  </header>
  
  <div class="abstract" property="description">
    <?php if ( has_post_thumbnail()) : ?>
      <a class="<?php echo POST_THUMB_CLASSES ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('thumbnail'); ?>
      </a>
    <?php endif; ?>
    <?php satus_the_excerpt( POST_EXCERPT_LENGTH ); ?>
  </div>

</article>
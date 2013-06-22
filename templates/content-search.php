<article <?php post_class('search-result') ?>>
  
  <header class="post-header">
    <h2 property="headline">
      <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h2>
    <p><cite><?php the_permalink() ?></cite></p>
  </header>
  
  <div class="post-description" property="description">
    <?php if ( has_post_thumbnail()) : ?>
      <a class="<?php echo POST_THUMB_CLASSES ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('thumbnail', 'property=image'); ?>
      </a>
    <?php endif; ?>
    <?php satus_the_excerpt( POST_EXCERPT_LENGTH, 'words', EXCERPT_READ_MORE, EXCERPT_READ_MORE_TEXT, EXCERPT_CLASS ); ?>
  </div>

</article>
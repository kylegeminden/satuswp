<div class="post-meta">

  <?php if ( !is_author() ) : ?>
  <dl class="post-author">
    <dt><?php _e('By:', 'satus'); ?></dt>
    <dd>
      <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ) ) ?>" rel="author"><?php echo get_the_author(); ?></a>
    </dd>
  </dl>
  <?php endif; ?>

  <dl class="post-date">
    <dt><?php _e('Posted on:', 'satus'); ?></dt>
      <dd>
        <time property="datePublished" datetime="<?php echo get_the_time('c'); ?>">
          <?php echo sprintf(__('%s', 'satus'), get_the_date(), get_the_time()) ?>
        </time>
    </dd>
  </dl>

  <?php if ( has_tag() ) : ?>
  <dl class="post-tags">
    <dt><?php _e('Tags:', 'satus'); ?></dt>
    <dd property="articleSection">
      <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
    </dd>
  </dl>
  <?php endif; ?>
  
  <?php if (comments_open()) : ?>
  <dl class="post-comment-count">
    <dt><?php _e('Comments:', 'satus'); ?></dt>
    <dd>
      <span property="UserComments"><?php comments_number('0', '1', '%'); ?></span> <span><?php
          $num_comments = get_comments_number();
          if ( $num_comments == 0 ) {
            $comments = _e('Comments', 'satus');
          } elseif ( $num_comments > 1 ) {
            $comments = $num_comments . _e(' Comments', 'satus');
          } else {
            $comments = _e('Comment', 'satus');
          }
        ?></span>
    </dd>
  </dl>
  <?php endif; ?>

</div>
<div class="meta">

  <dl class="publish-date">
    <dt><?php _e('Posted on:', 'satus'); ?></dt>
      <dd>
        <time property="datePublished" datetime="<?php echo get_the_time('c'); ?>">
          <?php echo sprintf(__('%s', 'satus'), get_the_date(), get_the_time()) ?>
        </time>
    </dd>
  </dl>

  <?php if ( !is_author() ) : ?>
  <dl class="author">
    <dt><?php _e('Written by:', 'satus'); ?></dt>
    <dd>
      <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ) ) ?>" rel="author"><?php echo get_the_author(); ?></a>
    </dd>
  </dl>
  <?php endif; ?>

  <?php if ( has_tag() ) : ?>
  <dl class="section tags">
    <dt><?php _e('Tags:', 'satus'); ?></dt>
    <dd property="articleSection">
      <?php the_tags('', ', ', ''); ?>
    </dd>
  </dl>
  <?php endif; ?>
  
  <dl class="section cats">
    <dt><?php _e('Posted in:', 'satus'); ?></dt>
    <dd property="articleSection">
      <?php echo get_the_category_list( __( ', ', 'satus' ) ); ?>
    </dd>
  </dl>
  
  <?php if (comments_open()) : ?>
  <dl class="actions">
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
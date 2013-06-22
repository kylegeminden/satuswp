<?php if (post_password_required()) : ?>
  <section class="comments">
      
    <p><?php _e('This post is password protected. Enter the password to view comments.', 'satus'); ?></p>

  </section>
  <!-- /#comments -->
<?php return; endif; ?>

<?php function satus_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?>>
    <article class="comment comment-<?php comment_ID(); ?>" property="comment" vocab="http://schema.org/" typeof="UserComments">

      <header>
        <?php echo get_avatar($comment,$size='40'); ?>
        <h3>
          <?php printf(__('<cite property="creator">%s</cite>', 'satus'), get_comment_author_link()) ?>
          <time property="commentTime" datetime="<?php echo comment_date('c') ?>">
              <a property="replyToUrl" href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                <?php printf(__('%s <span>%s</span> ', 'satus'), get_comment_date(),  get_comment_time()); ?>
              </a>
          </time>
        </h3>
        <?php edit_comment_link(__('Edit Comment', 'satus'), '', '') ?>
      </header>

      <?php if ($comment->comment_approved == '0') : ?>
               
      <p><?php _e('Your comment is awaiting moderation.', 'satus') ?></p>
          
      <?php endif; ?>
      
      <div property="commentText">
        <?php comment_text() ?>
      </div>

      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

    </article>
<?php } ?>

<?php if (have_comments()) : ?>
  <section class="comments">

    <h2><?php comments_number(__('No Responses to', 'satus'), __('One Response to', 'satus'), __('% Responses to', 'satus') ); ?> &#8220;<?php the_title(); ?>&#8221;</h2>

    <ol class="comment-list">
      <?php wp_list_comments(array('callback' => 'satus_comments')); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
      
      <footer>
        <nav class="comments-nav pagination">
          <h3 class="assistive-text"><?php _e('Comments Navigation', 'satus') ?></h3>
          <?php paginate_comments_links(array(
            'prev_text' => POSTS_NAV_PREV,
            'next_text' => POSTS_NAV_NEXT
            )); ?>
        </nav>
      </footer>
      
    <?php endif; // check for comment navigation ?>

    <?php if (!comments_open()) : ?>
        
      <p><?php _e('Comments are closed.', 'satus'); ?></p>
      
    <?php endif; ?>
  </section>
  <!-- /#comments -->
<?php endif; ?>

<?php if (!have_comments() && comments_open()) : ?>
  <section class="comments">

    <h2><?php comments_number(__('No Responses to', 'satus'), __('One Response to', 'satus'), __('% Responses to', 'satus') ); ?> &#8220;<?php the_title(); ?>&#8221;</h2>
      
  </section>
  <!-- /#comments -->
<?php endif; ?>

<?php if (!have_comments() && !comments_open()) : ?>
  <section class="comments">
      
  <p><?php _e('Comments are closed.', 'satus'); ?></p>

  </section>
  <!-- /#comments -->
<?php endif; ?>

<?php if (comments_open()) : ?>
  <section class="respond">

    <p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

    <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
      
      <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'satus'), wp_login_url(get_permalink())); ?></p>

    <?php else : ?>
      
      <?php if (COMMENT_FORM) : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form" class="comment-form">
          <?php if (is_user_logged_in()) : ?>
            <p><?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'satus'), get_option('siteurl'), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'satus'); ?>"><?php _e('Log out &raquo;', 'satus'); ?></a></p>
          <?php else : ?>
            <label for="author"><?php _e('Name', 'satus'); if ($req) _e(' <span class="required">*</span>', 'satus'); ?></label>
            <input class="author" id="author" type="text" name="author" value="<?php echo esc_attr($comment_author); ?>" size="30" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> <?php if ($req) echo "required"; ?>>
            <label for="email"><?php _e('Email <small>(will not be published)</small>', 'satus'); if ($req) _e(' <span class="required">*</span>', 'satus'); ?></label>
            <input class="email" id="email" type="email" name="email" value="<?php echo esc_attr($comment_author_email); ?>" size="30" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>  <?php if ($req) echo "required"; ?>>
            <label for="url"><?php _e('Website', 'satus'); ?></label>
            <input class="url" id="url" type="url" name="url" value="<?php echo esc_attr($comment_author_url); ?>" size="30" tabindex="3">
          <?php endif; ?>
          <label for="comment"><?php _e('Comment', 'satus'); if ($req) _e(' <span class="required">*</span>', 'satus'); ?></label>
          <textarea class="comment" id="comment" name="comment"  cols="45" rows="8" tabindex="4" <?php if ($req) echo "aria-required='true'"; ?> <?php if ($req) echo "required"; ?>></textarea>
          <p><input class="button" id="submit" type="submit" name="submit" tabindex="5" value="<?php _e('Submit Comment', 'satus'); ?>"></p>
          <?php comment_id_fields(); ?>
          <?php do_action('comment_form', $post->ID); ?>
        </form>
      <?php else : ?>
        <?php comment_form(); ?>
      <?php endif; ?>

    <?php endif; // if registration required and not logged in ?>
    
  </section>
  <!-- /#respond -->
<?php endif; ?>
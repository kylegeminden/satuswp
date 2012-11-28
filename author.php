<?php get_template_part( 'templates/page-header' ); ?>  

<?php global $post; $author_id=$post->post_author; ?>
    
<div property="mainContentOfPage">

  <?php if ( get_the_author_meta( 'description', $author_id ) ) : ?>
    <div class="bio">
      <?php echo get_avatar( $author_id, 100 ); ?>          
      <p><?php the_author_meta( 'description', $author_id ); ?></p>
    </div>
  <?php endif; ?>

  <?php if ( get_the_author_meta( 'user_url',$author_id ) ) : ?>
  <h2>Website:</h2>
  <p><a href="<?php the_author_meta( 'user_url', $author_id ); ?>" rel="bookmark"><?php the_author_meta( 'user_url', $author_id ); ?></a></p>
  <?php endif; ?>

  <?php if ( get_the_author_meta( 'aim',$author_id ) ) : ?>
  <h2>AIM:</h2>
  <div>
    <p><?php the_author_meta( 'aim', $author_id ); ?></p>
  </div>
  <?php endif; ?>     

  <?php if ( get_the_author_meta( 'yim',$author_id ) ) : ?>
  <h2>Yahoo IM:</h2>
  <div>
    <p><?php the_author_meta( 'yim', $author_id ); ?></p>
  </div>
  <?php endif; ?>     

  <?php if ( get_the_author_meta( 'jabber',$author_id ) ) : ?>
  <h2>Jabber / Google Talk:</h2>
  <div>
    <p><?php the_author_meta( 'jabber', $author_id ); ?></p>
  </div>
  <?php endif; ?> 
  
  <?php if (
    get_the_author_meta('googleprofile',$author_id) ||
    get_the_author_meta('twitter',$author_id) ||
    get_the_author_meta('facebook',$author_id) ||
    get_the_author_meta('linkedin',$author_id) ||
    get_the_author_meta('flickr',$author_id) ||
    get_the_author_meta('youtube',$author_id) ||
    get_the_author_meta('vimeo',$author_id)           
  ) : ?>        
  <h2>Connect:</h2>               
  <ul class="social author-social">
    <?php if ( get_the_author_meta( 'googleprofile', $author_id ) ) : ?>
    <li>
      <a class="google-profile" href="<?php the_author_meta( 'googleprofile', $author_id ); ?>" rel="me bookmark">Google Profile</a>
    </li>
    <?php endif; ?>
    <?php if ( get_the_author_meta( 'twitter', $author_id ) ) : ?>
    <li>
      <a class="twitter" href="<?php the_author_meta( 'twitter', $author_id ); ?>" rel="bookmark">Twitter</a>
    </li>
    <?php endif; ?>
    <?php if ( get_the_author_meta( 'facebook', $author_id ) ) : ?>
    <li>
      <a class="facebook" href="<?php the_author_meta( 'facebook', $author_id ); ?>" rel="bookmark">Facebook</a>
    </li>
  <?php endif; ?>
  <?php if ( get_the_author_meta( 'linkedin', $author_id ) ) : ?>
    <li>
      <a class="linkedin" href="<?php the_author_meta( 'linkedin', $author_id ); ?>" rel="bookmark">LinkedIn</a>
    </li>
    <?php endif; ?>
  <?php if ( get_the_author_meta( 'flickr', $author_id ) ) : ?>
    <li>
      <a class="flickr" href="<?php the_author_meta( 'flickr', $author_id ); ?>" rel="bookmark">Flickr</a>
    </li>
    <?php endif; ?>
    <?php if ( get_the_author_meta( 'youtube', $author_id ) ) : ?>
    <li>
      <a class="youtube" href="<?php the_author_meta( 'youtube', $author_id ); ?>" rel="bookmark">YouTube</a>
    </li>
    <?php endif; ?>
    <?php if ( get_the_author_meta( 'vimeo',$author_id ) ) : ?>
    <li>
      <a class="vimeo" href="<?php the_author_meta( 'vimeo', $author_id ); ?>" rel="bookmark">Vimeo</a>
    </li>
    <?php endif; ?> 
  </ul>
  <?php endif; ?>

  <h2>Articles written:</h2>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'templates/content', 'author' ); ?>
  <?php endwhile; ?>

  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <?php satus_posts_nav(POSTS_NAV_PREV, POSTS_NAV_NEXT); ?>
  <?php endif; ?>

</div> 
<!-- End mainContentOfPage -->
<?php

/**
 * The satus_typeof tag is located in config for easy modification
 */

/**
 * #main and #sidebar CSS classes
 */
function satus_main_class() {
  if (satus_display_sidebar()) {
    $class = MAIN_CLASSES;
  } else {
    $class = MAIN_FULL_WIDTH_CLASSES;
  }
  return $class;
}
function satus_sidebar_class() {
  return SIDEBAR_CLASSES;
}

/*
 * Truncate title on recent posts widget etc.,
 * use the following tag in desired template file()s to shorten title length <?php satus_short_title(20) ?>
 */
function satus_short_title($limit = 40){
  $title = get_the_title();
  $pad = "&hellip;";
  if(strlen($title) <= $limit) {
    echo $title;
  } else {
    $title = substr($title, 0, $limit) . $pad;
  echo $title;
  }
}

/*
 * Change default excerpt length - this is use to set a large number for the excerpt length that way the following satus excerpt can make multiple lengths in multiple locations
 */
function satus_default_excerpt_length($length) {
  return 500;
}
add_filter('excerpt_length', 'satus_default_excerpt_length');

/**
 * Begin Custom Excerpts Lengths 
 * Thanks to Adam Nowak @link http://codehyperspatial.com
 * use the following tag in desired template file(s)
 * <?php satus_the_excerpt(40,'characters', true, 'read&nbsp;more', 'excerpt'); ?>
 * (can remove ,'characters' if words rather than characters desired
  */

// Limit String Characters
function satus_limit_string_chars($string,$char_limit)
{
  $newstring = substr($string,0,$char_limit);
  return $newstring;
}
// Limit String Words
function satus_limit_string_words($string,$word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
//The Excerpt
function satus_the_excerpt($max_length='',$limit_type='words',$read_more=true,$read_more_txt='read&nbsp;more',$class='excerpt'){
  if($max_length == ''){ $shorten_post_value = get_option('shorten_post_value'); }
  else $shorten_post_value = $max_length;
  $shortened_content = get_the_excerpt();
  if ($shorten_post_value == 'none'){ return; }
  else if($shorten_post_value == 'full'){ the_content(); }
  else {
    if($limit_type == 'characters'){
      echo '<p class="'.$class.'">' . satus_limit_string_chars($shortened_content,$shorten_post_value) . '&hellip;';
      }
    else {
      echo '<p class="'.$class.'">' . satus_limit_string_words($shortened_content,$shorten_post_value) . '&hellip;';
      }
    if($read_more) { ?>
    <a href="<?php the_permalink(); ?>" class="read-more" title="Read Full Post" rel="bookmark"><?php echo $read_more_txt; ?></a></p>
    <?php }
  }
}

/**
 * Checks to see if page is grandparent call with is_tree(id) in template file(s)
 * Unfortunately I can't remember who to give credit for this one
 */
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
  global $post;         // load details about this page
  $anc = get_post_ancestors( $post->ID );
  foreach($anc as $ancestor) {
    if(is_page() && $ancestor == $pid) {
      return true;
    }
  }
  if(is_page()&&(is_page($pid)))
    return true;   // we're at the page or at a sub page
  else
    return false;  // we're elsewhere
};

/**
 * Post Pagination @link http://bavotasan.com/2012/a-better-wp_link_pages-for-wordpress/
 */
function satus_paged_nav( $args = '' ) {
  $defaults = array(
    'before' => '<nav class="paged-nav pagination"><h2 class="visuallyhidden">' . __('Pagination Navigation', 'satus') . '</h2>', 
    'after' => '</nav>',
    'text_before' => '',
    'text_after' => '',
    'next_or_number' => 'number',
    'pagelink' => '%',
    'echo' => 1
  );
  $r = wp_parse_args( $args, $defaults );
  $r = apply_filters( 'wp_link_pages_args', $r );
  extract( $r, EXTR_SKIP );
  global $page, $numpages, $multipage, $more, $pagenow;
  $output = '';
  if ( $multipage ) {
    if ( 'number' == $next_or_number ) {
      $output .= $before;
      for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
        $j = str_replace( '%', $i, $pagelink );
        $output .= ' ';
        if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
          $output .= _wp_link_page( $i );
        else
          $output .= '<span class="current">';
 
        $output .= $text_before . $j . $text_after;
        if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
          $output .= '</a>';
        else
          $output .= '</span>';
      }
      $output .= $after;
    } else {
      if ( $more ) {
        $output .= $before;
        $i = $page - 1;
        if ( $i && $more ) {
          $output .= _wp_link_page( $i );
          $output .= $text_before . $previouspagelink . $text_after . '</a>';
        }
        $i = $page + 1;
        if ( $i <= $numpages && $more ) {
          $output .= _wp_link_page( $i );
          $output .= $text_before . $nextpagelink . $text_after . '</a>';
        }
        $output .= $after;
      }
    }
  }
  if ( $echo )
    echo $output;
  return $output;
}

/**
 * Posts Pagination @link http://wp-snippets.com/pagination-without-plugin/
 */
function satus_posts_nav($prev = '&larr;', $next = '&rarr;') {
  global $wp_query, $wp_rewrite;
  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
  $pagination = array(
    'base' => @add_query_arg('paged','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'prev_text' => $prev,
    'next_text' => $next,
    'type' => 'plain'
  );
  if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
  echo '<nav class="posts-nav pagination"><h2 class="visuallyhidden">' . __('Posts Navigation', 'satus') . '</h2>' . paginate_links( $pagination ) . '</nav>' ;
}

?>
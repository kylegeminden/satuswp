<?php

/**
 * Clean up dashboard
 * @link deluxeblogtips.com/2011/01/remove-dashboard-widgets-in-wordpress.html
*/
function satus_remove_dashboard_widgets() {
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
  remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
  remove_meta_box('dashboard_primary', 'dashboard', 'normal');
  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
}
add_action('admin_init', 'satus_remove_dashboard_widgets');

/**
 * allow more tags in TinyMCE including iframes
 * @link github.com/retlehs/roots/
*/
function satus_change_mce_options($options) {
  $ext = 'pre[id|name|class|style],iframe[align|longdesc|name|width|height|frameborder|scrolling|marginheight|marginwidth|src],script[charset|defer|language|src|type]';
  if (isset($initArray['extended_valid_elements'])) {
    $options['extended_valid_elements'] .= ',' . $ext;
  } else {
    $options['extended_valid_elements'] = $ext;
  }
  return $options;
}
add_filter('tiny_mce_before_init', 'satus_change_mce_options');

/** 
 * Tell WordPress to use searchform.php from the templates/ directory
 * @link github.com/retlehs/roots/
 */
function satus_get_search_form() {
  locate_template('/templates/searchform.php', true, true);
}
add_filter('get_search_form', 'satus_get_search_form');

/**
 * Makes pretty permalinks for the search results
 * @link txfx.net/wordpress-plugins/nice-search/
*/
function satus_nice_search_redirect() {
  if (is_search() && strpos($_SERVER['REQUEST_URI'], '/wp-admin/') === false && strpos($_SERVER['REQUEST_URI'], '/search/') === false) {
    wp_redirect(home_url('/search/' . str_replace(array(' ', '%20'), array('+', '+'), urlencode(get_query_var( 's' )))), 301);
    exit();
  }
}
add_action('template_redirect', 'satus_nice_search_redirect');
function satus_search_query($escaped = true) {
  $query = apply_filters('satus_search_query', get_query_var('s'));
  if ($escaped) {
      $query = esc_attr( $query );
  }
    return urldecode($query);
}
add_filter('get_search_query', 'satus_search_query');

/**
 * Fix for empty search queries redirecting to home page
 *
 * @link http://wordpress.org/support/topic/blank-search-sends-you-to-the-homepage#post-1772565
 * @link http://core.trac.wordpress.org/ticket/11330
 */
function satus_request_filter($query_vars) {
  if (isset($_GET['s']) && empty($_GET['s'])) {
    $query_vars['s'] = ' ';
  }

  return $query_vars;
}
add_filter('request', 'satus_request_filter');

/**
 * Don't return the default description in the RSS feed if it hasn't been changed
 * @link github.com/retlehs/roots
 */
function mad_remove_default_description($bloginfo) {
  $default_tagline = 'Just another WordPress site';

  return ($bloginfo === $default_tagline) ? '' : $bloginfo;
}
add_filter('get_bloginfo_rss', 'mad_remove_default_description');

/**
 * Removes the following items out of the <head>
 * @link wpengineer.com/1438/wordpress-header/
*/
// links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links_extra', 3 );
// links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'feed_links', 2 );
// link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'rsd_link' );
// link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'wlwmanifest_link' );
// index link
remove_action( 'wp_head', 'index_rel_link' );
// prev link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
// start link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
// Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
// Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'wp_generator' );
// Display shortlink http://domain.com/?p=39
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

/**
 * Remove the WordPress version from RSS feeds
 */
add_filter('the_generator', '__return_false');

/** 
 * Add and remove body_class() classes
 * @link github.com/retlehs/roots/
 */
function satus_body_class($classes) {

  // Add post/page slug
  if (is_single() || is_page() && !is_front_page()) {
    $classes[] = basename(get_permalink());
  }

  // Remove unnecessary classes
  $home_id_class = 'page-id-' . get_option('page_on_front');
  $remove_classes = array(
    'page-template-default',
    $home_id_class
  );
  $classes = array_diff($classes, $remove_classes);

  return $classes;
}

add_filter('body_class', 'satus_body_class');

/**
 * removes hentry class from post_class
*/
function remove_hentry( $classes ) {
  $classes = array_diff($classes, array('hentry'));
  return $classes;
}
add_filter( 'post_class', 'remove_hentry' );

/**
 * removes rel="category tag" of the category list
 * @link josephleedy.me/blog/make-wordpress-category-list-valid-by-removing-rel-attribute/
*/

function satus_remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', ' rel="tag"', $output);
  return $output;
}
add_filter('wp_list_categories', 'satus_remove_category_list_rel');
add_filter('the_category', 'satus_remove_category_list_rel');

/**
 * remove CSS from recent comments widget
*/
function satus_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

/**
* first and last classes for widgets
* @link wordpress.org/support/topic/how-to-first-and-last-css-classes-for-sidebar-widgets
*/
function satus_widget_first_last_classes($params) {
  global $my_widget_num;
  $this_id = $params[0]['id'];
  $arr_registered_widgets = wp_get_sidebars_widgets();
  if (!$my_widget_num) {
    $my_widget_num = array();
  }
  if (!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) {
    return $params;
  }
  if (isset($my_widget_num[$this_id])) {
    $my_widget_num[$this_id] ++;
  } else {
    $my_widget_num[$this_id] = 1;
  }
  $class = 'class="widget widget-' . $my_widget_num[$this_id] . ' ';
  if ($my_widget_num[$this_id] == 1) {
    $class .= 'widget-first ';
  } elseif ($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) {
    $class .= 'widget-last ';
  }
  $params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']);
  return $params;
}
add_filter('dynamic_sidebar_params', 'satus_widget_first_last_classes');

/**
* use figure and figcaption and removes 10px addition
* see caption shortcode in wp-includes/media.php since 2.6.0
*/
function satus_img_caption_shortcode($attr, $content = null) {
  // New-style shortcode with the caption inside the shortcode with the link and image tags.
  if ( ! isset( $attr['caption'] ) ) {
    if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
      $content = $matches[1];
      $attr['caption'] = trim( $matches[2] );
    }
  }
  // Allow plugins/themes to override the default caption template.
  $output = apply_filters('img_caption_shortcode', '', $attr, $content);
  if ( $output != '' )
    return $output;
  extract(shortcode_atts(array(
    'id'  => '',
    'align' => 'alignnone',
    'width' => '',
    'caption' => ''
  ), $attr));
  if ( 1 > (int) $width || empty($caption) )
    return $content;
  if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
  return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . ' '. FIGURE_CLASSES .'" style="width: ' . $width . 'px">'
  . do_shortcode( $content ) . '<figcaption class="wp-caption-text '. FIGCAPTION_CLASSES .'">' . $caption . '</figcaption></figure>';
}
add_shortcode('wp_caption', 'satus_img_caption_shortcode');
add_shortcode('caption', 'satus_img_caption_shortcode');

/**
* Modified Gallery Shortcode to use ul see gallery shortcode in wp-includes/media.php since 2.5.0
*/
function satus_gallery_shortcode($attr) {
  global $post, $wp_locale;
  static $instance = 0;
  $instance++;
  // Allow plugins/themes to override the default gallery template.
  $output = apply_filters('post_gallery', '', $attr);
  if ( $output != '' )
    return $output;
  // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
  if ( isset( $attr['orderby'] ) ) {
    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
    if ( !$attr['orderby'] )
      unset( $attr['orderby'] );
  }
  extract(shortcode_atts(array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post->ID,
    'itemtag'    => 'li',
    'captiontag' => 'p',
    'columns'    => 3,
    'size'       => 'thumbnail',
    'include'    => '',
    'exclude'    => ''
  ), $attr));
  $id = intval($id);
  if ( 'RAND' == $order )
    $orderby = 'none';
  if ( !empty($include) ) {
    $include = preg_replace( '/[^0-9,]+/', '', $include );
    $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
      $attachments[$val->ID] = $_attachments[$key];
    }
  } elseif ( !empty($exclude) ) {
    $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
  } else {
    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
  }
  if ( empty($attachments) )
    return '';

  if ( is_feed() ) {
    $output = "\n";
    foreach ( $attachments as $att_id => $attachment )
      $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
    return $output;
  }
  $itemtag = tag_escape($itemtag);
  $captiontag = tag_escape($captiontag);
  $columns = intval($columns);
  $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
  $float = is_rtl() ? 'right' : 'left';
  $selector = "gallery-{$instance}";
  $output = apply_filters('gallery_style', "    
    <!-- see gallery_shortcode() in wp-includes/media.php -->
    <ul id='$selector' class='gallery galleryid-{$id}'>");
  $i = 0;
  foreach ( $attachments as $id => $attachment ) {
    // make the gallery link to the file by default instead of the attachment
    // thanks to Matt Price (countingrows.com)
    $link = isset($attr['link']) && $attr['link'] === 'attachment' ? 
      wp_get_attachment_link($id, $size, true, false) : 
      wp_get_attachment_link($id, $size, false, false);
    $output .= "<{$itemtag} class='gallery-item ". GALLERY_CLASSES ."'>";
    $output .= "$link";
    if ( $captiontag && trim($attachment->post_excerpt) ) {
      $output .= "
        <{$captiontag} class='gallery-caption ". GALLERY_CAPTION_CLASSES ."'>
        " . wptexturize($attachment->post_excerpt) . "
        </{$captiontag}>";
    }
    $output .= "</{$itemtag}>";
    if ( $columns > 0 && ++$i % $columns == 0 )
      $output .= '';
  }
  $output .= "</ul>\n";
  return $output;
}
//deactivate WordPress function and activate own function
remove_shortcode('gallery');
add_shortcode('gallery', 'satus_gallery_shortcode');

/**
 * Custom Walker that adds menu-item-slug (menu item title) and description
*/
class Satus_Nav_Walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth, $args) {
    global $wp_query;
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';     
      $slug = sanitize_title($item->title);
      $class_names = $value = '';
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
      $class_names = ' class="' . 'menu-item-' . $slug . ' ' . esc_attr( $class_names ) . '"';
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
      $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
      $output .= $indent . '<li' . $id . $value . $class_names .'>';
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
      
      $prepend = '<span class="menu-item-label">';
      $append = '</span>';
      $description  = ! empty( $item->description ) ? '<span class="menu-item-dscrp">'.esc_attr( $item->description ).'</span>' : '';
      if($depth != 0)
      {
        $description = $append = $prepend = "";
      }
      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'>';
      $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
      $item_output .= $description.$args->link_after;

      $item_output .= '</a>';
      $item_output .= $args->after;
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}

/**
* Custom walker class for the primary navigation that adds menu-item-slug (menu item title), description and adds items needed for drop down menu
* inspired from @link github.com/retlehs/roots/
*/
class Satus_Navbar_Walker extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $output .= "\n<ul class=\"dropdown-menu\">\n";
  }
  function start_el(&$output, $item, $depth, $args) {
    global $wp_query;
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $slug = sanitize_title($item->title);
    $li_attributes = '';
    $class_names = $value = '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;    
    if ($args->has_children && (integer)$depth < 1) {
      $classes[]      = 'dropdown';
      // $li_attributes .= ' data-dropdown="dropdown"';
    }
    $classes[] = ($item->current) ? 'active' : '';    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . 'menu-item-' . $slug . ' ' . esc_attr( $class_names ) . '"';    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
    $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
    $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"'    : '';
    $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"'    : '';
    $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"'    : '';
    $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"'    : '';
    $attributes .= ($args->has_children && (integer)$depth < 1)      ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

    $prepend = '<span class="menu-item-label">';
    $append = '</span>';
    $description  = ! empty( $item->description ) ? '<span class="menu-item-dscrp">'.esc_attr( $item->description ).'</span>' : '';
    if($depth != 0)
    {
      $description = $append = $prepend = "";
    }
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
    $item_output .= $description.$args->link_after;
    $item_output .= ($args->has_children && (integer)$depth < 1) ? ' <b class="caret"></b>' : '';
    $item_output .= '</a>';
    $item_output .= $args->after;
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
  function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
    if (!$element) { return; }
    $id_field = $this->db_fields['id'];
    // display this element
    if (is_array($args[0])) {
      $args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
    } elseif (is_object($args[0])) {
      $args[0]->has_children = !empty($children_elements[$element->$id_field]);
    }
    $cb_args = array_merge(array(&$output, $element, $depth), $args);
    call_user_func_array(array(&$this, 'start_el'), $cb_args);
    $id = $element->$id_field;
    // descend only when the depth is right and there are childrens for this element
    if (($max_depth == 0 || $max_depth > $depth+1) && isset($children_elements[$id])) {
      foreach ($children_elements[$id] as $child) {
        if (!isset($newlevel)) {
          $newlevel = true;
          // start the child delimiter
          $cb_args = array_merge(array(&$output, $depth), $args);
          call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
        }
        $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
      }
      unset($children_elements[$id]);
    }
    if (isset($newlevel) && $newlevel) {
      // end the child delimiter
      $cb_args = array_merge(array(&$output, $depth), $args);
      call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
    }
    // end this element
    $cb_args = array_merge(array(&$output, $element, $depth), $args);
    call_user_func_array(array(&$this, 'end_el'), $cb_args);
  }
}

?>
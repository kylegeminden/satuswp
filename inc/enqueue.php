<?php

/**
 * Modified from @link https://gist.github.com/sanchothefat/2567027
 * Add support for non IE conditional comments
 *
 * Usage:
 * After registering or enqueuing a script you need to append the CC to the style
 * handle via the $wp_styles class:
 *
 * $GLOBALS['wp_styles']->add_data( 'my-handle', 'notie_conditional', 'gte IE 9' );
 */
add_filter( 'style_loader_tag', 'style_loader_tag_ccs', 10, 2 );
function style_loader_tag_ccs( $tag, $handle ) {
  global $wp_styles;
  $obj = $wp_styles->registered[ $handle ];
  if ( isset( $obj->extra[ 'notie_conditional' ] ) && $obj->extra[ 'notie_conditional' ] ) {
    $cc = "<!--[if {$obj->extra['notie_conditional']}]><!-->\n";
    $end_cc = "<!--<![endif]-->\n";
    $tag = $cc . $tag . $end_cc;
  }
  return $tag;
}

/** 
 * @link http://wp.smashingmagazine.com/2011/10/12/developers-guide-conflict-free-javascript-css-wordpress/
 */

/**
 * Register theme styles
 */
function satus_register_styles(){
  wp_register_style(
    'satus-main-css', //handle
    get_stylesheet_directory_uri().'/assets/css/main.css', //source
    null, // dependencies
    null // version
  );
  wp_register_style(
    'satus-main-css-ie',
    get_stylesheet_directory_uri().'/assets/css/main-ie.css',
    null,
    null
  );
  $GLOBALS['wp_styles']->add_data(
    'satus-main-css',
    'notie_conditional', // is a custom non-wp conditional comment
    'gte IE 9' // the conditional comment
  ); 
  $GLOBALS['wp_styles']->add_data(
    'satus-main-css-ie',
    'conditional', // is a conditional comment
    'IE 8'
  );
}
add_action('init', 'satus_register_styles');

/**
 * Enqueue theme scripts
 */
function satus_enqueue_styles(){
  if (!is_admin()):
    wp_enqueue_style('satus-main-css');
    wp_enqueue_style('satus-main-css-ie');
  endif;
}
add_action('wp_enqueue_scripts', 'satus_enqueue_styles', 100);

// Enqueue WordPress' jQuery
if(WP_JQUERY):
  function satus_enqueue_wpjquery(){
    if (!is_admin()):
      wp_enqueue_script("jquery");
    endif;
  }
  add_action('wp_enqueue_scripts', 'satus_enqueue_wpjquery');
endif;

/**
 * Register theme scripts
 */
function satus_register_scripts() {
  wp_register_script(
    'satus-plugins-js',
    get_stylesheet_directory_uri().'/assets/js/plugins.js',
    null, // dependencies
    null, // version
    true // place in footer
  );
  wp_register_script(
    'satus-main-js',
    get_stylesheet_directory_uri().'/assets/js/main.js',
    null,
    null,
    true
  );
}
add_action('init', 'satus_register_scripts');

/**
 * Enqueue theme scripts
 */
function satus_enqueue_scripts(){
  if (!is_admin()):
    wp_enqueue_script('satus-plugins-js');
    wp_enqueue_script('satus-main-js');
    if (is_single() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
    }
  endif; //!is_admin
}
add_action('wp_enqueue_scripts', 'satus_enqueue_scripts', 100);

?>
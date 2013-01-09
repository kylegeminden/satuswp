<?php

/** 
 * @link wp.smashingmagazine.com/2011/10/12/developers-guide-conflict-free-javascript-css-wordpress/
*/

/**
 * Register theme styles
*/
function satus_register_styles(){
  wp_register_style(
    'satus-css', //handle
    get_stylesheet_directory_uri().'/assets/css/satus.css', //source
    null, // dependencies
    null // version
  );
  wp_register_style(
    'satus-app-css', //handle
    get_stylesheet_directory_uri().'/assets/css/app.css', //source
    null, // dependencies
    null // version
  );
}
add_action('init', 'satus_register_styles');

/**
 * Enqueue theme scripts
*/
function satus_enqueue_styles(){
  if (!is_admin()):
    wp_enqueue_style('satus-css');
    wp_enqueue_style('satus-app-css');
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
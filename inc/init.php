<?php

/**
 * Make theme available for translation
 * Translations can be filed in the /lng/ directory
 * If you're building a theme based on satus, use a find and replace
 * to change 'satus' to the name of your theme in all the template files
 */
load_theme_textdomain( 'satus', get_stylesheet_directory() . '/lng' );

$locale = get_locale();
$locale_file = get_stylesheet_directory() . "/lng/$locale.php";
if ( is_readable( $locale_file ) )
  require_once( $locale_file );

/**
 * Tell the TinyMCE editor to use a custom stylesheet
 */
add_editor_style('assets/css/editor.css');

/** 
 * add post thumbnail/featured image support
 */
add_theme_support('post-thumbnails');

/** 
 * adds rss feed links to the head
 */
add_theme_support('automatic-feed-links');

/**
 * add nav menu support
 */
register_nav_menus(
  array(
    'primary_nav' => __('Primary Navigation', 'satus')
  )
);

/**
 * register sidebars
 */
function satus_widgets_init() {
  register_sidebar(array(
    'name' => __('Sidebar', 'satus'),
    'id' => 'sidebar-widget-area',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget' => '</div></section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'satus_widgets_init');

?>
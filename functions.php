<?php

require_once get_template_directory()   . '/inc/wrap.php';          // theme wrapper
require_once get_stylesheet_directory() . '/inc/config.php';        // theme configuration
require_once get_template_directory()   . '/inc/cleanup.php';       // cleanup wp
require_once get_template_directory()   . '/inc/admin.php';         // admin area functions
require_once get_template_directory()   . '/inc/shortcodes.php';    // shortcodes
require_once get_template_directory()   . '/inc/template-tags.php'; // template tags
require_once get_stylesheet_directory() . '/inc/enqueue.php';       // enqueue scripts and styles
require_once get_template_directory()   . '/inc/custom.php';        // your custom functions

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
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="heading">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'satus_widgets_init');

?>
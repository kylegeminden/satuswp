<?php

/**
 * Satus Configuration and Constants
 * Thanks to Adam Nowak @link http://codehyperspatial.com
 * The about page and contact page ids are for @link http://schema.org see typeof body tag towards the end of this file
 */
satus_define_constants(array(
  'WP_JQUERY'               => true,                    // enables WordPress' jQuery
  'TOUCH_ICONS'             => true,                    // enables touch icons for mobile devices
  'NICE_SEARCH'             => true,
  'GALLERY'                 => true,                    // enables gallery rewrite to ul
  'CAPTION'                 => true,                    // enables images w/caption rewrite to fig and figcaption
  'COMMENT_FORM'            => true,                    // enables the custom html5 comment form
  'EXCERPT_READ_MORE'       => true,                    
  'EXCERPT_READ_MORE_TEXT'  => 'read&nbsp;more',                    
  'EXCERPT_CLASS'           => 'excerpt',                
  'POSTS_NAV_PREV'          => '&larr;',                // index.php, etc. posts navigation indicator and comments navigation
  'POSTS_NAV_NEXT'          => '&rarr;',
  'MAIN_CLASSES'            => 'column width2of3',       // #main classes
  'MAIN_FULL_WIDTH_CLASSES' => 'column width1of1',
  'SIDEBAR_CLASSES'         => 'column width1of3',       // #sidebar classes
  'POST_THUMB_CLASSES'      => 'image thumb post-thumb', // used for index.php's etc. post thumbnails
  'FIGURE_CLASSES'          => 'image',                  // used for inserted images w/caption   
  'FIGCAPTION_CLASSES'      => 'caption',
  'GALLERY_CLASSES'         => 'wp-gallery',             // used for default wp gallery
  'GALLERY_ITEM_CLASSES'    => 'image thumb',
  'GALLERY_CAPTION_CLASSES' => 'caption',
  'ABOUT_PAGE_ID'           => '',                       // about us page id for itemscope tag
  'CONTACE_PAGE_ID'         => '',                       // contact us page id for typeof tag
  'POST_EXCERPT_LENGTH'     => 40,
  'GOOGLE_ANALYTICS_ID'     => '',                       // UA-XXXXX-Y
));
// Define Constants:
function satus_define_constants($constants){
  foreach($constants as $key => $value){
    if(!defined($key)) define($key,$value);
  }
}

/**
 * Define which pages, etc. shouldn't have the sidebar
 * @link codex.wordpress.org/Conditional_Tags
*/
function satus_display_sidebar() {
  if (
    is_404() ||
    is_front_page() && 'page' == get_option('show_on_front') ||
    is_page_template('templates-page/page-full.php')
  ) {
    return false;
  } else {
    return true;
  }
}

/**
 * Set the content width based on the theme's design and stylesheet.
*/
if ( ! isset( $content_width ) )
  $content_width = 1170; /* pixels */

/**
 * Opening body tag with rdfa lite 1.1 and schema.org php conditional
*/
if(!function_exists('satus_typeof')):
function satus_typeof(){
  if ( ABOUT_PAGE_ID !== '' && is_page( ABOUT_PAGE_ID ) ) echo 'vocab="http://schema.org/" typeof="AboutPage"';
  elseif ( CONTACE_PAGE_ID !== '' && is_page( CONTACE_PAGE_ID ) ) echo 'vocab="http://schema.org/" typeof="ContactPage"';
  elseif ( is_search() ) echo 'vocab="http://schema.org/" typeof="SearchResultsPage"';
  elseif ( is_author() ) echo 'vocab="http://schema.org/" typeof="ProfilePage"';
  elseif ( 'page' == get_post_type() ) echo 'vocab="http://schema.org/" typeof="WebPage"';
  elseif ( 'post' == get_post_type() ) echo 'vocab="http://schema.org/" typeof="Blog"';
  else;
}
endif;

/**
* Change Password Protected Form
* @link http://wp.tutsplus.com/tutorials/customizing-and-styling-the-password-protected-form/
*/
add_filter( 'the_password_form', 'satus_password_form' );  
function satus_password_form() {  
  global $post;  
  $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );  
  $o = '<p>This post is password protected. To view it please enter your password below:</p><form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post"><label class="pass-label" for="' . $label . '">' . __( "Password:", "satus" ) . ' </label><input id="' . $label . '"  name="post_password" type="password" placeholder="Password"><input class="button" type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '"></form>';  
  return $o;  
}

?>
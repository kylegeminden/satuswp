<?php

/**
 * Add iframes, image maps, html etc, via custom fields and this shortcode [field name="name-of-your-custom-field"]
 * Unfortunately I can't remember who to give credit for this one
*/
function satus_field_func($atts) {
  global $post;
  $name = $atts['name'];
  if (empty($name)) return;
  return get_post_meta($post->ID, $name, true);
}
add_shortcode('field', 'satus_field_func');

/**
 * Use the following YouTube and Vimeo shortcodes for flexible videos
 * [youtube id="YE7VzlLtp-4" ratio="widescreen"] [vimeo id="6284199" ratio="widescreen"]
 * @link alistapart.com/articles/creating-intrinsic-ratios-for-video/ 
 * @link graphicbeacon.com/web-design-development/embed-an-iframe-into-a-post-or-page-without-using-a-plugin/
*/

// YouTube
function satus_youtube_shortcode($atts) {
extract(shortcode_atts(array( 
'id'   => 'YE7VzlLtp-4',
'ratio'   => ''
), $atts)); 
return '<div class="fluid-video '.$ratio.'"><iframe src="http://www.youtube.com/embed/'.$id.'?wmode=opaque" frameborder="0" width="560" height="315" allowfullscreen></iframe></div>'; 
}
add_shortcode('youtube','satus_youtube_shortcode');

// Vimeo 
function satus_vimeo_shortcode($atts) { 
extract(shortcode_atts(array( 
'id'   => '6284199',
'ratio'   => ''
), $atts)); 
return '<div class="fluid-video vimeo '.$ratio.'"><iframe src="http://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0;wmode=opaque;" frameborder="0" width="560" height="315" webkitAllowFullScreen allowFullScreen></iframe></div>'; 
} 
add_shortcode('vimeo','satus_vimeo_shortcode');

/**
 * This allows for adding custom wrapper html tags with attributes
 * [html tag="article" atr='class="cool"']
 * [close-html tag="article"]
 */
function satus_html($atts) {
  extract(shortcode_atts(array(
    'tag' => '',
    'atr' => ''
  ), $atts)); 
    return '<'.$tag.' '.$atr.'>'; 
}
add_shortcode('html','satus_html');
function satus_close_html($atts) {
  extract(shortcode_atts(array(
    'tag'   => ''
  ), $atts)); 
    return '</'.$tag.'>'; 
}
add_shortcode('close-html','satus_close_html');

?>
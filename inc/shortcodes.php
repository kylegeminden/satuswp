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
 * @link http://alistapart.com/articles/creating-intrinsic-ratios-for-video/ 
 * @link http://graphicbeacon.com/web-design-development/embed-an-iframe-into-a-post-or-page-without-using-a-plugin/
 */

// YouTube
function satus_youtube_shortcode($atts) {
extract(shortcode_atts(array( 
'id'   => 'YE7VzlLtp-4',
'ratio'   => ''
), $atts)); 
return '<div class="flex-video '.$ratio.'"><iframe src="http://www.youtube.com/embed/'.$id.'?wmode=opaque" frameborder="0" width="560" height="315" allowfullscreen></iframe></div>'; 
}
add_shortcode('youtube','satus_youtube_shortcode');

// Vimeo 
function satus_vimeo_shortcode($atts) { 
extract(shortcode_atts(array( 
'id'   => '6284199',
'ratio'   => ''
), $atts)); 
return '<div class="flex-video vimeo '.$ratio.'"><iframe src="http://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0;wmode=opaque;" frameborder="0" width="560" height="315" webkitAllowFullScreen allowFullScreen></iframe></div>'; 
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

/**
 * Grid Shortcodes
 * [row class='test']
 * [end-row]
 * [column width='1of3' class='test']
 * [end-column]
 */
function satus_row($atts) {
  extract(shortcode_atts(array(
    'class' => ''
  ), $atts)); 
    return '<div class="'.$class.' row">'; 
}
add_shortcode('row','satus_row');

function satus_end_row() {
    return '</div>'; 
}
add_shortcode('end-row','satus_end_row');

function satus_column($atts) {
  extract(shortcode_atts(array(
    'class' => '',
    'width'   => '1of2'
  ), $atts)); 
    return '<div class="'.$class.' column width'.$width.'">'; 
}
add_shortcode('column','satus_column');

function satus_end_column() {
    return '</div>'; 
}
add_shortcode('end-column','satus_end_column');

/**
 * Shortcode Select Box
 * @link http://wpsnipp.com/index.php/functions-php/add-custom-media_buttons-for-shortcode-selection/
 * @link http://wpsnipp.com/index.php/functions-php/update-automatically-create-media_buttons-for-shortcode-selection/
 */
add_action('media_buttons','add_satus_sc_select',11);
function add_satus_sc_select(){
  echo '&nbsp;<select id="sc_select">
    <option selected>Shortcodes</option>
    <option value="[row class=&quot;&quot;]">[row]</option>
    <option value="[end-row]">[end-row]</option>
    <option value="[column width=&quot;1of2&quot; class=&quot;&quot;]">[column]</option>
    <option value="[end-column]">[end-column]</option>
    <option value="[html tag=&quot;section&quot; atr=&#39;id=&quot;test&quot;&#39;]">[html]</option>
    <option value="[close-html tag=section]">[close-html]</option>
    <option value="[youtube id=&quot;YE7VzlLtp-4&quot; ratio=&quot;widescreen&quot;]">[youtube]</option>
    <option value="[vimeo id=&quot;6284199&quot; ratio=&quot;widescreen&quot;]">[vimeo]</option>
    <option value="[field name=&quot;custom-field-name&quot;]">[field]</option>
  </select>';
}
add_action('admin_head', 'satus_sc_button_js');

function satus_sc_button_js() {
  echo '<script>
    jQuery(document).ready(function(){
      jQuery("#sc_select").change(function() {
        send_to_editor(jQuery("#sc_select :selected").val());
        return false;
      });
    });
  </script>';
}

?>
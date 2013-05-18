<?php

require_once get_template_directory()   . '/inc/init.php';          // initial theme setup
require_once get_template_directory()   . '/inc/wrap.php';          // theme wrapper
require_once get_stylesheet_directory() . '/inc/config.php';        // theme configuration
require_once get_template_directory()   . '/inc/cleanup.php';       // cleanup wp
require_once get_template_directory()   . '/inc/admin.php';         // admin area functions
require_once get_template_directory()   . '/inc/shortcodes.php';    // shortcodes
require_once get_template_directory()   . '/inc/template-tags.php'; // template tags
require_once get_stylesheet_directory() . '/inc/enqueue.php';       // enqueue scripts and styles
require_once get_template_directory()   . '/inc/custom.php';        // your custom functions

?>
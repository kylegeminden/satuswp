<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
  
  <meta charset="<?php bloginfo('charset'); ?>">
  
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  
  <meta name="viewport" content="width=device-width">
  
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/favicon.ico">
  <?php if (TOUCH_ICONS) : ?>
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-144x144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-57x57-precomposed.png">
  
  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#212121">
  <?php endif; ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vendor/modernizr.js"></script>

  <?php wp_head(); ?>
  
</head>
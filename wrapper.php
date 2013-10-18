<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?> role="document" <?php satus_typeof(); ?>>

<!--[if lte IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php get_template_part('templates/header'); ?>

<div class="wrap">
  <div class="content row">

    <div class="main <?php echo satus_main_class(); ?>" role="main">
      <?php include satus_template_path(); ?>
    </div>
    <!-- /#main -->

    <?php if(satus_display_sidebar()) : ?>
      <aside class="sidebar <?php echo satus_sidebar_class(); ?>" role="complementary">
        <h2 class="visuallyhidden"><?php _e( 'Sidebar', 'satus' ); ?></h2>
        <?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
      </aside>
      <!-- /#sidebar -->
    <?php endif; ?>

  </div>
</div>
<!-- /#content -->

<?php get_template_part('templates/footer'); ?>

</body>
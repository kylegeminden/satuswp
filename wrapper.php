<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?> role="document" <?php satus_typeof(); ?>>

<!--[if lte IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php get_template_part('templates/header'); ?>

<div id="content">

  <div id="main" role="main">
    <?php include satus_template_path(); ?>
  </div>
  <!-- /#main -->

  <?php if(satus_sidebar()) : ?>
    <aside id="sidebar" role="complementary">
      <h2 class="assistive-text"><?php _e( 'Sidebar', 'satus' ); ?></h2>
      <?php get_template_part('templates/sidebar'); ?>
    </aside>
    <!-- /#sidebar -->
  <?php endif; ?>

</div>
<!-- /#content -->

<?php get_template_part('templates/footer'); ?>

</body>
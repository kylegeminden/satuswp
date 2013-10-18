<header class="header" role="banner">
  <div class="row">
    <div class="column width1of1">

      <div class="brand">
        <h1 class="site-title">
          <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <p class="h2 site-description"><?php bloginfo( 'description' ); ?></p>
      </div>

      <nav class="primary-nav" role="navigation">
        <h2 class="visuallyhidden"><?php _e( 'Primary Navigation', 'satus' ); ?></h2>
        <a class="visuallyhidden" href="#main" title="<?php _e('Go to main content', 'satus') ?>"><?php _e('Go to main content', 'satus') ?></a>
        <?php
          if (has_nav_menu('primary_nav')) {
            wp_nav_menu(array(
              'theme_location' => 'primary_nav',
              'depth' => 2,
              'container' => false,
              'items_wrap' => '<ul class="nav">%3$s</ul>'
              // ,
              // 'walker' => new Satus_Navbar_Walker()
            ));
          }
        ?>
      </nav>

    </div>
  </div>
</header>
<!-- /#header -->
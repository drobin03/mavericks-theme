<header class="banner" role="banner">
  <div class="container">

    <nav id="main-nav" role="navigation" class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
            <img src="<?php echo Roots\Sage\Assets\asset_path('images/logo.png') ?>" width="278" height="70" alt="<?php bloginfo('name'); ?>" />
          </a>
        </div>
        <div class="collapse navbar-collapse" id="main-nav-collapse">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
          endif;
          ?>
        </div>
      </div>
    </nav>
  </div>
</header>
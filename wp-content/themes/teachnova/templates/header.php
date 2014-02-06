<header class="navbar-wrapper">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="row">
      <div class="navbar-header col-lg-4 col-md-2 col-sm-12 col-hs-12 col-xs-12">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"></a>
      </div>
      <nav class="collapse navbar-collapse in" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

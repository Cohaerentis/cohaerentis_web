<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php // AAA: logo added for print view?>
  <div class="logo-print visible-print">
    <img src="/assets/img/cohaerentis_header_logo.png"/>
  </div>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    //if (current_theme_supports('bootstrap-top-navbar')) {
    //  get_template_part('templates/header-top-navbar');
    //} else {
    get_template_part('templates/header');
    //}
  ?>
<div class="wrap">
  <div class="container" role="document">
    <div class="content">
      <?php /* AEA - For debugging propuses * /
      wrout("Base template : " . var_export(Roots_Wrapping::$base, true));
      wrout("Main template : " . var_export(Roots_Wrapping::$main_template, true));
      wrout("Frontpage : " . var_export(is_front_page(), true));
      /* */ ?>
      <div class="row">
        <main class="<?php echo roots_main_class(); ?> main" role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->
        <?php if (roots_display_sidebar()) : ?>
          <aside class="wp-sidebar sidebar <?php echo roots_sidebar_class('side'); ?>" role="complementary">
            <?php include roots_sidebar_path('side'); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.row -->
    </div><!-- /.content -->
  </div><!-- /.container -->
</div><!--  /.wrap -->

  <?php /* AEA - Homebar for scrolldown ?>
  <?php if (roots_display_homebar()) : ?>
  <div class="container">
    <div class="row">
      <aside class="wp-sidebar homebar <?php echo roots_sidebar_class('home'); ?>" role="complementary">
        <?php include roots_sidebar_path('home'); ?>
      </aside>
    </div>
  </div>
  <?php endif; */?>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>

<?php
/**
 * Register sidebars and widgets
 */
function roots_widgets_init() {
  register_sidebar(array(
    'name'          => __('Homebar', 'roots'),
    'id'            => 'homebar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-homebar-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'name'          => __('Blog Sidebar', 'roots'),
    'id'            => 'blog-sidebar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-blog-sidebar-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'name'          => __('Post Sidebar', 'roots'),
    'id'            => 'post-sidebar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-post-sidebar-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'name'          => __('Footer Col 1', 'roots'),
    'id'            => 'one-footerbar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-one-footerbar-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'name'          => __('Footer Col 2', 'roots'),
    'id'            => 'two-footerbar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-two-footerbar-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'name'          => __('Footer Col 3', 'roots'),
    'id'            => 'three-footerbar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-three-footerbar-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'name'          => __('Footer Col 4', 'roots'),
    'id'            => 'four-footerbar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-four-footerbar-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'name'          => __('Footer Col 5', 'roots'),
    'id'            => 'five-footerbar',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<div class="widget-five-footerbar-title">',
    'after_title'   => '</div>',
  ));

  // Register widgets
  register_widget('Roots_Vcard_Widget');
  register_widget('TN_NGG_Slider_Widget');
  register_widget('TN_Embed_Page_Widget');
  register_widget('TN_Embed_Image_Widget');
}
add_action('widgets_init', 'roots_widgets_init');

require_once locate_template('/lib/widgets-roots-vcard.php');     // Roots Vcard
require_once locate_template('/lib/widgets-tn-ngg-slider.php');   // Teachnova NGG Gallery Slider
require_once locate_template('/lib/widgets-tn-embedpage.php');    // Teachnova Embed Page
require_once locate_template('/lib/widgets-tn-embedimage.php');   // Teachnova Embed Image

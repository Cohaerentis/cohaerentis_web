<?php
/**
 * Enable theme features
 */
add_theme_support('root-relative-urls');    // Enable relative URLs
add_theme_support('bootstrap-top-navbar');  // Enable Bootstrap's top navbar
add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
add_theme_support('nice-search');           // Enable /?s= to /search/ redirect
add_theme_support('jquery-cdn');            // Enable to load jQuery from the Google CDN

/**
 * Configuration values
 */
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y (Note: Universal Analytics only, not Classic Analytics)
define('POST_EXCERPT_LENGTH', 40); // Length in words for excerpt_length filter (http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length)

/**
 * .main classes
 */
function roots_main_class() {
  if (roots_display_sidebar()) {
    // Classes on pages with the sidebar
    $class = 'col-lg-8 col-md-8 col-sm-8 col-xs-12';
  } else {
    // Classes on full width pages
    $class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
  }

  return $class;
}

function roots_template_class() {
   switch (Roots_Wrapping::$base) {
      default:           return '';
   }
   return '';
}

/**
 * .sidebar classes
 */
// AEA - Multiple sidebars
function roots_sidebar_class($type = 'side') {
  switch($type) {
    case 'home' :         return roots_main_class();
    case 'one-footer' :   return 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
    case 'two-footer' :   return 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
    case 'three-footer' : return 'col-lg-2 col-md-2 col-sm-4 col-xs-12';
    case 'four-footer' :  return 'col-lg-2 col-md-2 col-sm-4 col-xs-12';
    case 'five-footer' :  return 'col-lg-2 col-md-2 col-sm-4 col-xs-12';
    case 'side' :
    default:              return 'col-lg-4 col-md-4 col-sm-4 col-xs-12';
  }
}

/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */
function roots_display_sidebar() {
  $sidebar_config = new Roots_Sidebar(
    'side',
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_404',
      'is_front_page',
      'is_page'
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array()
  );

  return apply_filters('roots_display_sidebar', $sidebar_config->display);
}

// AEA - Homebar config
function roots_display_homebar() {
  $sidebar_config = new Roots_Sidebar('home', array(), array());
  return apply_filters('roots_display_homebar', $sidebar_config->display);
}

// AEA - Footerbar config
function roots_display_footerbar($extra) {
  $sidebar_config = new Roots_Sidebar('footer', array(), array(), $extra);
  return apply_filters('roots_display_footerbar', $sidebar_config->display, $extra);
}

/**
 * $content_width is a global variable used by WordPress for max image upload sizes
 * and media embeds (in pixels).
 *
 * Example: If the content area is 640px wide, set $content_width = 620; so images and videos will not overflow.
 * Default: 1140px is the default Bootstrap container width.
 */
if (!isset($content_width)) { $content_width = 1140; }

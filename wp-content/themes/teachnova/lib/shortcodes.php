<?php
/**
 * Register shortcodes
 */
$prefix = 'tn_';

/**
 * [tn_taxonomy_mosaic] shortcode
 *
 * Show a mosaic of terms from a taxonomy, showing its infographic
 * and link to the taxonomy page
 *
 * Example:
 * [tn_taxonomy_mosaic name='experience']
 */
function tn_shortcode_taxonomy_mosaic($atts) {
   extract(shortcode_atts(array(
      'name'         => '',   // Taxonomy name
      'imgfield'     => '',   // Infographic meta-box field
      'imgsize'      => 'thumbnail', // Size of infographic
      'desc'         => 'no', // yes/no
      'grid'         => 'yes', // yes/no apply bootstrap col-XX grid
      'lg'           => '2',  // Large devices
      'md'           => '4',  // Medium devices
      'sm'           => '6',  // Small devices // AAA sd -> sm
      'hs'           => '6',  // AAA: Horizontal Small devices
      'xs'           => '6',  // Extra small devices
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   if (empty($imgfield)) $imgfield = $name . '_infographic';
   $desc = (strtolower($desc) == 'yes') ? true : false;
   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-taxonomy-mosaic.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'taxonomy_mosaic', 'tn_shortcode_taxonomy_mosaic');

/**
 * [tn_customers_slider] shortcode
 *
 * Show a slider of customers
 *
 * Example:
 * [tn_customers_slider max='16']
 */
function tn_shortcode_customers_slider($atts) {
   extract(shortcode_atts(array(
      'max'          => 16,
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-customers-slider.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'customers_slider', 'tn_shortcode_customers_slider');

/**
 * [tn_person_snippet] shortcode
 *
 * Show a slider of customers
 *
 * Example:
 * [tn_person_snippet slug='elena-perez']
 */
function tn_shortcode_person_snippet($atts) {
   extract(shortcode_atts(array(
      'slug'         => '',
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-person-snippet.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'person_snippet', 'tn_shortcode_person_snippet');

/**
 * [tn_partner_snippet] shortcode
 *
 * Show a slider of customers
 *
 * Example:
 * [tn_partner_snippet slug='teresa-quintano']
 */
function tn_shortcode_partner_snippet($atts) {
   extract(shortcode_atts(array(
      'slug'         => '',
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-partner-snippet.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'partner_snippet', 'tn_shortcode_partner_snippet');

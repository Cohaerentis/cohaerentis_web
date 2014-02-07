<?php
/**
 * Custom shortcodes
 */

$prefix = 'tn_';

/**
 * [tn_follow] shortcode
 *
 * Follow links
 *  - title       : h3 title
 *  - description : p description
 *  - fb          : Facebook
 *  - tt          : Twitter
 *  - gp          : Google+
 *  - in          : Linkedin
 *  - yt          : YouTube
 *  - ss          : SlideShare
 *  - fr          : Flickr
 *  - rss         : RSS
 *
 * Example:
 * [tn_follow]
 */
function tn_shortcode_follow($atts) {
   extract(shortcode_atts(array(
      'title' => '',
      'description' => '',
      'fb' => '',
      'tt' => '',
      'gp' => '',
      'in' => '',
      'yt' => '',
      'ss' => '',
      'fr' => '',
      'rss' => ''
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-follow.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'follow', 'tn_shortcode_follow');

/**
 * [tn_yt_videos_mosaic] shortcode
 *
 * Mosaic of last YouTube videos
 *  - n       : Number of videos (default 8)
 *  - ytuser  : YouTube username
 *
 * Example:
 * [tn_yt_videos_mosaic ytuser="youruserid"]
 */
function tn_shortcode_yt_videos_mosaic($atts) {
   extract(shortcode_atts(array(
      'ytuser' => '',
      'n' => 8,
      'title_crop' => 18,
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-yt-videos-mosaic.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'yt_videos_mosaic', 'tn_shortcode_yt_videos_mosaic');

/**
 * [tn_modal] shortcode
 *
 * Example:
 * [tn_modal type='hotelchain']
 */
function tn_shortcode_modal($atts, $content) {
   extract(shortcode_atts(array(
      'title'        => '',
      'btn_label'    => 'Open Modal',
      'btn_type'     => 'primary',
      'btn_size'     => 'lg',
      'btn_p_class'  => '',
      'css_class'    => '',
      'css_id'       => '',
      'submit_link'  => '',
      'submit_label' => 'Submit',
      'submit_type'  => 'primary',
      'submit_size'  => 'lg',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-modal.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'modal', 'tn_shortcode_modal');

/**
 * [tn_glyphicon] shortcode
 *
 * Example:
 * [tn_glyphicon name='info-circle']
 */
function tn_shortcode_glyphicon($atts) {
   extract(shortcode_atts(array(
      'type'         => 'regular', // regular, halflings, social, filetypes
      'name'         => 'info',
      'tag'          => 'i',
      'href'         => '',
      'color'        => '',
      'spin'         => 'no', // yes, no
      'rotate'       => '',   // rotate-90, rotate-180, rotate-270, flip-horizontal, flip-vertical
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-glyphicon.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'glyphicon', 'tn_shortcode_glyphicon');

/**
 * [tn_fa_icon] shortcode
 *
 * Example:
 * [tn_fa_icon name='info-circle']
 */
function tn_shortcode_fa_icon($atts) {
   extract(shortcode_atts(array(
      'name'         => 'info',
      'tag'          => 'i',
      'href'         => '',
      'color'        => '',
      'size'         => '',   // lg, x2, x3, x4, x5
      'border'       => 'no', // yes, no
      'fixed_width'  => 'no', // yes, no
      'spin'         => 'no', // yes, no
      'rotate'       => '',   // rotate-90, rotate-180, rotate-270, flip-horizontal, flip-vertical
      'stack'        => '',   // x1, x2, x3, x4, x5
      'inverse'      => 'no', // yes, no
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-fa-icon.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'fa_icon', 'tn_shortcode_fa_icon');

/**
 * [tn_fa_stack] shortcode
 *
 * Example:
 * [tn_fa_stack]
 */
function tn_shortcode_fa_stack($atts, $content) {
   extract(shortcode_atts(array(
      'size'         => '', // lg, x2, x3, x4, x5
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-fa-stack.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'fa_stack', 'tn_shortcode_fa_stack');

/**
 * [tn_icon_box] shortcode
 *
 * Example:
 * [tn_icon_box]
 */
function tn_shortcode_tn_icon_box($atts, $content) {
   extract(shortcode_atts(array(
      'label'        => '',
      'href'         => '',
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-icon-box.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'icon_box', 'tn_shortcode_tn_icon_box');

/**
 * [tn_p] shortcode
 *
 * Example:
 * [tn_p css_class="featured"]
 */
function base_shortcode_tn_p($atts, $content) {
   extract(shortcode_atts(array(
      'css_id'       => '',
      'css_class'    => '',
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-p.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'p', 'base_shortcode_tn_p');

/**
 * [tn_br] shortcode
 *
 * Example:
 * [tn_br]
 */
function base_shortcode_tn_br($atts, $content) {
   extract(shortcode_atts(array(
   ), $atts));

   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-br.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'br', 'base_shortcode_tn_br');

function base_shortcode_tn_gmap( $atts = null, $content = null ) {
   extract(shortcode_atts(array(
      'width'        => 600,
      'height'       => 400,
      'responsive'   => 'yes',
      'address'      => 'New York',
      'display'      => 'l',  // q (standard layout), d (for directions) or l (for local)
      'zoom'         => '12', // Zoom from 0 to 23, samples:
                        // 12 for big city
                        // 15 for street
      'type'         => 'm', // m – normal  map, k – satellite, h – hybrid, p – terrain
      'layer'        => '', // t for traffic or c for street view, or tc for both at the same time.
      'view'         => 'map', // Controls the view type. Set to text for text, or map for map.
      'info'         => 'near', // A-J – opens the info window over a business marker
                        // near – puts it over the green arrow (when shown)
                        // addr – places it over a set address (the default value)
                        // start, end and pausex – for use in driving directions, where x is the number of the point in question
      'expinfo'      => '1', // Sets the info window to expanded view when set to 1.
      'lang'         => 'es', // Language
      'print'        => '', // Print mode
      'css_class'    => '',
      'css_id'       => '',
   ), $atts));
   ob_start();
   include(dirname(dirname(__FILE__)) . '/templates/shortcode-tn-gmap.php');
   $html = ob_get_clean();
   return preg_replace('(\n|\r)', ' ', $html);
}
add_shortcode($prefix . 'gmap', 'base_shortcode_tn_gmap');

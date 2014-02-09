<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

function osc_theme_image($params, $content = 'Label') {
    extract(shortcode_atts(array(
                'src' => '',
                'css_class' => '',
                'shape' => ''
                    ), $params));
    $out = '';


    $out = '<img src="' . $src . '" class="' . $css_class .' '. $shape . '">';

    return $out;
}

add_shortcode('image', 'osc_theme_image');


<?php

function osc_theme_iconhead($params, $content = null) {
    extract(shortcode_atts(array(
                'css_class' => '',
                'style' => '',
                'type' => 'h1',
                'color'=>''
                    ), $params));
    $out = '';
    if($color!=''){
        $color='style="color:'.$color.';"';
    }
    if ($style != '') {
        $style = ' <span class="glyphicon ' . $style . '" '.$color.'></span> ';
    }
    if ($css_class != '') {
        $css_class = ' class="' . $css_class . '"';
    }
    $out = '<' . $type . $css_class . '>' . $style . do_shortcode($content) . '</' . $type . '>';

    return $out;
}

add_shortcode('iconheading', 'osc_theme_iconhead');


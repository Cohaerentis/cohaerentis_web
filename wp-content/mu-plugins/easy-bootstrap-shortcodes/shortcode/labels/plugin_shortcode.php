<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

function osc_theme_labels($params, $content = 'Label') {
    extract(shortcode_atts(array(
                'type' => 'label-default',
                'css_class' => ''
                    ), $params));
    $out = '';
    $content = str_replace("<br />", '', $content);
    $content = str_replace("<br />\n", '', $content);
    $out = '<span class="label ' . $type . ' ' . $css_class . '">' . do_shortcode($content) . '</span>';
    return $out;
}

add_shortcode('label', 'osc_theme_labels');


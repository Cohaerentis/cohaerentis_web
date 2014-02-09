<?php

function osc_theme_btngrp($params, $content = null) {
    extract(shortcode_atts(array(
                'style' => '',
                'css_class' => ''
                    ), $params));
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("]<br />\n", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    if ($style =='vertical') {
	    $out = '<div class="btn-group-vertical '  . $css_class . '">' . do_shortcode($content) . '</div>';
    } elseif ($style =='justified') {
	    $out = '<div class="btn-group btn-group-justified '  . $css_class . '">' . do_shortcode($content) . '</div>';
    }else{
	    $out = '<div class="btn-group '  . $css_class . '">' . do_shortcode($content) . '</div>';
    }


    return $out;
}

add_shortcode('buttongroup', 'osc_theme_btngrp');

?>
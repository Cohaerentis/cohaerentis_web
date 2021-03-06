<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

function osc_theme_button($params, $content = null) {
    extract(shortcode_atts(array(
                'title' => 'osCitas',
                'link' => '',
                'type' => 'link',
                'style' => '',
                'align' => '',
                'target' => '',
                'icon' => '',
                // AEA - Rename 'class' parameter by 'css_class'
                'css_class' => '',
        'iconcolor'=>''
                    ), $params));
    $out = '';
    if($icon!=''){
        if($iconcolor!=''){
            $iconcolor='style="color:'.$iconcolor.';"';
        }
        if($align=='right'){
            $value=$title.' <i class="glyphicon '.$icon.'" '.$iconcolor.'></i>';
        } else{
            $value='<i class="glyphicon '.$icon.'" '.$iconcolor.'></i> '.$title;
        }
    }else{
        $value=$title;
    }
    $target = ' target="'.($target != 'false' ? '_blank':'_self').'"';
    if ($type == 'link') {
        // AEA - Rename 'class' parameter by 'css_class'
        $out = '<a class="btn ' . $style . ' ' . $css_class.EBS_CONTAINER_CLASS . '" href="' . $link . '" ' . ($target) . '>' . $value . '</a>';
    } elseif ($type == 'button') {
        // AEA - Rename 'class' parameter by 'css_class'
        $out = '<button class="btn ' . $style . ' ' . $css_class.EBS_CONTAINER_CLASS . '" >' . $value . '</button>';
    }
    return $out;
}

add_shortcode('button', 'osc_theme_button');


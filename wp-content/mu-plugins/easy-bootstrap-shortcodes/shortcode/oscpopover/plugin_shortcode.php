<?php

function osc_theme_popover($params, $content = 'Popover') {
    extract(shortcode_atts(array(
                'trigger' => '',
                'title' => '',
                'pop_content' => '',
                'style' => '',
                'size' => '',
                'type' => '',
                // AEA - Rename 'class' parameter by 'css_class'
                'css_class' => ''
                    ), $params));
    $out = '';
    // AEA - Rename 'class' parameter by 'css_class'
    $out = '<button class="osc_popover btn ' . $size . ' ' . $type . ' ' . $css_class .EBS_CONTAINER_CLASS. '" data-content="' . $pop_content . '" data-placement="' . $style . '" data-toggle="popover" data-trigger="' . $trigger . '" data-container="body" type="button" data-title="' . $title . '"> ' . do_shortcode($content) . ' </button>';

if(EBS_POPOVER_TEMPLATE==''){
    $out .= "
    <script>
       jQuery(document).ready(function(){
        jQuery('.osc_popover').popover();
        });
    </script>
    ";


} else{
    $out .= "
    <script>
       jQuery(document).ready(function(){
        jQuery('.osc_popover').popover({template:'".EBS_POPOVER_TEMPLATE."'});
        });
    </script>
    ";
}
    return $out;
}

add_shortcode('popover', 'osc_theme_popover');
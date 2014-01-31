<?php
    $param_id = '';
    if (!empty($css_id)) $param_id = 'id="' . $css_id . '"';
    $tag = 'div';
    $param_href = '';
    if (!empty($href)) {
        $tag = 'a';
        $param_href = 'href="' . $href . '"';
    }
?>
<<?php echo $tag; ?> class="icon-box <?php echo $css_class; ?>"
 <?php echo $param_id; ?>
 <?php echo $param_href; ?> >
    <?php echo do_shortcode($content); ?>
    <?php if (!empty($label)) : ?>
    <div class="icon-box-label">
        <p><?php echo $label; ?></p>
    </div>
    <?php endif; ?>
</<?php echo $tag; ?>>
<?php
    $param_id = '';
    if (!empty($css_id)) $param_id = 'id="' . $css_id . '"';
?>
<div class="icon-box <?php echo $css_class; ?>" <?php echo $param_id; ?> >
    <?php echo do_shortcode($content); ?>
    <?php if (!empty($label)) : ?>
    <div class="icon-box-label">
        <p><?php echo $label; ?></p>
    </div>
    <?php endif; ?>
</div>
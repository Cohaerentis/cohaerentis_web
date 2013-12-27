<?php
    $args = array(
        'orderby'          => 'name',
        'order'            => 'ASC',
        'hide_empty'       => false,
    );
    $terms = get_terms($name, $args);
    $meta = get_option($name . '_section');
    if (empty($meta)) $meta = array();
    if (!is_array($meta)) $meta = (array) $meta;

    if (!empty($terms)) {
        foreach($terms as $term) {
            $metaterm = isset($meta[$term->term_id]) ? $meta[$term->term_id] : array();

            $image = null;
            $images = $metaterm[$imgfield];
            if (!empty($images[0])) $image = wp_get_attachment_image_src($images[0], $size);
            if (!empty($image[0])) $term->src = $image[0];

            $term->label = $term->name;
            $term->url = get_term_link($term, $name);
        }
    }
    $item_class = 'col-lg-' . $lg . ' col-md-'. $md . ' col-sd-'. $sd . ' col-xs-'. $xs;
?>
<?php if (!empty($terms)) : ?>
<div class="tn-taxonomy-mosaic container <?php echo $css_class; ?>" <?php if (!empty($css_id)) : ?>id="<?php echo $css_id; ?>"<?php endif; ?>>
    <div class="row">
    <?php foreach ($terms as $term) : if (!empty($term->src)) : ?>
        <div class="tn-taxonomy-term <?php echo $item_class; ?>">
            <?php if ($desc) : ?>
                <a href="<?php echo $term->url; ?>">
                    <img src="<?php echo $term->src; ?>" class="img-responsive"
                         alt="<?php echo $term->label; ?>" title="<?php echo $term->label; ?>">
                </a>
                <div class="tn-taxonomy-description"><?php echo $term->description; ?></div>
                <a href="<?php echo $term->url; ?>" class="tn-taxonomy-label">
                    <?php echo $term->label; ?>
                </a>
            <?php else : ?>
                <a href="<?php echo $term->url; ?>">
                    <img src="<?php echo $term->src; ?>" class="img-responsive"
                         alt="<?php echo $term->label; ?>" title="<?php echo $term->label; ?>">
                    <div class="tn-taxonomy-label"><?php echo $term->label; ?></div>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; endforeach; ?>
    </div>
</div>
<?php endif; ?>

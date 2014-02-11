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
            $term->icon = $metaterm[$name . '_glyphicon'];
        }
    }
    $item_class = 'col-lg-' . $lg . ' col-md-'. $md . ' col-sm-'. $sm . ' col-hs-'. $hs . ' col-xs-'. $xs;
?>

<?php if (!empty($terms)) : ?>
<div class="tn-taxonomy-mosaic <?php echo $css_class; ?>" <?php if (!empty($css_id)) : ?>id="<?php echo $css_id; ?>"<?php endif; ?>>
    <div class="row">
    <?php foreach ($terms as $term) : if (!empty($term->src) || !empty($term->icon)) : ?>
        <div class="tn-taxonomy-term <?php echo $item_class; ?>">
                <a class="tn-taxonomy-box" href="<?php echo $term->url; ?>">
                    <?php if(!empty($term->icon)): ?>
                        <div class="box-icon">
                            <i class="glyphicons <?php echo $term->icon; ?>"></i>
                        </div>
                     <?php else: ?>
                        <div class="box-img">
                            <img src="<?php echo $term->src; ?>" class="img-responsive"
                             alt="<?php echo $term->label; ?>" title="<?php echo $term->label; ?>">
                        </div>
                     <?php endif; ?>
                    <div class="box-label"><?php echo $term->label; ?></div>
                </a>
            <?php if ($term->description) : ?>
                <div class="tn-taxonomy-description ellipsis"><?php echo $term->description; ?></div>
            <?php endif; ?>
        </div>
    <?php endif; endforeach; ?>
    </div>
</div>
<?php endif; ?>

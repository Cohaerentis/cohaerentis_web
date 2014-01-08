<pre>
    TODO
    Taxonomy: Experience
    File: content-experience
</pre>
<?php
    $experience = get_query_var('experience');
    $term = get_term_by('slug', $experience, 'experience');
    global $customers, $showmax;
    $showmax = 16;
    $customers = array();

    if (!empty($term)) {
        $meta = get_option('experience_section');
        if (empty($meta)) $meta = array();
        if (!is_array($meta)) $meta = (array) $meta;
        $metaterm = isset($meta[$term->term_id]) ? $meta[$term->term_id] : array();

        $image = null;
        $images = $metaterm['experience_infographic'];
        if (!empty($images[0])) $image = wp_get_attachment_image_src($images[0], 'medium');
        if (!empty($image[0])) $term->src = $image[0];

        $term->content = do_shortcode($metaterm['experience_content']);

        $args = array(
            'experience'  => $term->slug,
            'post_type'   => 'customer',
            'post_status' => 'publish',
        );
        $customers = get_posts($args);
        shuffle($customers);
        if (!empty($customers)) {
            foreach($customers as $customer) {
                $title = trim(strip_tags($customer->post_title));
                $attr = array('class' => 'img-responsive',
                              'alt'   => $title,
                              'title' => $title);
                $customer->img = get_the_post_thumbnail($customer->ID, 'thumbnail', $attr);
                $customer->url = get_post_meta( $customer->ID, 'customer_url', true );
            }
        }
    }
?>
<?php if (!empty($term)) : ?>
    <article <?php post_class() ?> id="experience-<?php echo $term->term_id; ?>">
        <div class="page-header">
            <h1 class="entry-title"><?php echo $term->name; ?></h1>
        </div>
        <div class="entry-content">
            <?php echo $term->content; ?>
        </div>
        <div class="entry-meta">
            <div class="row">
                <div class="experience-slider col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <?php get_template_part('templates/element-customers-slider'); ?>
                </div>
                <div class="experience-image col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <img src="<?php echo $term->src; ?>" class="img-responsive">
                </div>
            </div>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-noresults'); ?>
<?php endif; ?>


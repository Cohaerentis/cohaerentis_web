<?php /* <pre>
    Taxonomy: Service
    File: content-service
</pre> */ ?>
<?php
    $service = get_query_var('service');
    $term = get_term_by('slug', $service, 'service');
    global $subservices;
    $subservices = array();

    if (!empty($term)) {
        $meta = get_option('service_section');
        if (empty($meta)) $meta = array();
        if (!is_array($meta)) $meta = (array) $meta;
        $metaterm = isset($meta[$term->term_id]) ? $meta[$term->term_id] : array();

        $content = (!empty($metaterm['service_content'])) ? $metaterm['service_content'] : '';

        $args = array(
            'service'  => $term->slug,
            'post_type'   => 'subservice',
            'post_status' => 'publish',
        );
        $subservices = get_posts($args);
        shuffle($subservices);
        if (!empty($subservices)) {
            foreach($subservices as $subservice) {
                $title = trim(strip_tags($subservice->post_title));
                $attr = array('class' => 'img-responsive',
                              'alt'   => $title,
                              'title' => $title);
                $subservice->img = get_the_post_thumbnail($subservice->ID, 'thumbnail', $attr);
                $subservice->url = get_permalink( $subservice->ID );
            }
        }
    }
?>
<?php if (!empty($term)) : ?>
    <article id="service-<?php echo $term->term_id; ?>">
        <div class="header service">
            <div class="title">
                <h1><?php echo $term->name; ?></h1>
            </div>
            <div class="subtitle">
                <p><?php echo do_shortcode($term->description); ?></p>
            </div>
        </div>
        <div class="entry-content">
            <div class="services-mosaic">
                <?php get_template_part('templates/element-subservices-mosaic'); ?>
            </div>
        </div>
    </article>

<?php else : ?>
   <?php get_template_part('templates/element-noresults'); ?>
<?php endif; ?>


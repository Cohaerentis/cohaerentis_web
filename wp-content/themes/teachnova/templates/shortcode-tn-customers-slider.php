<?php
    global $customers, $showmax;
    $showmax = $max;
    $customers = array();

    $args = array(
        'posts_per_page' => $max,
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
?>
<?php get_template_part('templates/element-customers-slider'); ?>

<?php
    $partner = null;
    $args = array(
        'name'        => $slug,
        'post_type'   => 'partner',
        'post_status' => 'publish'
    );
    $partners = get_posts($args);

    if (!empty($partners)) {
        $partner     = $partners[0];
        $name        = $partner->post_title;
        $url         = get_permalink($partner->ID);
        $position    = $partner->post_excerpt;
        $website     = get_post_meta( $partner->ID, 'partner_website', true );
        $blog        = get_post_meta( $partner->ID, 'partner_blog', true );
        $facebook    = get_post_meta( $partner->ID, 'partner_facebook', true );
        $twitter     = get_post_meta( $partner->ID, 'partner_twitter', true );
        $linkedin    = get_post_meta( $partner->ID, 'partner_linkedin', true );
    }
?>
<?php if (!empty($partner)) : ?>
    TODO : Partner = <a href="<?php echo $url; ?>"><?php echo $name; ?></a>
<?php else : ?>
    TODO : Partner not found for slug = <?php echo $slug; ?>
<?php endif; ?>

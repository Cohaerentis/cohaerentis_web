<?php
    $person = null;
    $args = array(
        'name'        => $slug,
        'post_type'   => 'person',
        'post_status' => 'publish'
    );
    $persons = get_posts($args);

    if (!empty($persons)) {
        $person     = $persons[0];
        $name       = $person->post_title;
        $url        = get_permalink($person->ID);
        $position   = $person->post_excerpt;
        $mobile     = get_post_meta( $person->ID, 'person_mobile', true );
        $email      = get_post_meta( $person->ID, 'person_email', true );
        $skype      = get_post_meta( $person->ID, 'person_skype', true );
        $blog       = get_post_meta( $person->ID, 'person_blog', true );
        $twitter    = get_post_meta( $person->ID, 'person_twitter', true );
        $linkedin   = get_post_meta( $person->ID, 'person_linkedin', true );
    }
?>
<?php if (!empty($person)) : ?>
    TODO : Person = <a href="<?php echo $url; ?>"><?php echo $name; ?></a>
<?php else : ?>
    TODO : Person not found for slug = <?php echo $slug; ?>
<?php endif; ?>

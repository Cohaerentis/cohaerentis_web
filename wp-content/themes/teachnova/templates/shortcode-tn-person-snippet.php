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
        $photo      = get_the_post_thumbnail($person->ID, 'medium', $attr);
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
    <div class="content-team">
        <ul>
            <li><?php echo $photo; ?></li>
        </ul>
        <ul class="social-icons">
            <li id="name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
            <li><?php echo $position; ?></li>
            <li class="social"><span style="font-size: 30px;"><a href="#" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span></li>
            <li class="social"><span style="font-size: 30px;"><a href="#" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span></li>
            <li class="social"><span style="font-size: 30px;"><a href="#" class="fa fa-rss-square"><span style="color: transparent; display: none;">icon-rss</span></a></span></li>
            <li class="social"><span style="font-size: 30px;"><a href="#" class="fa fa-facebook-square"><span style="color: transparent; display: none;">icon-facebook</span></a></span></li>
            <li class="social"><span style="font-size: 30px;"><a href="#" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span></li>
        </ul>
    </div>
<?php else : ?>
    TODO : Person not found for slug = <?php echo $slug; ?>
<?php endif; ?>

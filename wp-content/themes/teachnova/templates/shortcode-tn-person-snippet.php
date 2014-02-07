<?php
    $person = null;
    $args = array(
        'name'        => $slug,
        'post_type'   => 'person',
        'post_status' => 'publish'
    );
    /*$attr = array(
        'class'       =>'img-responsive'
    );*/
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
    <div class="row content-team">
        <div class="col-lg-4 col-md-4 col-sm-4 col-hs-4 col-xs-12 person-img">
            <a href="<?php echo $url;?>"><?php echo $photo; ?></a>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-hs-8 col-xs-12">
            <div class="row person-info">
                <div class="info-marker-person"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 person-info-name">
                    <span class="name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></span>
                    <p><?php echo $position; ?></p>
                </div>
                <hr>
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 social-media">
                    <ul class="social-icons">
                        <li class="social"><a href="#"><i class="glyphicons-social linked_in"></i></a></li>
                        <li class="social"><a href="#"><i class="glyphicons-social twitter"></i></a></li>
                        <li class="social"><a href="#"><i class="glyphicons-social rss"></i></a></li>
                        <li class="social"><a href="#"><i class="glyphicons-social facebook"></i></a></li>
                        <li class="social"><a href="#"><i class="glyphicons-social google_plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    TODO : Person not found for slug = <?php echo $slug; ?>
<?php endif; ?>

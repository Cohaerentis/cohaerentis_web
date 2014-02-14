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
        $facebook   = get_post_meta( $person->ID, 'person_facebook', true );
        $googleplus = get_post_meta( $person->ID, 'person_googleplus', true );
    }
?>
<?php if (!empty($person)) : ?>
    <div class="row tn-person">
        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-offset-0 col-hs-3 col-hs-offset-2 col-xs-12">
            <div class="tn-person-img">
                <a href="<?php echo $url;?>"><?php echo $photo; ?></a>
            </div>
        </div>
        <div class="tn-person-clearfix"></div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-hs-7 col-xs-12">
            <div class="tn-person-info">
                <div class="tn-person-info-wrapper">
                    <div class="tn-person-info-marker"></div>
                    <div class="tn-person-name">
                        <span class="name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></span>
                        <p class="position"><?php echo $position; ?></p>
                    </div>
                    <div class="tn-person-separator"></div>
                    <div class="tn-person-social">
                        <ul>
                            <?php if (!empty($linkedin)) : ?><li><a href="<?php echo $linkedin; ?>" class="glyphicons-social linked_in"></a></li><?php endif; ?>
                            <?php if (!empty($twitter)) : ?><li><a href="<?php echo $twitter; ?>" class="glyphicons-social twitter"></a></li><?php endif; ?>
                            <?php if (!empty($blog)) : ?><li><a href="<?php echo $blog; ?>" class="glyphicons-social rss"></a></li><?php endif; ?>
                            <?php if (!empty($facebook)) : ?><li><a href="<?php echo $facebook; ?>" class="glyphicons-social facebook"></a></li><?php endif; ?>
                            <?php if (!empty($googleplus)) : ?><li><a href="<?php echo $googleplus; ?>" class="glyphicons-social google_plus"></a></li><?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    TODO : Person not found for slug = <?php echo $slug; ?>
<?php endif; ?>

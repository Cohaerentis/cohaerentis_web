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
        $logo        = get_the_post_thumbnail($partner->ID, 'medium', $attr);
    }
?>
<?php if (!empty($partner)) : ?>
    <div class="row tn-partner">
        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-offset-0 col-hs-3 col-hs-offset-2 col-xs-12">
            <div class="tn-partner-img">
                <a href="<?php echo $url;?>"><?php echo $logo; ?></a>
            </div>
        </div>
        <div class="tn-partner-clearfix"></div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-hs-7 col-xs-12">
            <div class="tn-partner-info">
                <div class="tn-partner-info-wrapper">
                    <div class="tn-partner-info-marker"></div>
                    <div class="tn-partner-name">
                        <span class="name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></span>
                        <p class="position"><?php echo $position; ?></p>
                    </div>
                    <div class="tn-partner-separator"></div>
                    <div class="tn-partner-social">
                        <ul>
                            <?php if (!empty($website)) : ?><li><a href="<?php echo $website; ?>" class="glyphicons global"></a></li><?php endif; ?>
                            <?php if (!empty($blog)) : ?><li><a href="<?php echo $blog; ?>" class="glyphicons-social rss"></a></li><?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    TODO : partner not found for slug = <?php echo $slug; ?>
<?php endif; ?>

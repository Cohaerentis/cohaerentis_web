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
        $logo       = get_the_post_thumbnail($partner->ID, 'thumbnail', $attr);
    }
?>
<?php if (!empty($partner)) : ?>
<div class="content-partners">
        <ul>
            <li><?php echo $logo;?></li>
        </ul>
        <ul class="social-icons">
            <li id="name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
            <li><?php echo $position; ?></li>
            <li class="social"><span style="font-size: 30px;"><a href="#" class="fa fa-globe"><span style="color: transparent; display: none;">icon-globe</span></a></span></li>
            <li class="social"><span style="font-size: 30px;"><a href="#" class="fa fa-rss-square"><span style="color: transparent; display: none;">icon-rss</span></a></span></li>
         </ul>
    </div>
<?php else : ?>
    TODO : Partner not found for slug = <?php echo $slug; ?>
<?php endif; ?>

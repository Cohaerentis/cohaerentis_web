<pre>
    TODO
    Post-type: Person
    File: content-person
</pre>
<?php
/* AEA - For debugging propuses * /
ini_set( 'error_reporting', -1 );
ini_set( 'display_errors', 'On' );
/* */
?>
<?php if (have_posts()) : the_post(); ?>
<?php
    $name       = get_the_title();
    $position   = get_the_excerpt();
    $mobile     = get_post_meta( $post->ID, 'person_mobile', true );
    $email      = get_post_meta( $post->ID, 'person_email', true );
    $skype      = get_post_meta( $post->ID, 'person_skype', true );
    $blog       = get_post_meta( $post->ID, 'person_blog', true );
    $twitter    = get_post_meta( $post->ID, 'person_twitter', true );
    $linkedin   = get_post_meta( $post->ID, 'person_linkedin', true );
    $attr = array(
        'position'      => $position,
        'email'         => $email,
        'mobile'        => $mobile,
        'organization'  => 'Cohaerentis SL'
    );

    $vcard      = TN_vCard::person($name, $attr);
    $vcard_url  = '/vcard.php?id=' . $post->ID;
    $qr         = TN_QR::encode($vcard);
    $attr = array('class' => 'img-responsive',
                  'alt'   => $name,
                  'title' => $name);
    $photo      = get_the_post_thumbnail($post->ID, 'medium', $attr);
?>
<article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 single-person">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 single-person-info">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-hs-4 col-xs-12 single-person-photo ">
                            <?php echo $photo; ?>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-8 col-hs-8 col-xs-12 single-person-contact">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-person-contact-info">
                                <p id="name" class="name"><?php the_title(); ?></p>
                                <div class="info-marker-person"></div>
                                <p class="position"><?php echo $position; ?></p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 col-hs-8 col-xs-12 person-social ">
                                <ul>
                                    <li><a href="<?php echo $vcard_url; ?>" title="vcard"><i class="glyphicons nameplate_alt"></i><span class="descr"> Vcard</span></a></li>
                                    <li><a href="#" title="linkedin"><i class="glyphicons-social linked_in"></i><span class="descr"> LinkedIn</span></a></li>
                                    <li><a href="#" title="twitter"><i class="glyphicons-social twitter"></i><span class="descr"> Twiter</span></a></li>
                                    <li><a href="#" title="rss"><i class="glyphicons-social rss"></i><span class="descr"> RSS</span></a></li>
                                    <li><a href="#" title="facebook"><i class="glyphicons-social facebook"></i><span class="descr"> Facebook</span></a></li>
                                    <li><a href="#" title="google plus"><i class="glyphicons-social google_plus"></i> <span class="descr"> Google plus</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-person-content">
                    <?php the_content();?>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 share-qr">
                    <div class="row">
                        <?php get_template_part('templates/element-social-share'); ?>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-5 hidden-xs person-qr">
                            <img src="<?php echo $qr; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?/*
  <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page-header single-person">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-hs-4 col-xs-12 single-person-photo ">
                    <?php echo $photo; ?>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-8 col-hs-8 col-xs-12 single-person-contact ">
                    <div class="row">
                        <p class="name"><?php the_title(); ?></p>
                        <div class="info-marker-person"></div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-hs-12 col-xs-12 single-person-qr ">
                            <p class="position"><?php echo $position; ?></p>
                            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 single-person-social ">
                                <ul class="person-social">
                                    <li class="social"><a href="#"><i class="glyphicons-social linked_in"></i></a></li>
                                    <li class="social"><a href="#"><i class="glyphicons-social twitter"></i></a></li>
                                    <li class="social"><a href="#"><i class="glyphicons-social rss"></i></a></li>
                                    <li class="social"><a href="#"><i class="glyphicons-social facebook"></i></a></li>
                                    <li class="social"><a href="#"><i class="glyphicons-social google_plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-hs-12 col-xs-12 single-person-qr ">
                            <img src="<?php echo $qr; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-person-content">
            <div class="row">
                <?php the_content();?>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
            <div class="row">
                <?php get_template_part('templates/element-social-share'); ?>
            </div>
        </div>
    </div> */?>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

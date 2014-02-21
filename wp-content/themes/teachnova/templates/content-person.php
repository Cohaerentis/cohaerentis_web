<?php /* <pre>
    Post-type: Person
    File: content-person
</pre> */ ?>
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
    $facebook   = get_post_meta( $post->ID, 'person_facebook', true );
    $googleplus = get_post_meta( $post->ID, 'person_googleplus', true );
    $attr = array(
        'position'      => $position,
        'email'         => $email,
        'mobile'        => $mobile,
        'organization'  => 'Cohaerentis SL'
    );

    $vcard      = TN_vCard::person($name, $attr);
    $vcardurl   = '/vcard.php?id=' . $post->ID;
    $qr         = get_post_meta( $post->ID, 'person_qr', true );
    if (empty($qr)) $qr = TN_QR::encode($vcard);
    $attr = array('class' => 'img-responsive',
                  'alt'   => $name,
                  'title' => $name);
    $photo      = get_the_post_thumbnail($post->ID, 'medium', $attr);
    $permalink  = get_permalink( $post->ID );

    $share          = new stdClass();
    $share->link    = $permalink;
    $share->title   = trim(strip_tags($name));
    $share->summary = trim(strip_tags($position));
?>
<article <?php post_class() ?> id="page-<?php echo $post->ID; ?>">
    <div class="single-person">
        <div class="single-person-info">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-hs-4 col-xs-12 single-person-photo">
                    <?php echo $photo; ?>
                </div>
                <?php if (!empty($qr)) : ?>
                <div class="col-lg-6 col-md-6 col-sm-8 col-hs-8 col-xs-12">
                <?php else : ?>
                <div class="col-lg-9 col-md-9 col-sm-8 col-hs-8 col-xs-12">
                <?php endif; ?>
                    <div class="single-person-contact">
                        <p class="name" class="name"><?php the_title(); ?></p>
                        <div class="single-person-info-marker"></div>
                        <p class="position"><?php echo $position; ?></p>
                    </div>
                    <div class="single-person-social">
                        <ul>
                            <?php if (!empty($vcardurl)) : ?><li><a href="<?php echo $vcardurl; ?>" class="glyphicons nameplate_alt"><span class="description">vCard</span></a></li><?php endif; ?>
                            <?php if (!empty($linkedin)) : ?><li><a href="<?php echo $linkedin; ?>" class="glyphicons-social linked_in"><span class="description">LinkedIn</span></a></li><?php endif; ?>
                            <?php if (!empty($twitter)) : ?><li><a href="<?php echo $twitter; ?>" class="glyphicons-social twitter"><span class="description">Twiter</span></a></li><?php endif; ?>
                            <?php if (!empty($blog)) : ?><li><a href="<?php echo $blog; ?>" class="glyphicons-social rss"><span class="description">RSS</span></a></li><?php endif; ?>
                            <?php if (!empty($facebook)) : ?><li><a href="<?php echo $facebook; ?>" class="glyphicons-social facebook"><span class="description">Facebook</span></a></li><?php endif; ?>
                            <?php if (!empty($googleplus)) : ?><li><a href="<?php echo $googleplus; ?>" class="glyphicons-social google_plus"><span class="description">Google+</span></a></li><?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php if (!empty($qr)) : ?>
                <div class="col-lg-3 col-md-3 hidden-sm hidden-hs hidden-xs single-person-qr">
                    <img class="img-responsive" src="<?php echo $qr; ?>"/>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="single-person-content">
            <?php the_content();?>
        </div>
        <div class="single-person-share">
            <?php include_element('templates/element', 'social-share', array('share' => $share)); ?>
        </div>
    </div>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

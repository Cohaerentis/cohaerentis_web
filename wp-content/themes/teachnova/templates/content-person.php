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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page-header single-person">
            <div class="row">
                <div class="single-person-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 single-person-photo ">
                        <?php echo $photo; ?>
                    </div>
                    <div class="col-lg-5 col-md-5 hidden-sm col-xs-8 single-person-contact ">
                        <h2 class="entry-title name"><?php the_title(); ?></h2>
                        <p class="name"><?php echo $position; ?></p>
                        <div class="single-person-social col-lg-4 col-md-6 col-sm-6 hidden-xs">
                            <ul>
                                <li><span style="font-size: 25px;"><a href="#" class="fa fa-briefcase"><span style="color: transparent; display: none;">icon-vimeo</span></a></span><a class="link" href="<?php echo $vcard_url; ?>"><span class="text">vCard</span></a><br></li>
                                <li><span style="font-size: 25px;"><a href="#" class="fa fa-skype"><span style="color: transparent; display: none;">icon-skype</span></a></span><span class="text"><a class="link" href="<?php echo $skype; ?>"> Skype</span></a></li>
                                <li><span style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span><span class="text"><a class="link" href="<?php echo $email; ?>"> Google +</span></a></li>
                            </ul>
                        </div>
                        <div class="single-person-social last col-lg-4 col-md-6 col-sm-6 hidden-xs">
                            <ul>
                                <li><span style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span><span class="text"> <a class="link" href="<?php echo $linkedin; ?>">Linkedin</span></a></li>
                                <li><span style="font-size: 25px;"><a href="<?php echo $twitter; ?>" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span><span class="text"> <a class="link" href="<?php echo $twitter; ?>">Twitter</span></a></li>
                                <li><span style="font-size: 25px;"><a href="<?php echo $blog; ?>" class="fa fa-rss-square"><span style="color: transparent; display: none;">icon-rss</span></a></span><span class="text"> <a class="link" href="<?php echo $rss; ?>">Blog</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-person-qr col-lg-4 col-md-4 hidden-sm hidden-xs">
                        <img src="<?php echo $qr; ?>"/>
                    </div>
                    <div class="single-person-social hidden-lg hidden-md col-sm-3 hidden-xs">
                        <ul>
                            <li><span style="font-size: 25px;"><a href="#" class="fa fa-briefcase"><span style="color: transparent; display: none;">icon-vimeo</span></a></span><a class="link" href="<?php echo $vcard_url; ?>"><span class="text">vCard</span></a><br></li>
                            <li><span style="font-size: 25px;"><a href="#" class="fa fa-skype"><span style="color: transparent; display: none;">icon-skype</span></a></span><span class="text"> Skype</span></li>
                            <li><span style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span><span class="text"> Google +</span></li>
                            <li><span style="font-sizemd25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span><span class="text"> Linkedin</span></li>
                            <li><span style="font-size: 25px;"><a href="<?php echo $twitter; ?>" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span><span class="text"> Twitter</span></li>
                            <li><span style="font-size: 25px;"><a href="<?php echo $blog; ?>" class="fa fa-rss-square"><span style="color: transparent; display: none;">icon-rss</span></a></span><span class="text"> Blog</span></li>
                        </ul>
                    </div>
                    <div class="single-person-qr hidden-lg hidden-md col-sm-5 hidden-xs">
                        <img src="<?php echo $qr; ?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="single-person-info">
                <div class="single-person-contact hidden-lg hidden-md col-sm-6 hidden-xs ">
                        <h2 class="entry-title name"><?php the_title(); ?></h2><h4 class="name"><?php echo $position; ?></h4>
                </div>
                <div class="single-person-social hidden-lg hidden-md hidden-sm col-xs-12">
                    <ul>
                        <li><span style="font-size: 25px;"><a href="#" class="fa fa-briefcase"><span style="color: transparent; display: none;">icon-vimeo</span></a></span><a class="link" href="<?php echo $vcard_url; ?>"><span class="text">vCard</span></a><br></li>
                        <li><span style="font-size: 25px;"><a href="#" class="fa fa-skype"><span style="color: transparent; display: none;">icon-skype</span></a></span><span class="text"> Skype</span></li>
                        <li><span style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span><span class="text"> Google +</span></li>
                        <li><span style="font-sizemd25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span><span class="text"> Linkedin</span></li>
                        <li><span style="font-size: 25px;"><a href="<?php echo $twitter; ?>" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span><span class="text"> Twitter</span></li>
                        <li><span style="font-size: 25px;"><a href="<?php echo $blog; ?>" class="fa fa-rss-square"><span style="color: transparent; display: none;">icon-rss</span></a></span><span class="text"> Blog</span></li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-person-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
            <?php get_template_part('templates/element-social-share'); ?>
            <div class="entry-content">
                <?php// the_content(); ?>
            </div>
    </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

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
        <div class="page-header single-person container-fluid">
            <div class="row">
                <div class="single-person-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-person-photo col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <?php echo $photo; ?>
                    </div>
                    <div class="single-person-contact col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <h2 class="entry-title name"><?php the_title(); ?></h2>
                        <p class="name"><?php echo $position; ?></p>
                        <div class="single-person-social col-lg-4 col-md-6 col-sm-6 col-xs-3">
                            <ul>
                                <li><span style="font-size: 25px;"><a href="#" class="glyphicon glyphicon-credit-card fa"><span style="color: transparent; display: none;">icon-vimeo</span></a></span><a class="link" href="<?php echo $vcard_url; ?>"><span class="text">vCard</span></a><br></li>
                                <li><span style="font-size: 25px;"><a href="#" class="fa fa-skype"><span style="color: transparent; display: none;">icon-skype</span></a></span><span class="text"> Skype</span></li>
                                <li><span style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span><span class="text"> Google +</span></li>
                            </ul>
                        </div>
                        <div class="single-person-social last col-lg-4 col-md-6 col-sm-6 col-xs-3">
                            <ul>
                                <li><span style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span><span class="text"> Linkedin</span></li>
                                <li><span style="font-size: 25px;"><a href="<?php echo $twitter; ?>" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span><span class="text"> Twitter</span></li>
                                <li><span style="font-size: 25px;"><a href="<?php echo $blog; ?>" class="fa fa-rss-square"><span style="color: transparent; display: none;">icon-rss</span></a></span><span class="text"> Blog</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-person-qr col-lg-5 col-md-3 col-sm-4 col-xs-8">
                        <img src="<?php echo $qr; ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row tabs-content">
            <?php the_content(); ?>
        </div>
        <div class="row single-person-share">
            <ul>
                <li>Compartir en: </li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-facebook-square"><span style="color: transparent; display: none;">icon-facebook</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span></li>
            </ul>
        </div>
<pre>
    mobile = <?php var_export($mobile); ?><br>
    email = <?php var_export($email); ?><br>
    skype = <?php var_export($skype); ?><br>
    blog = <?php var_export($blog); ?><br>
    twitter = <?php var_export($twitter); ?><br>
    linkedin = <?php var_export($linkedin); ?><br>
    vcard = <a href="<?php echo $vcard_url; ?>">Download vCard</a><br>
</pre>
<pre><?php echo $vcard; ?></pre>
<pre>
    qr = <img src="<?php echo $qr; ?>">
</pre>
<pre>
    photo = <?php echo $photo; ?>
</pre>
        <div class="entry-content">
            <?php// the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

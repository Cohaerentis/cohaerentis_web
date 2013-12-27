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
    <article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
        <div class="page-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
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
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

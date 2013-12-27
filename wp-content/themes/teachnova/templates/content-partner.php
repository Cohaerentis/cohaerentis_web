<pre>
    TODO
    Post-type: Partner
    File: content-partner
</pre>
<?php
/* AEA - For debugging propuses * /
ini_set( 'error_reporting', -1 );
ini_set( 'display_errors', 'On' );
/* */
?>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="partner-<?php echo $term->term_id; ?>">
        <div class="page-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
<?php
    $name        = get_the_title();
    $description = get_the_excerpt();
    $website     = get_post_meta( $post->ID, 'partner_website', true );
    $blog        = get_post_meta( $post->ID, 'partner_blog', true );
    $facebook    = get_post_meta( $post->ID, 'partner_facebook', true );
    $twitter     = get_post_meta( $post->ID, 'partner_twitter', true );
    $linkedin    = get_post_meta( $post->ID, 'partner_linkedin', true );
    $attr = array('class' => 'img-responsive',
                  'alt'   => $name,
                  'title' => $name);
    $logo        = get_the_post_thumbnail($post->ID, 'thumbnail', $attr);
    $infographic = get_post_meta( $post->ID, 'partner_infographic', true );
?>
<pre>
    website = <?php var_export($website); ?><br>
    blog = <?php var_export($blog); ?><br>
    facebook = <?php var_export($facebook); ?><br>
    twitter = <?php var_export($twitter); ?><br>
    linkedin = <?php var_export($linkedin); ?><br>
</pre>
<pre>
    logo = <?php echo $logo; ?>
</pre>
<pre>
    infographic = <?php echo $infographic; ?>
</pre>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

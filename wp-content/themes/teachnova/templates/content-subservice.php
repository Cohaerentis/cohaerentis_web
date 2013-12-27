<pre>
    TODO
    Post-type: Subservice
    File: content-subservice
</pre>
<?php
/* AEA - For debugging propuses * /
ini_set( 'error_reporting', -1 );
ini_set( 'display_errors', 'On' );
/* */
?>
<?php if (have_posts()) : the_post(); ?>
<?php
    $name        = get_the_title();
    $url         = get_permalink($post->ID);
    $description = get_post_meta( $post->ID, 'subservice_description', true );
    $download    = get_post_meta( $post->ID, 'subservice_download', true );
    $related     = get_post_meta( $post->ID, 'subservice_related' );
wrout('url = ' . var_export($url, true));
    $qr          = TN_QR::encode($url);
wrout('qr = ' . var_export($qr, true));
wrout('sha1(url) = ' . var_export(sha1($url), true));

?>
    <article <?php post_class() ?> id="subservice-<?php echo $term->term_id; ?>">
        <div class="page-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
        <div class="entry-description">
            <?php echo $description; ?>
        </div>
<pre>
    download = <?php var_export($download); ?><br>
    related = <?php var_export($related); ?><br>
</pre>
<pre>
    qr = <img src="<?php echo $qr; ?>">
</pre>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

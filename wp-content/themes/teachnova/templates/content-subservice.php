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
//wrout('url = ' . var_export($url, true));
    $qr          = TN_QR::encode($url);
//wrout('qr = ' . var_export($qr, true));
//wrout('sha1(url) = ' . var_export(sha1($url), true));

?>
<article <?php post_class() ?> id="subservice-<?php echo $term->term_id; ?>">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 subservice-title">
            <?php get_template_part('templates/element-title-content'); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 subservice-content">
            <?php the_content(); ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 col-xs-12 download ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sd-12 col-hs-12 col-xs-12">
                            <span style="font-size: 45px;"><i class="glyphicons cloud-upload"></i></span>
                            <span class="link-to"><a href="<?php echo $download; ?>">Descarga la ficha del servicio</a></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sd-12 col-hs-12 col-xs-12 download-content">
                            <?php if(!empty($qr)):?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sd-12 col-hs-12 hidden-xs qr">
                                    <img src="<?php echo $qr; ?>">
                                </div>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 col-xs-12 documents">
                    <span style="font-size: 45px;"><i class="glyphicons paperclip"></i></span>
                    <span class="link-to">Otra documentación</span>
                    <?php foreach ($related[0] as $doc):?>
                        <ul class="documents-links">
                            <li>
                                <i class="glyphicons record"></i>
                                <a href='<?php echo $doc ?>'>
                                    <?php $doc_name = basename($doc); $aux = explode('.', $doc_name); echo $aux[0]; ?>
                                </a>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php get_template_part('templates/element-social-share'); ?>
        </div>
    </div>
</article>
<pre>
    download = <?php var_export($download); ?><br>
    related = <?php var_export($related); ?><br>
</pre>
<pre>
    qr = <img src="<?php echo $qr; ?>">
</pre>

<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

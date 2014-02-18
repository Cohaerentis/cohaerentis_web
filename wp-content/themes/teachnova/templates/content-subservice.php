<?php /* <pre>
    Post-type: Subservice
    File: content-subservice
</pre> */ ?>
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
    $qr          = get_post_meta( $post->ID, 'subservice_qr' );
    if (empty($qr)) $qr = TN_QR::encode($url);

?>
<article <?php post_class() ?> id="subservice-<?php echo $term->term_id; ?>">
    <div class="subservice-title">
        <?php get_template_part('templates/element-title-content'); ?>
    </div>
    <div class="subservice-content">
        <?php the_content(); ?>
    </div>
    <div class="subservice-download">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 col-xs-12">
                <div class="subservice-mindmap">
                    <i class="glyphicons cloud-upload"></i>
                    <a href="<?php echo $download; ?>">Descarga la ficha del servicio</a>
                </div>
                <div class="subservice-documents">
                    <i class="glyphicons paperclip"></i>
                    <span>Otra documentación</span>
                    <ul class="documents-links">
                        <?php foreach ($related[0] as $doc):?>
                            <li>
                                <i class="glyphicons record"></i>
                                <a href='<?php echo $doc ?>'>
                                    <?php $doc_name = basename($doc); $aux = explode('.', $doc_name); echo $aux[0]; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php if(!empty($qr)):?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 hidden-xs subservice-qr">
                <img class="img-responsive" src="<?php echo $qr; ?>">
            </div>
            <?php endif;?>
        </div>
    </div>
    <?php get_template_part('templates/element-social-share'); ?>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

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
        <?php /*AAA*/ ?>
        <div class="row subservice-title">
             <?php get_template_part('templates/element-title-content'); ?>
        </div>
        <div class="entry-description">
            <?php echo $description; ?>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <div class="row knowledge-links">
            <div class="knowledge-map col-lg-6 col-md-6 col-sd-6 col-xs-12">
                <span style="font-size: 45px;"><span class="fa fa-download"></span></span><span class="link-to-map"><a href="<?php echo $download; ?>">Descarga la ficha del servicio</a></span>
                <div class="row single-knowlegde-share col-lg-12 col-md-12 col-sd-12 col-xs-12">
                    <ul>
                        <li>Compartir en: </li>
                        <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-facebook-square"><span style="color: transparent; display: none;">icon-facebook</span></a></span></li>
                        <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span></li>
                        <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span></li>
                        <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span></li>
                    </ul>
                    <?php if(!empty($qr)):?>
                        <div class="col-lg-12 col-md-12 col-sd-12 col-xs-12">
                        <img src="<?php echo $qr; ?>">
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="knowledge-docs col-lg-6 col-md-6 col-sd-6 col-xs-12">
                <span style="font-size: 45px;"><span class="fa fa-folder"></span></span><span class="link-to-map">Otra documentación</span>
                <?php foreach ($related[0] as $doc):?>
                    <ul>
                        <li><a href='<?php echo $doc ?>'><?php $doc_name = basename($doc); $aux = explode('.', $doc_name); echo $aux[0]; ?></a></li>
                    </ul>
                <?php endforeach; ?>
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

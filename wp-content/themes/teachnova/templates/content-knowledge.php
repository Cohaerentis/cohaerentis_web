<?php /* <pre>
    Taxonomy: Knowledge
    File: content-knowledge
</pre> */ ?>
<?php if (have_posts()) : the_post(); ?>
<?php
    $name        = get_the_title();
    $description = get_post_meta( $post->ID, 'knowledge_description', true );
    $download    = get_post_meta( $post->ID, 'knowledge_download', true );
    $related     = get_post_meta( $post->ID, 'knowledge_related' );
?>
    <article <?php post_class() ?> id="knowledge-<?php echo $term->term_id; ?>">
        <?php /*AAA*/ ?>
         <?php get_template_part('templates/element-title-content'); ?>

        <div class="entry-content knowledge-content">
            <?php the_content(); ?>
        </div>
        <div class="knowledge-download">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 col-xs-12">
                <div class="knowledge-mindmap">
                    <i class="glyphicons cloud-upload"></i>
                    <a href="<?php echo $download; ?>">Descarga la ficha del servicio</a>
                </div>
                <div class="knowledge-documents">
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 hidden-xs knowledge-qr">
                <img class="img-responsive" src="<?php echo $qr; ?>">
            </div>
            <?php endif;?>
        </div>
    </div>
    </article>
<?php /*    <pre>
    download = <?php var_export($download); ?><br>
    related = <?php var_export($related); ?><br>
</pre> */ ?>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

<pre>
    TODO
    Taxonomy: Knowledge
    File: content-knowledge
</pre>
<?php if (have_posts()) : the_post(); ?>
<?php
    $name        = get_the_title();
    $description = get_post_meta( $post->ID, 'knowledge_description', true );
    $download    = get_post_meta( $post->ID, 'knowledge_download', true );
    $related     = get_post_meta( $post->ID, 'knowledge_related' );
?>
    <article <?php post_class() ?> id="knowledge-<?php echo $term->term_id; ?>">
        <div class="row">
            <div class="page-header col-lg-2 knowledge-title">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </div>
            <div class="entry-description col-lg-10 knowledge-description">
                <?php echo $description; ?>
            </div>
        </div>

        <div class="entry-content knowledge-content">
            <?php the_content(); ?>
        </div>
        <div class="row knowledge-links">
            <div class="knowledge-map col-lg-6">
                <span style="font-size: 45px;"><span class="fa fa-download"></span></span><span class="link-to-map"><a href="<?php echo $download; ?>">Descarga del mapa de conocimiento</a></span>
                <div class="row single-knowlegde-share">
            <ul>
                <li>Compartir en: </li>
                <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-facebook-square"><span style="color: transparent; display: none;">icon-facebook</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="#" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span></li>
            </ul>
        </div>
            </div>
            <div class="knowledge-docs col-lg-6">
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
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

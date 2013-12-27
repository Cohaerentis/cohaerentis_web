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
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

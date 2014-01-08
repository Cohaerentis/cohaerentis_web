<pre>
    TODO
    Template: Knowledges
    File: content-page-knowledges
</pre>
<?php
    global $knowledges;
    $knowledges = array();

    $args = array(
        'post_type'   => 'knowledge',
        'post_status' => 'publish',
    );
    $knowledges = get_posts($args);
    shuffle($knowledges);
    if (!empty($knowledges)) {
        foreach($knowledges as $knowledge) {
            $title = trim(strip_tags($knowledge->post_title));
            $attr = array('class' => 'img-responsive',
                          'alt'   => $title,
                          'title' => $title);
            $knowledge->img = get_the_post_thumbnail($knowledge->ID, 'thumbnail', $attr);
            $knowledge->url = get_permalink( $knowledge->ID );
        }
    }

?>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
        <?php /*AAA*/ ?>
        <?php get_template_part('templates/element-title-content'); ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <div class="knowledges-mosaic">
            <?php get_template_part('templates/element-knowledges-mosaic'); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
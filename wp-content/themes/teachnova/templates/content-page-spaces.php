<pre>
    TODO
    Template: Spaces
    File: content-page-spaces
</pre>
<?php
    global $spaces;
    $spaces = array();

    $args = array(
        'post_type'   => 'space',
        'post_status' => 'publish',
    );
    $spaces = get_posts($args);
    shuffle($spaces);
    if (!empty($spaces)) {
        foreach($spaces as $space) {
            $title = trim(strip_tags($space->post_title));
            $attr = array('class' => 'img-responsive',
                          'alt'   => $title,
                          'title' => $title);
            $space->img = get_the_post_thumbnail($space->ID, 'thumbnail', $attr);
            $space->url = get_permalink( $space->ID );
        }
    }

?>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
        <div class="row>">
            <div class="page-header  col-lg-2 space-title">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </div>
            <div class="entry-content col-lg-10 knowledge-description">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="spaces-mosaic">
            <?php get_template_part('templates/element-spaces-mosaic'); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
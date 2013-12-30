<pre>
    TODO
    Post_type: Post
    File: content-post
</pre>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
        <div class="page-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
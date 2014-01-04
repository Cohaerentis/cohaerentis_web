<pre>
    TODO
    Template: Default
    File: content-page
</pre>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
        <?php /*AAA*/ ?>
        <!--<div class="page-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>-->
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
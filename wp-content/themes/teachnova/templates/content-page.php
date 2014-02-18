<?php /* <pre>
    Template: Default
    File: content-page
</pre> */ ?>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="page-<?php echo $post->ID; ?>">
        <?php /*AAA*/ ?>
         <?php get_template_part('templates/element-title-content'); ?>
         <div class="entry-content">
            <?php /* <div class="row"> */ ?>
            <?php the_content(); ?>
            <?php /* </div> */ ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
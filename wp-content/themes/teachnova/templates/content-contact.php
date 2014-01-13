<?php
/*
Template Name: Contact-Page
*/
?>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
        <div class="row col-lg-12">
            <?php /*AAA*/ ?>
         <?php get_template_part('templates/element-title-content'); ?>
        </div>
        <div class="row contact-content col-lg-12">
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
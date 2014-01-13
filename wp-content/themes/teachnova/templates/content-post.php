<pre>
    TODO
    Post_type: Post
    File: content-post
</pre>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
        <div class="page-header post-title">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
        <div class="row post-header">
            <?php echo the_post_thumbnail('large'); ?>
            <?php echo the_date('d F Y');?> - <?php echo the_tags('#',', #','.');?>
        </div>
        <div class="entry-content post-content">
            <?php the_content(); ?>
        </div>

        <?php get_template_part('templates/element-social-share');?>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
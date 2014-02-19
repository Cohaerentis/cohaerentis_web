<?php /* <pre>
    Post_type: Post
    File: content-post
</pre> */ ?>
<?php if (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
    <div class="header">
        <div class="title">
            <h1><?php the_title();?></h1>
        </div>
        <div class="post-marker"></div>
        <div class="post-image">
            <?php echo the_post_thumbnail('large'); ?>
        </div>
        <div class="entry-meta">
            <?php echo the_date('d F Y');?> - <?php echo the_tags('#',', #','.');?>
        </div>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php get_template_part('templates/element-social-share');?>
    <div class="entry-comments">
        <?php comments_template('/templates/comments.php'); ?>
    </div>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
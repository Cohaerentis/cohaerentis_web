<?php /* <pre>
    Post_type: Post
    File: content-post
</pre> */ ?>
<?php
    if (have_posts()) : the_post();

    $share          = new stdClass();
    $share->link    = get_permalink();
    $share->title   = trim(strip_tags(get_the_title()));
    $share->summary = trim(strip_tags(get_the_excerpt()));
?>
<article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
    <div class="header">
        <div class="title">
            <h1><?php the_title();?></h1>
        </div>
        <div class="post-marker"></div>
        <div class="post-image">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <div class="entry-meta">
            <?php the_date('d F Y');?> - <?php the_tags('#',', #','.');?>
        </div>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php include_element('templates/element', 'social-share', array('share' => $share)); ?>
    <div class="entry-comments">
        <?php comments_template('/templates/comments.php'); ?>
    </div>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
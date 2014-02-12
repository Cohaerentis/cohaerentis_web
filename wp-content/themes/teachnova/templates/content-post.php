<pre>
    TODO
    Post_type: Post
    File: content-post
</pre>
<?php if (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 single-post">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 post-title">
                    <h1 class="ch-title"><?php the_title(); ?></h1>
                </div>
                <div class="news-marker"></div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 post-img">
                    <?php echo the_post_thumbnail('large'); ?>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 post-date italic">
                    <?php echo the_date('d F Y');?> - <?php echo the_tags('#',', #','.');?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 post-content font-p">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php get_template_part('templates/element-social-share');?>

            <div class="row">
                <div class="single-post-comments">
                    <?php comments_template('/templates/comments.php'); ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
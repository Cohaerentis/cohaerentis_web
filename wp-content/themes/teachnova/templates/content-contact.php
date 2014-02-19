<?php
/*
Template Name: Contact-Page
*/
    $title = $post->post_title;
    $field  = $post->post_type.'_subtitle';
    $subtitle  = get_post_meta( $post->ID, $field, true );
?>
<?php if (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="page-<?php echo $term->term_id; ?>">
    <div class="header"></div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 col-xs-12">
            <div class="contact-info">
                <?php echo the_content(); ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-hs-12 col-xs-12">
            <div class="contact-form-title">
                <h1><?php echo the_title();?></h1>
                <span class="mandatory">*campo obligatorio</span>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode($subtitle); ?>
            </div>
        </div>
    </div>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>
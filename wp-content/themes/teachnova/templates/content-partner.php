<?php /* <pre>
    Post-type: Partner
    File: content-partner
</pre> */ ?>
<?php
/* AEA - For debugging propuses * /
ini_set( 'error_reporting', -1 );
ini_set( 'display_errors', 'On' );
/* */
?>
<?php
    $name        = get_the_title();
    $description = get_the_excerpt();
    $website     = get_post_meta( $post->ID, 'partner_website', true );
    $blog        = get_post_meta( $post->ID, 'partner_blog', true );
    $facebook    = get_post_meta( $post->ID, 'partner_facebook', true );
    $twitter     = get_post_meta( $post->ID, 'partner_twitter', true );
    $linkedin    = get_post_meta( $post->ID, 'partner_linkedin', true );
    $attr = array('class' => 'img-responsive',
                  'alt'   => $name,
                  'title' => $name);
    $logo        = get_the_post_thumbnail($post->ID, 'thumbnail', $attr);
    $infographic = get_post_meta( $post->ID, 'partner_infographic', true );
?>
<?php if (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="page-<?php echo $post->ID; ?>">
    <div class="single-partner">
        <div class="single-partner-info">
            <div class="row">
                <?php if (!empty($infographic)) : ?>
                <div class="col-lg-6 col-md-6 col-sm-7 col-hs-7 col-xs-12">
                <?php else : ?>
                <div class="col-lg-9 col-md-9 col-sm-8 col-hs-8 col-xs-12">
                <?php endif; ?>
                    <div class="single-partner-contact">
                        <p class="name" class="name"><?php the_title(); ?></p>
                        <div class="single-partner-info-marker"></div>
                        <p class="description"><?php echo $description; ?></p>
                    </div>
                    <div class="single-partner-social">
                        <ul>
                            <?php if (!empty($website)) : ?><li><a href="<?php echo $websites; ?>" class="glyphicons global"><span class="description">vCard</span></a></li><?php endif; ?>
                            <?php if (!empty($blog)) : ?><li><a href="<?php echo $blog; ?>" class="glyphicons-social rss"><span class="description">RSS</span></a></li><?php endif; ?>
                </div>
                </div>
                <?php if (!empty($infographic)) : ?>
                <div class="col-lg-6 col-md-6 col-sm-5 col-hs-5 hidden-xs single-partner-infographic">
                    <img class="img-responsive" src="<?php echo $infographic; ?>"/>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="single-partner-content">
            <?php the_content();?>
        </div>
        <div class="single-partner-share">
            <?php get_template_part('templates/element-social-share'); ?>
        </div>
    </div>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

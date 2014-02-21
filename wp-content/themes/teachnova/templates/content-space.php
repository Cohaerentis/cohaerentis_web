<?php /* <pre>
    Post-type: Space
    File: content-space
</pre> */ ?>
<?php
/* AEA - For debugging propuses * /
ini_set( 'error_reporting', -1 );
ini_set( 'display_errors', 'On' );
/* */
?>
<?php if (have_posts()) : the_post(); ?>
<?php
    $name        = get_the_title();
    $url         = get_post_meta( $post->ID, 'space_url', true );
    $galleryname = get_post_meta( $post->ID, 'space_gallery', true );

    if (!empty($GLOBALS['nggdb'])) {
      $nggdb = $GLOBALS['nggdb'];
      $gallery = $nggdb->find_gallery($galleryname);
      if (!empty($gallery->gid)) $images = $nggdb->get_gallery($gallery->gid);
    }

    $share          = new stdClass();
    $share->link    = get_permalink();
    $share->title   = trim(strip_tags($name));
    $share->summary = trim(strip_tags(get_the_excerpt()));
?>
<article <?php post_class() ?> id="space-<?php echo $post->ID; ?>">
    <div class="header">
        <?php if(!empty($gallery)) : ?>
            <div class="row">
                <div class="col-lg-push-6 col-lg-6 col-md-push-6 col-md-6 col-sm-12 col-hs-12 col-xs-12 space-header-description">
        <?php endif; ?>
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="info-marker-down"></div>
                    <div class="subtitle">
                        <?php echo the_excerpt(); ?>
                        <div class="space-link">
                            <a href="<?php echo $url;?>" target="_blank">
                                <i class="glyphicons new_window_alt"></i> Visitar sitio
                            </a>
                        </div>
                    </div>
        <?php if(!empty($gallery)) : ?>
                </div>
                <div class="col-lg-pull-6 col-lg-6 col-md-pull-6 col-md-6 col-sm-12 col-hs-12 col-xs-12 space-gallery">
                    <div id="space-slider-<?php echo $post->ID; ?>" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <?php $i = 0; foreach ($images as $image) : ?>
                            <li data-target="#space-slider-<?php echo $post->ID; ?>" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) : ?>
                                class="active" <?php endif; ?>>
                            </li>
                        <?php $i++; endforeach; ?>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php $i = 0; foreach ($images as $image) : ?>
                            <?php
                                $src = '/' . $gallery->path . '/' . $image->filename;
                                $class = 'item';
                                if ($i == 0) $class .= ' active';
                            ?>
                            <div class="<?php echo $class; ?>">
                                <img src="<?php echo $src; ?>" alt="<?php echo $image->alttext; ?>" class="img-responsive">
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#space-slider-<?php echo $post->ID; ?>" data-slide="prev">
                            <i class="glyphicons chevron-left"></i>
                        </a>
                        <a class="right carousel-control" href="#space-slider-<?php echo $post->ID; ?>" data-slide="next">
                            <i class="glyphicons chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php include_element('templates/element', 'social-share', array('share' => $share)); ?>
</article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

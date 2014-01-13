<pre>
    TODO
    Post-type: Space
    File: content-space
</pre>
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
?>
    <article <?php post_class() ?> id="space-<?php echo $post->ID; ?>">
        <div class="row space-content col-lg-12">
          <?php if(!empty($gallery)):?>
          <div class="slider-gallery col-lg-7">
            <div id="space-slider-<?php echo $post->ID; ?>" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <?php $i = 0; foreach ($images as $image) : ?>
                <li data-target="#space-slider-<?php echo $post->ID; ?>"
                  data-slide-to="<?php echo $i; ?>"
                  <?php if ($i == 0) : ?>
                  class="active"
                <?php endif; ?>
                >
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
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#space-slider-<?php echo $post->ID; ?>" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
          </div>
        <?php endif; ?>
          <div class="page-header col-lg-5>">
              <h1 class="entry-title"><?php the_title(); ?></h1>
          </div>
          <div class="entry-description">
              <?php echo the_excerpt(); ?>
          </div>
          <div>
            <span><a href="<?php echo $url;?>" target="_blank"><strong>Visitar sitio</strong></a></span>
          </div>
            <?php get_template_part('templates/element-social-share'); ?>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>

<pre>
    url = <?php var_export($url); ?><br>
    gallery path = <?php var_export($gallery->path); ?><br>
    <?php $n = 0; foreach($images as $image) : ?>
    image <?php echo $n; ?> = <?php echo $image->filename; ?><br>
    <img src="<?php echo '/' . $gallery->path . '/' . $image->filename; ?>" class="img-responsive"><br>
    <?php $n++; endforeach; ?>
</pre>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

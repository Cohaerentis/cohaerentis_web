<pre>
    TODO
    Archive: Default
    File: archive
</pre>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 post-title">
    <h2 class="h2">Noticias</h2>
  </div>
  <div class="news-marker"></div>
</div>
<?php get_template_part('templates/element-if-noresults'); ?>

<?php while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 news-archive">
      <div class="row">
        <header class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 header-post-list">
            <?php echo the_date('d F Y - ');?><?php echo the_tags('#',', #','.');?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-12 post-list-thumb">
          <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(100,100)); ?></a>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-12 post-list-excerpt font-p">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
</article>

<?php endwhile; ?>
<?php get_template_part('templates/element-posts-pagination'); ?>

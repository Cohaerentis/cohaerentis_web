<?php /* <pre>
    Archive: Default
    File: archive
</pre> */ ?>
<div class="news-header">
  <div class="title">
    <h1>Noticias</h1>
  </div>
  <div class="news-marker"></div>
</div>
<?php get_template_part('templates/element-if-noresults'); ?>

<?php while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-meta">
    <?php the_date('d F Y'); ?> - <?php the_tags('#',', #','.');?>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-12 entry-thumb">
      <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-12 entry-excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>

<?php endwhile; ?>
<?php get_template_part('templates/element-posts-pagination'); ?>

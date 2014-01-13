<pre>
    TODO
    Archive: Default
    File: archive
</pre>
<?php get_template_part('templates/element-if-noresults'); ?>

<?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="row header-post-list">
        <?php echo the_date('d F Y - ');?><?php echo the_tags('#',', #','.');?>
    </div>
    <div class="row entry-summary post-list-content">
      <div class="post-list-thumb col-lg-3">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(100,100)); ?></a>
      </div>
      <div class="post-list-excerpt col-lg-6">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </article>
<?php endwhile; ?>
<?php get_template_part('templates/element-posts-pagination'); ?>

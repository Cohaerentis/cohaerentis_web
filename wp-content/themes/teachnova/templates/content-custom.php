<?php /* <pre>
    Post-type: Subservice or knowledge
    File: content-custom
</pre> */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
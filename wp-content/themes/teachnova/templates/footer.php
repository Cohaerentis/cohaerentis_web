<?php $cols = array('one', 'two', 'three', 'four', 'five'); ?>
<footer class="content-info container-fluid" role="contentinfo">
<?php /* AAA: -fluid added to de container*/?>
  <div class="row">
    <?php foreach($cols as $col) : if (roots_display_footerbar($col)) : ?>
    <aside class="wp-sidebar <?php echo $col; ?>-footerbar <?php echo roots_sidebar_class($col . '-footer'); ?>" role="complementary">
      <?php dynamic_sidebar($col . '-footerbar'); ?>
    </aside>
    <?php endif; endforeach; ?>
  </div>
</footer>

<?php wp_footer(); ?>

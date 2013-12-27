<?php global $subservices; if (!empty($subservices)) : ?>
<div class="tn-subservices-mosaic row">
   <?php foreach($subservices as $subservice) : if (!empty($subservice->img)) : ?>
      <div class="col-lg-2 col-md-3 col-sd-4 col-xs-6">
         <a href="<?php echo $subservice->url; ?>">
            <?php echo $subservice->img; ?>
         </a>
         <div class="tn-subservice-excerpt">
            <?php echo $subservice->post_excerpt; ?>
         </div>
         <a class="btn-more" href="<?php echo $subservice->url; ?>">
            <?php echo __('Read more'); ?>
         </a>
      </div>
   <?php endif; endforeach; ?>
</div>

<?php endif; ?>

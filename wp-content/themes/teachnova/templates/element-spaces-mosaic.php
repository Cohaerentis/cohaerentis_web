<?php global $spaces; if (!empty($spaces)) : ?>
<div class="tn-spaces-mosaic row">
   <?php foreach($spaces as $space) : if (!empty($space->img)) : ?>
      <div class="col-lg-2 col-md-3 col-sd-4 col-xs-6">
         <a href="<?php echo $space->url; ?>">
            <?php echo $space->img; ?>
            <div class="tn-space-label">
               <?php echo $space->post_title; ?>
            </div>
         </a>
      </div>
   <?php endif; endforeach; ?>
</div>

<?php endif; ?>

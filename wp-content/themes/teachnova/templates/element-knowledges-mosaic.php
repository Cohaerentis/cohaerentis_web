<?php global $knowledges; if (!empty($knowledges)) : ?>
   <?php $i=0; foreach($knowledges as $knowledge) : if (!empty($knowledge->img)) : ?>
      <?php if (($i % 5) == 0) : ?>
         <div class="tn-knowledges-mosaic row">
      <?php endif; ?>
            <div class="col-lg-2 col-md-3 col-sd-4 col-xs-6 content-knowledges-mosaic">
               <a href="<?php echo $knowledge->url; ?>">
                  <?php echo $knowledge->img; ?>
               </a>
               <div class="tn-knowledge-excerpt">
                  <?php echo $knowledge->post_excerpt; ?>
               </div>
               <a class="btn-more" href="<?php echo $knowledge->url; ?>">
                  <?php echo __('Read more'); ?>
               </a>
            </div>
      <?php $i++; if ($i!=0 && ($i % 5) == 0) : ?>
         </div>
      <?php endif; ?>
   <?php endif; endforeach; ?>
<?php endif; ?>

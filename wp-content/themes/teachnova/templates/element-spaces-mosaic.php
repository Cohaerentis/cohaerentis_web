<?php
   global $spaces;
?>
<?php if (!empty($spaces)) : ?>
<div class="tn-space-mosaic <?php echo $css_class; ?>" <?php if (!empty($css_id)) : ?>id="<?php echo $css_id; ?>"<?php endif; ?>>
   <div class="tn-space-mosaic-relative">
      <div class="tn-space-mosaic-wrapper">
         <?php foreach($spaces as $space) : ?>
         <?php $meta = get_post_meta($space->ID); $icon = get_post_meta( $space->ID,'space_glyphicon' ); ?>
         <div class="tn-space-term <?php echo $item_class; ?>">
               <a class="tn-space-box" href="<?php echo $space->guid; ?>">
                    <?php if(!empty($icon[0])): ?>
                        <div class="box-icon">
                            <i class="glyphicons <?php echo $icon[0]; ?>"></i>
                        </div>
                     <?php else: ?>
                        <div class="box-img">
                            <img src="<?php echo $space->img; ?>" class="img-responsive"
                             alt="<?php echo $term->label; ?>" title="<?php echo $space->post_title; ?>">
                        </div>
                     <?php endif; ?>
                    <div class="box-label"><?php echo $space->post_title; ?></div>
               </a>
            <?php if ($desc && !empty($term->description)) : ?>
               <div class="tn-space-description ellipsis"><?php echo $term->description; ?></div>
            <?php endif; ?>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
<?php endif; ?>

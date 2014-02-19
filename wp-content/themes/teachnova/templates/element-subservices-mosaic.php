<?php
   global $subservices;
?>
<?php if (!empty($subservices)) : ?>
<div class="tn-subservice-mosaic <?php echo $css_class; ?>" <?php if (!empty($css_id)) : ?>id="<?php echo $css_id; ?>"<?php endif; ?>>
   <div class="tn-subservice-mosaic-relative">
      <div class="tn-subservice-mosaic-wrapper">
         <?php foreach($subservices as $subservice) : ?>
         <?php $meta = get_post_meta( get_the_ID()); $icon = get_post_meta( $subservice->ID,'subservice_glyphicon' ); ?>
         <div class="tn-subservice-term <?php echo $item_class; ?>">
               <a class="tn-subservice-box" href="<?php echo $subservice->guid; ?>">
                    <?php if(!empty($icon[0])): ?>
                        <div class="box-icon">
                            <i class="glyphicons <?php echo $icon[0]; ?>"></i>
                        </div>
                     <?php else: ?>
                        <div class="box-img">
                            <img src="<?php echo $subservice->img; ?>" class="img-responsive"
                             alt="<?php echo $term->label; ?>" title="<?php echo $subservice->post_title; ?>">
                        </div>
                     <?php endif; ?>
                    <div class="box-label"><?php echo $subservice->post_title; ?></div>
               </a>
            <?php if ($desc && !empty($term->description)) : ?>
               <div class="tn-subservice-description ellipsis"><?php echo $term->description; ?></div>
            <?php endif; ?>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
<?php endif; ?>
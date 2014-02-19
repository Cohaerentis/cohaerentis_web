<?php/*
   global $knowledges;

?>
<?php
   if (!empty($knowledges)) : ?>
   <?php $i=0; foreach($knowledges as $knowledge) : if (!empty($knowledge->img)) : ?>
   <?php $meta = get_post_meta( $knowledge->ID);
   $icon = get_post_meta( $knowledge->ID,'knowledge_glyphicon' );
   wrout_json('debug: ', $meta); ?>
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
<?php endif; */?>

<?php
   global $knowledges;
?>
<?php if (!empty($knowledges)) : ?>
<div class="tn-knowledge-mosaic <?php echo $css_class; ?>" <?php if (!empty($css_id)) : ?>id="<?php echo $css_id; ?>"<?php endif; ?>>
   <div class="tn-knowledge-mosaic-relative">
      <div class="tn-knowledge-mosaic-wrapper">
         <?php foreach($knowledges as $knowledge) : ?>
         <?php $meta = get_post_meta( get_the_ID()); $icon = get_post_meta( $knowledge->ID,'knowledge_glyphicon' ); ?>
         <div class="tn-knowledge-term <?php echo $item_class; ?>">
               <a class="tn-knowledge-box" href="<?php echo $knowledge->guid; ?>">
                    <?php if(!empty($icon[0])): ?>
                        <div class="box-icon">
                            <i class="glyphicons <?php echo $icon[0]; ?>"></i>
                        </div>
                     <?php else: ?>
                        <div class="box-img">
                            <img src="<?php echo $knowledge->img; ?>" class="img-responsive"
                             alt="<?php echo $term->label; ?>" title="<?php echo $knowledge->post_title; ?>">
                        </div>
                     <?php endif; ?>
                    <div class="box-label"><?php echo $knowledge->post_title; ?></div>
               </a>
            <?php if ($desc && !empty($term->description)) : ?>
               <div class="tn-knowledge-description ellipsis"><?php echo $term->description; ?></div>
            <?php endif; ?>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
<?php endif; ?>
<?php global $customers;?>
<?php if (!empty($customers)) : ?>
<div id="<?php echo $id; ?>" class="carousel slide media-carousel">
   <div class="carousel-inner center-block">
     <?php $i = 0; foreach($customers as $customer) : ?>
       <?php if (($i % 3) == 0) : ?>
         <div class="item <?php if ($i == 0) echo 'active'; ?>">
           <ul class="row text-center">
       <?php endif; ?>
             <li class="col-md-4 col-sm-4 col-xs-4">
               <figure>
                 <?php echo $customer->img; ?>
                 <figcaption><?php echo $feature->caption; ?></figcaption>
               </figure>
             </li>
       <?php $i++; if (($i % 3) == 0) : ?>
           </ul>
         </div>
       <?php endif; ?>
     <?php endforeach; ?>
     <?php if (($i % 3) != 0) : ?>
           </ul>
         </div>
     <?php endif; ?>
   </div>
   <a class="left carousel-control" href="#<?php echo $id; ?>" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
   </a>
   <a class="right carousel-control" href="#<?php echo $id; ?>" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
   </a>
</div>
<?php endif; ?>

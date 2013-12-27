<?php global $customers, $showmax; if (!empty($customers)) : ?>
<div class="tn-customers-slider">
   <ul>
   <?php $n = 0; foreach($customers as $customer) : if (!empty($customer->img)) : ?>
      <li>
         <?php if (!empty($customer->url)) : ?>
         <a href="<?php echo $customer->url; ?>" target="_blank">
         <?php endif; ?>
            <?php echo $customer->img; ?>
         <?php if (!empty($customer->url)) : ?>
         </a>
         <?php endif; ?>
      </li>
   <?php $n++; if ($n >= $showmax) break; ?>
   <?php endif; endforeach; ?>
   </ul>
</div>

<?php endif; ?>

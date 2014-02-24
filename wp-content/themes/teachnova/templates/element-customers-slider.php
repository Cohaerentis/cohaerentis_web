<?php global $customers;?>
<?php if (!empty($customers)) : ?>
<div class="carousel slide media-carousel" id="customers">
  <div class="carousel-inner center-block">
    <?php $i = 0; foreach($customers as $customer) : ?>
      <?php if (($i % 4) == 0) : ?>
        <div class="item <?php if ($i == 0) echo 'active'; ?>">
          <ul class="row text-center">
      <?php endif; ?>
            <li class="col-lg-3 col-md-3 col-sm-3 col-hs-6 col-xs-6">
              <figure>
                <a href="<?php echo $customer->url ?>" target="_blank"><?php echo $customer->img; ?></a>
                <figcaption><?php echo $customer->caption; ?></figcaption>
              </figure>
            </li>
      <?php $i++; if (($i % 4) == 0) : ?>
          </ul>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
    <?php if (($i % 4) != 0) : ?>
          </ul>
        </div>
    <?php endif; ?>
  </div>

  <a data-slide="prev" href="#customers" class="left carousel-control btn-circle">
    <i class="glyphicons chevron-left"></i>
  </a>

  <a data-slide="next" href="#customers" class="right carousel-control  img-rounded">
    <i class="glyphicons chevron-right"></i>
  </a>
</div>
<?php endif; ?>

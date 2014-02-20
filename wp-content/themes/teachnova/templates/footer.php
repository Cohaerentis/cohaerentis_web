<?php
  $linkedin          = of_get_option('linkedin', false);
  $facebook          = of_get_option('facebook', false);
  $twitter           = of_get_option('twitter', false);
  $linkedin          = of_get_option('linkedin', false);
  $address           = of_get_option('address', false);
  $email             = of_get_option('email', false);
  $phone             = of_get_option('phone', false);
?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-hs hidden-xs footer-logos">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
                        <a href="http://www.opencodex.es" target="_blank">
                            <img class="img-responsive" src="/assets/img/opencodex-shadow.png"/>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
                        <a href="http://www.teachnova.com" target="_blank">
                            <img class="img-responsive" src="/assets/img/teachnova-shadow.png"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-hs-6 col-xs-12 footer-news">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-hs-4 col-xs-4">
                        <a href="#">
                            <img class="img-responsive" src="/assets/img/derecho_200.jpg"/>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-hs-8 col-xs-8">
                        <a href="#" class="news-title">Noticia Uno</a>
                        <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae porttitor quam. Fusce pulvinar,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-hs-6 col-xs-12 footer-news">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-hs-4 col-xs-4">
                        <a href="#">
                            <img class="img-responsive" src="/assets/img/derecho_200.jpg"/>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-hs-8 col-xs-8">
                        <a href="#" class="news-title">Noticia Dos</a>
                        <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae porttitor quam. Fusce pulvinar,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-hs-12 col-xs-12 footer-address-social">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 footer-social">
                        <ul>
                            <?php if (!empty($linkedin)) : ?>
                                <li><a href="<?php echo $linkedin; ?>" class="glyphicons-social linked_in"></a></li>
                            <?php endif; ?>
                            <?php if (!empty($facebook)) : ?>
                                <li><a href="<?php echo $facebook; ?>" class="glyphicons-social facebook"></a></li>
                            <?php endif; ?>
                            <?php if (!empty($twitter)) : ?>
                                <li><a href="<?php echo $twitter; ?>" class="glyphicons-social twitter"></a></li>
                            <?php endif; ?>
                            <li><a href="<?php bloginfo('rss_url') ?>" class="glyphicons-social rss"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12 footer-address">
                        <?php if (!empty($address)) : ?>
                            <p><?php echo $address; ?></p>
                        <?php endif; ?>
                        <?php if (!empty($email) || !empty($phone)) : ?>
                            <p>
                                <?php if (!empty($email)) : ?>
                                    <a class ="footer-email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                    <?php if (!empty($phone)) : ?><br /><?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($phone)) : ?>
                                    <span class="footer-phone"><?php echo $phone; ?></span>
                                <?php endif; ?>
                            </p>
                        <?php endif; ?>
                        <p><a href="/es/aviso-legal">Aviso legal</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $linkedin          = of_get_option('linkedin', false);
    $facebook          = of_get_option('facebook', false);
    $twitter           = of_get_option('twitter', false);
    $linkedin          = of_get_option('linkedin', false);
    $address           = of_get_option('address', false);
    $email             = of_get_option('email', false);
    $phone             = of_get_option('phone', false);

    $args = array(
        'post_type'   => 'post',
        'category'    => 'noticias',
        'post_status' => 'publish',
        'numberposts' => 2,
    );
    $news = get_posts($args);
    if (!empty($news)) {
        foreach($news as $new) {
            $title = trim(strip_tags($new->post_title));
            $attr = array('class' => 'img-responsive',
                          'alt'   => $title,
                          'title' => $title);
            $new->title = $title;
            $new->img = get_the_post_thumbnail($new->ID, 'thumbnail', $attr);
            $new->url = get_permalink( $new->ID );
            if (!empty($new->excerpt)) {
                $new->excerpt  = trim(strip_tags($new->post_excerpt));
                $new->miniexcerpt  = wp_trim_words( $new->excerpt, POST_EXCERPT_LENGTH, ' &hellip;' );
            } else {
                $new->excerpt  = wp_trim_words( trim(strip_tags($new->post_content)), POST_EXCERPT_LENGTH, ' &hellip;' );
                $new->miniexcerpt  = $new->excerpt;
            }
        }
    }
    // $newscount = count($news);
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
            <?php $i = 0; foreach ($news as $new) : if (!empty($new->img)) : $i++; ?>
                <div class="col-lg-3 col-md-3 col-sm-4 col-hs-6 col-xs-12 footer-news">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-hs-4 col-xs-4">
                            <a href="<?php echo $new->url; ?>">
                                <?php echo $new->img; ?>
                            </a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-hs-8 col-xs-8">
                            <a href="<?php echo $new->url; ?>" class="news-title"><?php echo $new->title; ?></a>
                            <p class="news-content"><?php echo $new->miniexcerpt; ?></p>
                        </div>
                    </div>
                </div>
                <?php if ($i == 2) break; endif; endforeach; ?>
<?php /*
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
*/ ?>
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

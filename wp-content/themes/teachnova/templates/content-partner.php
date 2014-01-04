<pre>
    TODO
    Post-type: Partner
    File: content-partner
</pre>
<?php
/* AEA - For debugging propuses * /
ini_set( 'error_reporting', -1 );
ini_set( 'display_errors', 'On' );
/* */
?>
<?php
    $name        = get_the_title();
    $description = get_the_excerpt();
    $website     = get_post_meta( $post->ID, 'partner_website', true );
    $blog        = get_post_meta( $post->ID, 'partner_blog', true );
    $facebook    = get_post_meta( $post->ID, 'partner_facebook', true );
    $twitter     = get_post_meta( $post->ID, 'partner_twitter', true );
    $linkedin    = get_post_meta( $post->ID, 'partner_linkedin', true );
    $attr = array('class' => 'img-responsive',
                  'alt'   => $name,
                  'title' => $name);
    $logo        = get_the_post_thumbnail($post->ID, 'thumbnail', $attr);
    $infographic = get_post_meta( $post->ID, 'partner_infographic', true );
?>
<?php if (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="partner-<?php echo $term->term_id; ?>">
        <div class="row page-header single-partner">
            <div class="single-partner-social col-lg-6">
                <h2 class="entry-title"><?php the_title(); ?></h2>
                <?php echo $description;?>
                <ul>
                    <li><span style="font-size: 25px;"><a href="<?php echo $website; ?>" class="fa fa-globe"><span style="color: transparent; display: none;">icon-globe</span></a></span><span class="link"><?php echo $website; ?></span></li>
                    <li><span style="font-size: 25px;"><a href="<?php echo $blog; ?>" class="fa fa-rss-square"><span style="color: transparent; display: none;">icon-rss</span></a></span><span class="link"><?php echo $blog; ?></span></li>
                </ul>
            </div>
            <div class="single-partner-infographic col-lg-6">
               <img src="<?php echo $infographic; ?>"/>
            </div>
        </div>
        <div class="row entry-content">
            <?php the_content(); ?>
        </div>
        <div class="row single-partner-share">
            <ul>
                <li>Compartir en: </li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-facebook-square"><span style="color: transparent; display: none;">icon-facebook</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-linkedin-square"><span style="color: transparent; display: none;">icon-linkedin</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-twitter-square"><span style="color: transparent; display: none;">icon-twitter</span></a></span></li>
                <li><span class="share" style="font-size: 25px;"><a href="<?php echo $linkedin; ?>" class="fa fa-google-plus-square"><span style="color: transparent; display: none;">icon-google-plus</span></a></span></li>
            </ul>
        </div>
<pre>
    website = <?php var_export($website); ?><br>
    blog = <?php var_export($blog); ?><br>
    facebook = <?php var_export($facebook); ?><br>
    twitter = <?php var_export($twitter); ?><br>
    linkedin = <?php var_export($linkedin); ?><br>
</pre>
<pre>
    logo = <?php echo $logo; ?>
</pre>
<pre>
    infographic = <?php echo $infographic; ?>
</pre>
        <div class="entry-content tabs">
            <?php the_content(); ?>
        </div>
    </article>
<?php else : ?>
    <?php get_template_part('templates/element-if-noresults'); ?>
<?php endif; ?>

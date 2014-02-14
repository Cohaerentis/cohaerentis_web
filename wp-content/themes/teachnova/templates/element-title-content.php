<?php
    $title = $post->post_title;
    $field  = $post->post_type.'_subtitle';
    $subtitle  = get_post_meta( $post->ID, $field, true );
    //wrout_json('debug:', $field);
?>
<div class="header">
    <div class="title">
        <h1><?php echo $title;?></h1>
    </div>
    <div class="subtitle">
        <p><?php echo do_shortcode($subtitle); ?></p>
    </div>
</div>
<?php /* * / ?>
<?php //AAA: Two columns header if subtitle exist ?>
<?php if(!empty($subtitle)): ?>
    <div class="header">
        <div class="row">
            <div class = "col-lg-3 col-md-3 col-sd-12 col-xs-12 title">
                <h1><?php echo $title;?></h1>
            </div>
            <div class = "col-lg-9 col-md-9 col-sd-12 col-xs-12 subtitle">
                <p><?php echo do_shortcode($subtitle); ?></p>
            </div>
        </div>
    </div>

<?php //AAA: Full-width header if not ?>
<?php else:?>
    <div class="header">
        <div class="row">
            <div class = "col-lg-12 col-md-12 col-sd-12 col-xs-12 title">
                <h1><?php echo $title;?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /* */ ?>

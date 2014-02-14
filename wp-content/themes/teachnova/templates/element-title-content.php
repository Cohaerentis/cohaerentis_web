<?php
    $title = $post->post_title;
    $field  = $post->post_type.'_subtitle';
    $subtitle  = get_post_meta( $post->ID, $field, true );
?>
<div class="header">
    <div class="title">
        <h1><?php echo $title;?></h1>
    </div>
    <div class="subtitle">
        <p><?php echo do_shortcode($subtitle); ?></p>
    </div>
</div>

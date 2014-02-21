<?php
    $sharelink      = (!empty($share->link)) ? urlencode($share->link) : '';
    $sharetitle     = (!empty($share->title)) ? urlencode($share->title) : '';
    $sharesummary   = (!empty($share->summary)) ? urlencode($share->summary) : '';
    $sharesource    = urlencode(get_bloginfo('url'));
    $croptitle      = roots_trim_characters($share->title, 100, '...');
    $tweet          = urlencode("{$croptitle} {$share->link} via @Cohaerentis");
    $sfb = "//www.facebook.com/sharer/sharer.php?u={$sharelink}";
    $sli = "//www.linkedin.com/shareArticle?mini=true&url={$sharelink}&title={$sharetitle}&summary={$sharesummary}&source={$sharesource}";
    $stt = "//twitter.com/home?status={$tweet}";
    $sgp = "//plus.google.com/share?url={$sharelink}";
?>
<div class="clearfix social-share">
    <span>Compartir en:</span>
    <ul>
        <li><a href="<?php echo $sfb; ?>" target="_blank" class="glyphicons-social facebook"></a></li>
        <li><a href="<?php echo $sli; ?>" target="_blank" class="glyphicons-social linked_in"></a></li>
        <li><a href="<?php echo $stt; ?>" target="_blank" class="glyphicons-social twitter"></a></li>
        <li><a href="<?php echo $sgp; ?>" target="_blank" class="glyphicons-social google_plus"></a></li>
    </ul>
</div>

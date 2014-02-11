<div class="comment-person-info col-lg-2">
  <div class="row">
    <div class="col-lg-12">
      <?php echo get_avatar($comment, $size = '100'); ?>
    </div>
    <div class="col-lg-12">
      <h4 class="media-heading"><?php echo get_comment_author_link(); ?></h4>
      <time datetime="<?php echo comment_date('c'); ?>">
        <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s', 'roots'), get_comment_date(),  get_comment_time()); ?>
        </a>
      </time>
    </div>
  </div>
</div>
<div class="media-body col-lg-10">
  <?php if ($comment->comment_approved == '0') : ?>
    <div class="alert alert-info">
      <?php _e('Your comment is awaiting moderation.', 'roots'); ?>
    </div>
  <?php endif; ?>

  <?php comment_text(); ?>
  <?php edit_comment_link(__('(Edit)', 'roots'), '', ''); ?>
  <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>

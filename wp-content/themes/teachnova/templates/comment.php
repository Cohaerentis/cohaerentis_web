<?php echo get_avatar($comment, $size = '64'); ?>
<div class="media-body">
  <div class="media-heading comment-meta">
    <span class="comment-id">#<?php echo $comment->comment_ID; ?></span> -
    <span class="comment-author"><?php echo get_comment_author_link(); ?></span>
    <?php if (!empty($comment->comment_parent)) : ?>
      <span class="comment-reply">
        <?php _e('en respuesta a', 'roots'); ?>
        <a href="#comment-<?php echo $comment->comment_parent; ?>">
          #<?php echo $comment->comment_parent; ?>
        </a>
      </span>
    <?php endif; ?> -
    <time class="comment-date" datetime="<?php echo comment_date('c'); ?>">
      <?php printf(__('%1$s %2$s', 'roots'), get_comment_date('d F Y'),  get_comment_time('H:m')); ?>
    </time>
  </div>
  <div class="comment-content">
<?php // wrout("comment = " . var_export($comment, true)); ?>
    <?php comment_text(); ?>
  </div>
  <div class="comment-actions">
    <span class="comment-action comment-action-edit">
      <?php // edit_comment_link(__('(Edit)', 'roots'), '', ''); ?>
      <?php edit_comment_link('<i class="glyphicons edit"></i> Editar', '', ''); ?>
    </span>
    <span class="comment-action comment-action-reply">
      <?php
        $args = array_merge($args,
                array('depth' => $depth,
                      'max_depth' => $args['max_depth'],
                      'reply_text' => '<i class="glyphicons share"></i> Responder')
                );
        comment_reply_link($args);
      ?>
    </span>
  </div>
</div>

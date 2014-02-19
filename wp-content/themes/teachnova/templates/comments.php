<?php if (post_password_required()) return; ?>
<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <span class="title">
      <?php printf(_n('Un comentario a &ldquo;%2$s&rdquo;', '%1$s comentarios a &ldquo;%2$s&rdquo;', get_comments_number(), 'roots'),
                   number_format_i18n(get_comments_number()),
                   get_the_title()); ?>
    </span>

    <ul class="media-list">
      <?php wp_list_comments(array('walker' => new Roots_Walker_Comment)); ?>
    </ul>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'roots')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'roots')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'roots'); ?>
    </div>
  <?php endif; ?>
</section><!-- /#comments -->

<?php if (comments_open()) : ?>
  <section id="respond" class="comments-form">
    <span class="respond-title">
      <?php comment_form_title(__('Deja un comentario', 'roots'), __('Leave a Reply to %s', 'roots')); ?>
    </span>
    <p class="respond-cancel-reply"><?php cancel_comment_reply_link(); ?></p>
    <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
      <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'roots'), wp_login_url(get_permalink())); ?></p>
    <?php else : ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if (is_user_logged_in()) : ?>
          <div class="media comment-logged-in">
            <div class="pull-left">
              <?php echo get_avatar($user_ID, $size = '32'); ?>
            </div>
            <div class="media-body">
              <div class="media-heading">
                <div class="comment-author">
                  <?php printf(__('<a href="%s/wp-admin/profile.php">%s</a>', 'roots'),
                             get_option('siteurl'), $user_identity); ?>
                </div>
                <a href="<?php echo wp_logout_url(get_permalink()); ?>"
                   title="<?php __('Log out of this account', 'roots'); ?>">
                   <?php _e('Log out &raquo;', 'roots'); ?>
                </a>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="row form-group">
            <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-4 comment-label">
              <label class="comment-label" for="author"><?php _e('Name', 'roots'); if ($req) _e(' *', 'roots'); ?></label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-8 comment-input">
              <input type="text" class="form-control no-border comment-input" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-4 comment-label">
              <label class="comment-label" for="email"><?php _e('Email', 'roots'); if ($req) _e(' *', 'roots'); ?></label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-8 comment-input">
              <input type="email" class="form-control no-border comment-input" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-4 comment-label">
              <label class="comment-label" for="url"><?php _e('Website', 'roots'); ?></label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-8 comment-input">
              <input type="url" class="form-control no-border comment-input" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22">
            </div>
          </div>
        <?php endif; ?>
        <div class="row form-group">
          <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
            <label class="comment-label-wide" for="comment"><?php _e('Comment', 'roots'); ?></label>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
            <textarea name="comment" id="comment" class="form-control" rows="5" aria-required="true"></textarea>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
            <input name="submit" class="btn btn-primary comment-submit pull-right" type="submit" id="submit" value="<?php _e('Enviar', 'roots'); ?>">
          </div>
        </div>
        <?php comment_id_fields(); ?>
        <?php do_action('comment_form', $post->ID); ?>
      </form>
    <?php endif; ?>
  </section><!-- /#respond -->
<?php endif; ?>

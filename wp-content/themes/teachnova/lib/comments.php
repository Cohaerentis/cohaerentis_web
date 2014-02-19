<?php
/**
 * Use Bootstrap's media object for listing comments
 *
 * @link http://getbootstrap.com/components/#media
 */
class Roots_Walker_Comment extends Walker_Comment {
  function start_lvl(&$output, $depth = 0, $args = array()) {
wrlog('start_lvl : depth = ' . $depth);
    $GLOBALS['comment_depth'] = $depth + 1;
    // echo '<ul ' . get_comment_class('media list-unstyled comment-' . get_comment_ID()) . '>';
    echo '</li>';
  }

  function end_lvl(&$output, $depth = 0, $args = array()) {
wrlog('end_lvl : depth = ' . $depth);
    $GLOBALS['comment_depth'] = $depth + 1;
    // echo '</ul>';
  }

  function start_el(&$output, $comment, $depth = 0, $args = array(), $id = 0) {
wrlog('start_el : depth = ' . $depth);
    $depth++;
    $GLOBALS['comment_depth'] = $depth;
    $GLOBALS['comment'] = $comment;

    if (!empty($args['callback'])) {
      call_user_func($args['callback'], $comment, $args, $depth);
      return;
    }

    extract($args, EXTR_SKIP);
    $classes = get_comment_class('media comment-' . get_comment_ID());
    if ($depth > 1) $classes[] = 'response';
    echo '<li class="' . implode(' ', $classes) . '">';
    echo '<a name="comment-' . get_comment_ID() . '" class="comment-anchor"></a>';
    include(locate_template('templates/comment.php'));
    // wrout_json('hijos:', $args);
  }

  function end_el(&$output, $comment, $depth = 0, $args = array()) {
wrlog('end_el : depth = ' . $depth);
    if (!empty($args['end-callback'])) {
      call_user_func($args['end-callback'], $comment, $args, $depth);
      return;
    }
    if ($depth == 0) echo '</li>';
  }
}


function roots_get_avatar($avatar) {
  $avatar = str_replace("class='avatar", "class='avatar pull-left media-object", $avatar);
  return $avatar;
}
add_filter('get_avatar', 'roots_get_avatar');

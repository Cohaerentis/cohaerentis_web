<?php
/**
 * Determines whether or not to display the sidebar based on an array of conditional tags or page templates.
 *
 * If any of the is_* conditional tags or is_page_template(template_file) checks return true, the sidebar will NOT be displayed.
 *
 * @link http://roots.io/the-roots-sidebar/
 *
 * @param array list of conditional tags (http://codex.wordpress.org/Conditional_Tags)
 * @param array list of page templates. These will be checked via is_page_template()
 *
 * @return boolean True will display the sidebar, False will not
 */
class Roots_Sidebar {
  private $conditionals;
  private $templates;
  private $extra;

  public $display = true;

// AEA - We could have several sidebar types
//  function __construct($conditionals = array(), $templates = array()) {
  function __construct($type = 'side', $conditionals = array(), $templates = array(), $extra = null) {
    $this->conditionals = $conditionals;
    $this->templates    = $templates;
    $this->extra        = $extra;

    $conditionals = array_map(array($this, 'check_conditional_tag'), $this->conditionals);
    $templates    = array_map(array($this, 'check_page_template'), $this->templates);

    if (in_array(true, $conditionals) || in_array(true, $templates)) {
      $this->display = false;
    // AEA - Config sidebars by template
    } else {
      $barname_func = "roots_{$type}bar_by_template";
      $sidebar = $barname_func($this->extra);
      if (empty($sidebar) || !is_active_sidebar($sidebar)) {
         $this->display = false;
      }
    }
  }

  private function check_conditional_tag($conditional_tag) {
    if (is_array($conditional_tag)) {
      return $conditional_tag[0]($conditional_tag[1]);
    } else {
      return $conditional_tag();
    }
  }

  private function check_page_template($page_template) {
    return is_page_template($page_template);
  }
}

// AEA - Config sidebars by template
function roots_sidebar_by_template($extra = null) {
  switch (Roots_Wrapping::$base) {
    case 'single':                      return 'post-sidebar';
    case 'archive':                     return 'blog-sidebar';
  }
  return false;
}

function roots_homebar_by_template($extra = null) {
  if (is_front_page()) return 'homebar';
  return false;
}

function roots_footerbar_by_template($extra = null) {
  return $extra . '-footerbar';
}



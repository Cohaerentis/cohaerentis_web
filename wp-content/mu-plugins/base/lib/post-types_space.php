<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Space custom post type
 */
function base_register_space_post_type() {
   $labels = array(
      'name'               => __('Spaces'),
      'singular_name'      => __('Space'),
      'add_new'            => __('Add new'),
      'add_new_item'       => __('Add an space'),
      'edit_item'          => __('Edit an space'),
      'new_item'           => __('New space'),
      'view_item'          => __('View space'),
      'search_items'       => __('Search spaces'),
      'not_found'          => __('No spaces found'),
      'not_found_in_trash' => __('No spaces found in trash'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'menu_name'          => __('Space')
   );

   $args = array(
      'label'               => 'space',
      'description'         => __('Space'),
      'labels'              => $labels,
      'taxonomies'          => array(),
      'public'              => true,
      'exclude_from_search' => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'publicly_queryable'  => true,
      'query_var'           => true,
      'rewrite'             => array('slug' => 'space'),
      'capability_type'     => 'page',
      'has_archive'         => true,
      'can_export'          => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array('title', 'editor', 'excerpt',
                                     'thumbnail', 'revisions',
                                     'custom-fields')
   );

   register_post_type('space', $args);
}
add_action('init', 'base_register_space_post_type');


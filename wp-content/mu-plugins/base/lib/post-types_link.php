<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Link custom post type
 */
function base_register_link_post_type() {
   $labels = array(
      'name'               => __('Links'),
      'singular_name'      => __('Link'),
      'add_new'            => __('Add new'),
      'add_new_item'       => __('Add an link'),
      'edit_item'          => __('Edit an link'),
      'new_item'           => __('New link'),
      'view_item'          => __('View link'),
      'search_items'       => __('Search links'),
      'not_found'          => __('No links found'),
      'not_found_in_trash' => __('No links found in trash'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'menu_name'          => __('Link')
   );

   $args = array(
      'label'               => 'link',
      'description'         => __('Link'),
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
      'rewrite'             => array('slug' => 'link'),
      'capability_type'     => 'page',
      'has_archive'         => true,
      'can_export'          => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array('title', 'thumbnail', 'custom-fields')
   );

   register_post_type('link', $args);
}
add_action('init', 'base_register_link_post_type');


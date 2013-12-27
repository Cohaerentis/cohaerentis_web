<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Partner custom post type
 */
function base_register_partner_post_type() {
   $labels = array(
      'name'               => __('Partners'),
      'singular_name'      => __('Partner'),
      'add_new'            => __('Add new'),
      'add_new_item'       => __('Add an partner'),
      'edit_item'          => __('Edit an partner'),
      'new_item'           => __('New partner'),
      'view_item'          => __('View partner'),
      'search_items'       => __('Search partners'),
      'not_found'          => __('No partners found'),
      'not_found_in_trash' => __('No partners found in trash'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'menu_name'          => __('Partner')
   );

   $args = array(
      'label'               => 'partner',
      'description'         => __('Partner'),
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
      'rewrite'             => array('slug' => 'partner'),
      'capability_type'     => 'page',
      'has_archive'         => true,
      'can_export'          => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array('title', 'editor', 'excerpt',
                                     'thumbnail', 'revisions',
                                     'custom-fields')
   );

   register_post_type('partner', $args);
}
add_action('init', 'base_register_partner_post_type');


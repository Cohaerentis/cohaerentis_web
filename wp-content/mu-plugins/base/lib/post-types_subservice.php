<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Subservice custom post type
 */
function base_register_subservice_post_type() {
   $labels = array(
      'name'               => __('Subservices'),
      'singular_name'      => __('Subservice'),
      'add_new'            => __('Add new'),
      'add_new_item'       => __('Add an subservice'),
      'edit_item'          => __('Edit an subservice'),
      'new_item'           => __('New subservice'),
      'view_item'          => __('View subservice'),
      'search_items'       => __('Search subservices'),
      'not_found'          => __('No subservices found'),
      'not_found_in_trash' => __('No subservices found in trash'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'menu_name'          => __('Subservice')
   );

   $args = array(
      'label'               => 'subservice',
      'description'         => __('Subservice'),
      'labels'              => $labels,
      'taxonomies'          => array('service'),
      'public'              => true,
      'exclude_from_search' => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'publicly_queryable'  => true,
      'query_var'           => true,
      'rewrite'             => array('slug' => 'subservice'),
      'capability_type'     => 'page',
      'has_archive'         => true,
      'can_export'          => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array('title', 'editor', 'excerpt',
                                     'thumbnail', 'revisions',
                                     'custom-fields')
   );

   register_post_type('subservice', $args);
}
add_action('init', 'base_register_subservice_post_type');


/**
 * Service taxonomy
 */
function base_register_service_taxonomy() {
   $labels = array(
      'name'               => __('Services'),
      'singular_name'      => __('Service'),
      'search_items'       => __('Search services'),
      'all_items'          => __('All services'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'edit_item'          => __('Edit service'),
      'update_item'        => __('Update service'),
      'add_new_item'       => __('Add new service'),
      'new_item_name'      => __('Service name'),
      'menu_name'          => __('Service')
   );

   $args = array(
      'hierarchical'       => false,
      'labels'             => $labels,
      'public'             => true,
      'show_ui'            => true,
      'show_admin_column'  => true,
      'show_in_nav_menus'  => true,
      'show_tagcloud'      => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'service'),
   );
   register_taxonomy('service', array('subservice'), $args);
}
add_action('init', 'base_register_service_taxonomy');

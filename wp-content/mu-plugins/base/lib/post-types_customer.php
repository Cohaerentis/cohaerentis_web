<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Customer custom post type
 */
function base_register_customer_post_type() {
   $labels = array(
      'name'               => __('Customers'),
      'singular_name'      => __('Customer'),
      'add_new'            => __('Add new'),
      'add_new_item'       => __('Add an customer'),
      'edit_item'          => __('Edit an customer'),
      'new_item'           => __('New customer'),
      'view_item'          => __('View customer'),
      'search_items'       => __('Search customers'),
      'not_found'          => __('No customers found'),
      'not_found_in_trash' => __('No customers found in trash'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'menu_name'          => __('Customer')
   );

   $args = array(
      'label'               => 'customer',
      'description'         => __('Customer'),
      'labels'              => $labels,
      'taxonomies'          => array('experience'),
      'public'              => true,
      'exclude_from_search' => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'publicly_queryable'  => true,
      'query_var'           => true,
      'rewrite'             => array('slug' => 'customer'),
      'capability_type'     => 'page',
      'has_archive'         => true,
      'can_export'          => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array('title', 'thumbnail', 'custom-fields')
   );

   register_post_type('customer', $args);
}
add_action('init', 'base_register_customer_post_type');

/**
 * Experience taxonomy
 */
function base_register_experience_taxonomy() {
   $labels = array(
      'name'               => __('Experiences'),
      'singular_name'      => __('Experience'),
      'search_items'       => __('Search experiences'),
      'all_items'          => __('All experiences'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'edit_item'          => __('Edit experience'),
      'update_item'        => __('Update experience'),
      'add_new_item'       => __('Add new experience'),
      'new_item_name'      => __('Experience name'),
      'menu_name'          => __('Experience')
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
      'rewrite'            => array('slug' => 'experience'),
   );
   register_taxonomy('experience', array('customer'), $args);
}
add_action('init', 'base_register_experience_taxonomy');

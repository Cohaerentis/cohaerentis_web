<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Person custom post type
 */
function base_register_person_post_type() {
   $labels = array(
      'name'               => __('Persons'),
      'singular_name'      => __('Person'),
      'add_new'            => __('Add new'),
      'add_new_item'       => __('Add an person'),
      'edit_item'          => __('Edit an person'),
      'new_item'           => __('New person'),
      'view_item'          => __('View person'),
      'search_items'       => __('Search persons'),
      'not_found'          => __('No persons found'),
      'not_found_in_trash' => __('No persons found in trash'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'menu_name'          => __('Person')
   );

   $args = array(
      'label'               => 'person',
      'description'         => __('Person'),
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
      'rewrite'             => array('slug' => 'person'),
      'capability_type'     => 'page',
      'has_archive'         => true,
      'can_export'          => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array('title', 'editor', 'excerpt',
                                     'thumbnail', 'revisions',
                                     'custom-fields')
   );

   register_post_type('person', $args);
}
add_action('init', 'base_register_person_post_type');


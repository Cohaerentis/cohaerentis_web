<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Knowledge custom post type
 */
function base_register_knowledge_post_type() {
   $labels = array(
      'name'               => __('Knowledges'),
      'singular_name'      => __('Knowledge'),
      'add_new'            => __('Add new'),
      'add_new_item'       => __('Add an knowledge'),
      'edit_item'          => __('Edit an knowledge'),
      'new_item'           => __('New knowledge'),
      'view_item'          => __('View knowledge'),
      'search_items'       => __('Search knowledges'),
      'not_found'          => __('No knowledges found'),
      'not_found_in_trash' => __('No knowledges found in trash'),
      'parent_item'        => '',
      'parent_item_colon'  => '',
      'menu_name'          => __('Knowledge')
   );

   $args = array(
      'label'               => 'knowledge',
      'description'         => __('Knowledge'),
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
      'rewrite'             => array('slug' => 'knowledge'),
      'capability_type'     => 'page',
      'has_archive'         => true,
      'can_export'          => true,
      'hierarchical'        => false,
      'menu_position'       => null,
      'supports'            => array('title', 'editor', 'excerpt',
                                     'thumbnail', 'revisions',
                                     'custom-fields')
   );

   register_post_type('knowledge', $args);
}
add_action('init', 'base_register_knowledge_post_type');


<?php
/**
 * Custom meta boxes with the CMB plugin
 *
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Basic-Usage
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Field-Types
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Display-Options
 */

function base_meta_boxes($meta_boxes) {

   /**
    * Subservice meta box
    */
   $prefix = 'subservice_';
   $meta_boxes[] = array(
      'id'         => 'subservice',
      'title'      => __('Subservice options'),
      'pages'      => array('subservice'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('Description'),
            'desc' => __('Short description of this service'),
            'id' => $prefix . 'description',
            'type' => 'wysiwyg',
            'options' => array('textarea_rows' => 6),
         ),
         array(
            'name' => __('Subtitle'),
            'desc' => __('Content shown at the right side of the title'),
            'id' => $prefix . 'subtitle',
            'type' => 'wysiwyg',
            'options' => array('textarea_rows' => 6),
         ),
         array(
            'name' => __('Service brochure'),
            'desc' => __('PDF file'),
            'id' => $prefix . 'download',
            'type' => 'file',
            'save_id' => false, // save ID using true
            'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
         ),
         array(
            'name' => __('Related documents'),
            'desc' => __('Other files related with this service'),
            'id' => $prefix . 'related',
            'type' => 'file_list',
         ),
      ),
   );

   /**
    * Knowledge meta box
    */
   $prefix = 'knowledge_';
   $meta_boxes[] = array(
      'id'         => 'knowledge',
      'title'      => __('Knowledge options'),
      'pages'      => array('knowledge'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('Description'),
            'desc' => __('Short description of this knowledge'),
            'id' => $prefix . 'description',
            'type' => 'wysiwyg',
            'options' => array('textarea_rows' => 6),
         ),
         array(
            'name' => __('Subtitle'),
            'desc' => __('Content shown at the right side of the title'),
            'id' => $prefix . 'subtitle',
            'type' => 'wysiwyg',
            'options' => array('textarea_rows' => 6),
         ),
         array(
            'name' => __('Knowledge map'),
            'desc' => __('FreeMind file'),
            'id' => $prefix . 'download',
            'type' => 'file',
            'save_id' => false, // save ID using true
            'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
         ),
         array(
            'name' => __('Related documents'),
            'desc' => __('Other files related with this knowledge'),
            'id' => $prefix . 'related',
            'type' => 'file_list',
         ),
      ),
   );

   /**
    * Link meta box
    */
   $prefix = 'link_';
   $meta_boxes[] = array(
      'id'         => 'link',
      'title'      => __('Link options'),
      'pages'      => array('link'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('URL'),
            'desc' => __('URL link'),
            'id' => $prefix . 'url',
            'type' => 'text',
         ),
      ),
   );

   /**
    * Customer meta box
    */
   $prefix = 'customer_';
   $meta_boxes[] = array(
      'id'         => 'customer',
      'title'      => __('Customer options'),
      'pages'      => array('customer'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('URL'),
            'desc' => __('URL link'),
            'id' => $prefix . 'url',
            'type' => 'text',
         ),
      ),
   );

   /**
    * Partner meta box
    */
   $prefix = 'partner_';
   $meta_boxes[] = array(
      'id'         => 'partner',
      'title'      => __('Partner options'),
      'pages'      => array('partner'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('Infographic'),
            'desc' => __('Partner full image'),
            'id' => $prefix . 'infographic',
            'type' => 'file',
            'save_id' => false, // save ID using true
            'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
         ),
         array(
            'name' => __('Website'),
            'desc' => __('Website URL'),
            'id' => $prefix . 'website',
            'type' => 'text',
         ),
         array(
            'name' => __('Blog'),
            'desc' => __('Blog URL'),
            'id' => $prefix . 'blog',
            'type' => 'text',
         ),
         array(
            'name' => __('Facebook'),
            'desc' => __('Facebook URL'),
            'id' => $prefix . 'facebook',
            'type' => 'text',
         ),
         array(
            'name' => __('Twitter'),
            'desc' => __('Twitter URL'),
            'id' => $prefix . 'twitter',
            'type' => 'text',
         ),
         array(
            'name' => __('LinkedIn'),
            'desc' => __('LinkedIn URL'),
            'id' => $prefix . 'linkedin',
            'type' => 'text',
         ),
      ),
   );

   /**
    * Person meta box
    */
   $prefix = 'person_';
   $meta_boxes[] = array(
      'id'         => 'person',
      'title'      => __('Person options'),
      'pages'      => array('person'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('Mobile'),
            'desc' => __('Mobile phone'),
            'id' => $prefix . 'mobile',
            'type' => 'text',
         ),
         array(
            'name' => __('Email'),
            'desc' => __('Email address'),
            'id' => $prefix . 'email',
            'type' => 'text',
         ),
         array(
            'name' => __('Skype'),
            'desc' => __('Skype user'),
            'id' => $prefix . 'skype',
            'type' => 'text',
         ),
         array(
            'name' => __('Blog'),
            'desc' => __('Blog URL'),
            'id' => $prefix . 'blog',
            'type' => 'text',
         ),
         array(
            'name' => __('Twitter'),
            'desc' => __('Twitter URL'),
            'id' => $prefix . 'twitter',
            'type' => 'text',
         ),
         array(
            'name' => __('LinkedIn'),
            'desc' => __('LinkedIn URL'),
            'id' => $prefix . 'linkedin',
            'type' => 'text',
         ),
      ),
   );

   /**
    * Space meta box
    */
   $prefix = 'space_';
   $meta_boxes[] = array(
      'id'         => 'space',
      'title'      => __('Space options'),
      'pages'      => array('space'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('URL'),
            'desc' => __('URL link'),
            'id' => $prefix . 'url',
            'type' => 'text',
         ),
         array(
            'name' => __('Gallery'),
            'desc' => __('NGG Gallery name'),
            'id' => $prefix . 'gallery',
            'type' => 'text',
         ),
      ),
   );

   /**
    * Pages meta box
    */
   $prefix = 'page_';
   $meta_boxes[] = array(
      'id'         => 'page',
      'title'      => __('Page options'),
      'pages'      => array('page'),
      'context'    => 'normal',
      'priority'   => 'high',
      'show_names' => true,
      'fields'     => array(
         array(
            'name' => __('Subtitle'),
            'desc' => __('Content shown at the right side of the title'),
            'id' => $prefix . 'subtitle',
            'type' => 'wysiwyg',
            'options' => array('textarea_rows' => 6),
         ),
      ),
   );

   return $meta_boxes;
}
add_filter('cmb_meta_boxes', 'base_meta_boxes');

/**
 * Custom meta boxes with the Taxonomy Meta plugin
 *
 * @link http://www.deluxeblogtips.com/taxonomy-meta-script-for-wordpress
 */

function base_register_taxonomy_meta_boxes()
{
   // Make sure there's no errors when the plugin is deactivated or during upgrade
   if ( !class_exists( 'RW_Taxonomy_Meta' ) )
      return;

   $meta_sections = array();

   // Service meta section
   $prefix = 'service_';
   $meta_sections[] = array(
      'title' => __('Service options'),         // section title
      'taxonomies' => array('service'),         // list of taxonomies. Default is array('category', 'post_tag'). Optional
      'id' => $prefix . 'section',              // ID of each section, will be the option name

      'fields' => array(                        // list of meta fields
         array(
            'name' => __('Infographic'),               // field name
            'desc' => __('Image that describe this service'),       // field description, optional
            'id' => $prefix . 'infographic',           // field id, i.e. the meta key
            'type' => 'image'                   // image upload
         ),
         array(
            'name' => __('Content'),
            'desc' => __('Short content of this service'),
            'id' => $prefix . 'content',
            'type' => 'wysiwyg',                // WYSIWYG editor
            'std' => ''                         // default value, optional
         ),
      )
   );

   // Experience meta section
   $prefix = 'experience_';
   $meta_sections[] = array(
      'title' => __('Experience options'),         // section title
      'taxonomies' => array('experience'),         // list of taxonomies. Default is array('category', 'post_tag'). Optional
      'id' => $prefix . 'section',              // ID of each section, will be the option name

      'fields' => array(                        // list of meta fields
         array(
            'name' => __('Infographic'),               // field name
            'desc' => __('Image that describe this experience'),       // field description, optional
            'id' => $prefix . 'infographic',           // field id, i.e. the meta key
            'type' => 'image'                   // image upload
         ),
         array(
            'name' => __('Content'),
            'desc' => __('Short content of this experience'),
            'id' => $prefix . 'content',
            'type' => 'wysiwyg',                // WYSIWYG editor
            'std' => ''                         // default value, optional
         ),
      )
   );

   foreach ( $meta_sections as $meta_section ) {
      new RW_Taxonomy_Meta( $meta_section );
   }
}
add_action( 'admin_init', 'base_register_taxonomy_meta_boxes' );

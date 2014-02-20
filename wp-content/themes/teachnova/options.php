<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

   // This gets the theme name from the stylesheet (lowercase and without spaces)
   $themename = get_option( 'stylesheet' );
   $themename = preg_replace("/\W/", "_", strtolower($themename) );

   $optionsframework_settings = get_option('optionsframework');
   $optionsframework_settings['id'] = $themename;
   update_option('optionsframework', $optionsframework_settings);

   // echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

   // Pull all the pages into an array
   $options_pages = array();
   $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
   $options_pages[''] = 'Select a page:';
   foreach ($options_pages_obj as $page) {
      $options_pages[$page->ID] = $page->post_title;
   }

   $options = array();

   $options[] = array(
      'name' => __('Social Settings'),
      'type' => 'heading');

   $options[] = array(
      'name' => __('LinkedIn'),
      'desc' => __('LinkedIn company page URL.'),
      'id' => 'linkedin',
      'std' => '',
      'type' => 'text');

   $options[] = array(
      'name' => __('Facebook'),
      'desc' => __('Facebook fan page URL.'),
      'id' => 'facebook',
      'std' => '',
      'type' => 'text');

   $options[] = array(
      'name' => __('Twitter'),
      'desc' => __('Twitter account URL.'),
      'id' => 'twitter',
      'std' => '',
      'type' => 'text');

   $options[] = array(
      'name' => __('Google +'),
      'desc' => __('Google + account URL.'),
      'id' => 'google',
      'std' => '',
      'type' => 'text');

   $options[] = array(
      'name' => __('Contact Settings'),
      'type' => 'heading');

   $options[] = array(
      'name' => __('Email'),
      'desc' => __('Public email account.'),
      'id' => 'email',
      'std' => '',
      'type' => 'text');

   $options[] = array(
      'name' => __('Phone'),
      'desc' => __('Public phone numbre.'),
      'id' => 'phone',
      'std' => '',
      'type' => 'text');

   $options[] = array(
      'name' => __('Address'),
      'desc' => __('Office address'),
      'id' => 'address',
      'type' => 'textarea');


   return $options;
}

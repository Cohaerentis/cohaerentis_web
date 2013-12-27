<?php
/*
Plugin Name:  Site Specific Functionality
Description:  Custom post types, taxonomies, metaboxes and shortcodes
*/

// Samples
// TODO : Use separete files for each post-type
require_once(dirname(__FILE__) . '/lib/post-types_subservice.php');
require_once(dirname(__FILE__) . '/lib/post-types_knowledge.php');
require_once(dirname(__FILE__) . '/lib/post-types_person.php');
require_once(dirname(__FILE__) . '/lib/post-types_partner.php');
require_once(dirname(__FILE__) . '/lib/post-types_space.php');
require_once(dirname(__FILE__) . '/lib/post-types_customer.php');
require_once(dirname(__FILE__) . '/lib/post-types_link.php');
require_once(dirname(__FILE__) . '/lib/meta-boxes.php');
require_once(dirname(__FILE__) . '/lib/shortcodes.php');


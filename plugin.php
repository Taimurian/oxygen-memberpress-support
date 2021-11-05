<?php
/**
 * Plugin Name: Oxygen MemberPress Template Support
 * Plugin URI:  https://github.com/Taimurian/oxygen-memberpress-support/
 * GitHub URI:  Taimurian/oxygen-memberpress-support/
 * Description: Allows MemberPress template customisation without using a theme. Made for Oxygen Builder.
 * Version:     1.0.0
 * Author:      Taimur Aziz
 * Author URI:  https://oxyflow.io/
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    OxygenMemberPressSupport
 * @since      1.0.0
 * @copyright  Copyright (c) 2021, Taimur Aziz
 * @license    GPL-2.0+
 */

if (!defined( 'WPINC' )) {
	die;
}


add_filter( 'mepr_view_paths', 'memberpress_template_dir' );

/**
 * Adds plugin subfolder as new location for MemberPress to look for templates.
 *
 * @since 1.0.0
 *
 * @param array $paths Original template locations
 * @return new template location as /mepr_templates/
 */
function memberpress_template_dir($paths) {

	$paths 		= [];
	$paths[1] 	= plugin_dir_path( __FILE__ ) . 'mepr_templates/';
    $paths[100] = WP_PLUGIN_DIR.'/memberpress/app/views';
    
	return $paths;
}
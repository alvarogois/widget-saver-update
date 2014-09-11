<?php
/*
Plugin Name: Widget Saver Update
Plugin URI: https://wordpress.org/support/topic/is-killing-layout-of-widget-page-in-wp-38?replies=9
Description: Saves widget layouts so that they can be restored at a later date.
Version: 2.0.1
Author: Zorgbargle | Phenomenoodle | Redzephyr (hack)
Author URI: https://wordpress.org/support/profile/redzephyr
*/

// Implementation note: this plugin attempts to minimise name-space polution by not declaring any global variables or
// functions, try to keep it that way!

// prevent direct calls to this file from doing anything.
if(!defined('ABSPATH') || !defined('WPINC'))
{
	die();
}

// If anything else clashes with our main classes, report a warning on the admin plugin panel, and do nothing else. 
if (class_exists('PNDL_WidgetSaverPlugin', false))
{
	if (is_admin())
	{
		// add action using create_function to avoid adding a global function.
		add_action("after_plugin_row_".basename(dirname(__FILE__)) . "/" . basename(__FILE__), 
			create_function('', 'echo "<tr><td /><td /><td><strong>'.__('Warning').':</strong> '. __('There is a name-clash with another plugin. This plugin will not function until the name clash has been resolved.').'<td></tr>";'));
	}
	return;
}
// No clash, so we can launch the plugin.
else
{
	// import the file containing the plugin class definition
	require_once 'include/widgetsaver_plugin.php';

	// create and register plugin using static method on the plugin class, this avoids potential name clashes with 
	// variable names/function names
	PNDL_WidgetSaverPlugin::create(__FILE__);
}
?>
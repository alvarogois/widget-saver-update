widget-saver-update
===================

Simple update to the original Widget Saver WordPress plugin, suggested by Redzephyr here: http://wordpress.org/support/topic/is-killing-layout-of-widget-page-in-wp-38


=== Plugin Name ===
Contributors: zorgbargle, Redzephyr (suggested the code for 3.8+ compatibility), alvarogois (just typed it and uploaded it to GitHub)
Donate link: http://www.phenomenoodle.com/free-resources
Tags: widgets, admin, administration, theme
Requires at least: 2.8
Tested up to: 4.0

Saves the current widget layout and allows the layout to be restored at a later date.

Note: the original zorgbargle plugin can be found in the WordPress.org site (http://wordpress.org/plugins/widget-saver/). The suggested update can be found there also: http://wordpress.org/support/topic/is-killing-layout-of-widget-page-in-wp-38 

== Description ==

A plugin that adds "Add", "Save", "Restore" and "Delete" buttons to the Widgets configuration page with the following
functionality:

* Add: Adds a new named widget layout and saves the current widget layout against the new layout name.
* Save: Saves the current widget layout against the selected layout name.
* Restore: Restores the previously saved widget layout. If the theme name shown next to the layout name in the
   drop-down matches the current theme, widgets will be restored to the sidebar they were located in when the layout was
   saved.
* Delete: Deletes the selected widget layout - does not modify the current layout of the widgets.

Note that the behaviour has changed from version 1 - widget layouts are not automatically restored when themes are
switched. Layout choice is now a manual step since it is possible to save multiple widget layouts for a given theme.
Once a theme has been activated, use the "Layouts" drop-down to select a previously saved layout that matches the
current theme.

The reset button has been removed as it was too easy to remove all widgets with one click.

= Typical Usage =

This plugin is useful for trying different widget layouts, making it easy to revert back to a previous layout if the
current layout is not working. It can also be useful when switching between themes. Different themes will offer different
sidebar areas, and often there is not a direct mapping from one theme's sidebars to another. This plugin can be used
to save a widget layout for each theme. When the themes are switched, the appropriate widget layout can then be restored
saving the time it usually takes to drag each widget from an inactive sidebar into the correct sidebar.

A typical process would be as follows:

1. Type your own layout name into the text field, and click "Add" to add and save the current widget layout. This name
   is now available in the "Layouts" drop-down.
1. Rearrange the widgets, move them to different sidebars, or move them into the inactive widgets box.
1. Type a new layout name, and click "Add" to add a second widget layout.
1. Select the layout name you created in step 1 from the drop-down, and click "Restore". Your widgets will be
repositioned to match this layout.
1. Select your layout name from step 3, and click "Restore". Your widgets will now be repositioned to match your
   second layout.

== Frequently Asked Questions ==

= Is widget content saved =

No. Only widget layout is saved. Widget layout is the widget's sidebar location, as well as its order within the sidebar.

= I removed a widget from a sidebar, and now it is not being restored =

Widgets that are deleted can not be restored because widget content/settings are not saved. Dragging a widget back into
the "Available Widgets" area effectively deletes the widget. In order to remove a widget
from view, but keep its content, drag it into the "Inactive Widgets" area. This will ensure that the widget 'instance'
is not deleted, and can be restored in different layouts.

== Installation ==

1. Install and activate the plugin as usual.
1. Go to Appearance - Widgets, the add, save, restore and delete buttons should now be available at the top of the page.

Note that there are no plugin-specific settings, all configuration is done via the widget configuration page.

== Changelog ==
= 2.0.1 =
* Updated with Redzephyr code to be compatible with WordPress 3.8 (tested through 4.0).
* Added to GitHub for easy distribution.
= 2.0.0 =
* Updated to be compatible with WordPress 3.4.2.
* Added ability to save multiple named layouts per theme.
* Removed reset button for resetting widgets.
* Removed auto-restore on theme activation.
= 1.0.1 =
* Corrected readme.txt.
= 1.0.0 =
* Initial version.

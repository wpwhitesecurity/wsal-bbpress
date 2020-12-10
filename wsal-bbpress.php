<?php
/**
 * Plugin Name: WP Activity Log for bbPress
 * Plugin URI: https://wpactivitylog.com/
 * Description: An extension to the WP Activity Log Plugin to track events within the bbPress plugin.
 * Text Domain: wsal-bbpress
 * Domain Path: /languages
 * Author: WP White Security
 * Author URI: https://www.wpwhitesecurity.com/
 * Version: 1.0.2
 * License: GPL2
 *
 * @package Wsal
 * @subpackage Wsal Custom Events Loader
 */

/*
	Copyright(c) 2020  WP White Security  (email : info@wpwhitesecurity.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
	REQUIRED. Here we include and fire up the main core class. This will be needed regardless so be sure to leave line 37-39 in tact.
*/
require_once plugin_dir_path( __FILE__ ) . 'core/class-extension-core.php';
$core_settings = array(
	'text_domain'      => 'wsal-bbpress',
	'custom_alert_path' => trailingslashit( dirname( __FILE__ ) ) . 'wp-security-audit-log',
	'custom_sensor_path' => trailingslashit( trailingslashit( dirname( __FILE__ ) ) . 'wp-security-audit-log' . DIRECTORY_SEPARATOR . 'custom-sensors' ),
);
$wsal_extension = new \WPWhiteSecurity\ActivityLog\Extensions\Common\Core( $core_settings );

/*
	Ensure custom events are always avaiable.
 */
add_filter( 'wsal_custom_alerts_dirs', array( $wsal_extension, 'add_custom_events_path' ) );

// Include extension specific functions.
require_once plugin_dir_path( __FILE__ ) . 'includes/wsal-functions.php';

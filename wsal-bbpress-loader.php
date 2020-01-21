<?php
/**
 * Plugin Name: WP Security Audit Log for BBPress
 * Plugin URI: https://www.wpsecurityauditlog.com/
 * Description: An addon to the WP Security Audit Log Plugin to track events within the BBPress plugin.
 * Text Domain: wp-security-audit-log
 * Author URI: http://www.wpwhitesecurity.com/
 * License: GPL2
 *
 * @package Wsal
 * @subpackage Wsal Custom Events Loader
 */

/*
 * Hook into WSAL's action that runs before sensors get loaded.
 */
add_action( 'wsal_before_sensor_load', 'wsal_bbpress_plugin_add_custom_sensors_and_event' );

/**
 * Used to hook into the `wsal_before_sensor_load` action to add some filters
 * for including custom sensor and event directories.
 *
 * @method wsal_mu_plugin_add_custom_sensors_and_events_dirs
 * @since  1.0.0
 */
function wsal_bbpress_plugin_add_custom_sensors_and_event( $sensor ) {
	add_filter( 'wsal_custom_sensors_classes_dirs', 'wsal_bbpress_plugin_custom_sensors_path' );
	add_filter( 'wsal_custom_alerts_dirs', 'wsal_bbpress_plugin_add_custom_events_path' );
	return $sensor;
}

/**
 * Adds a new path to the sensors directory array which is checked for when the
 * plugin loads the sensors.
 *
 * @method wsal_bbpress_plugin_custom_sensors_path
 * @since  1.0.0
 * @param  array $paths An array containing paths on the filesystem.
 * @return array
 */
function wsal_bbpress_plugin_custom_sensors_path( $paths = array() ) {
	$paths   = ( is_array( $paths ) ) ? $paths : array();
	$paths[] = trailingslashit( trailingslashit( dirname( __FILE__ ) ) . 'wp-security-audit-log' . DIRECTORY_SEPARATOR . 'custom-sensors' );
	return $paths;
}

/**
 * Adds a new path to the custom events directory array which is checked for
 * when the plugin loads all of the events.
 *
 * @method wsal_bbpress_plugin_add_custom_events_path
 * @since  1.0.0
 * @param  array $paths An array containing paths on the filesystem.
 * @return array
 */
function wsal_bbpress_plugin_add_custom_events_path( $paths ) {
	$paths   = ( is_array( $paths ) ) ? $paths : array();
	$paths[] = trailingslashit( trailingslashit( dirname( __FILE__ ) ) . 'wp-security-audit-log' );
	return $paths;
}

/**
 * Adds new custom event objects for our plugin
 *
 * @method wsal_bbpress_add_custom_event_objects
 * @since  1.0.0
 * @param  array $objects An array of default objects.
 * @return array
 */
function wsal_bbpress_add_custom_event_objects( $objects ) {
	$new_objects = array(
		'bbpress'       => __( 'BBPress', 'wp-security-audit-log' ),
		'bbpress-forum' => __( 'BBPress Forum', 'wp-security-audit-log' ),
	);

	// combine the two arrays.
	$objects = array_merge( $objects, $new_objects );

	return $objects;
}

/**
 * Adds new custom event object text for our plugin
 *
 * @method wsal_bbpress_add_custom_event_object_text
 * @since  1.0.0
 * @param string $display the text to display.
 * @param string $object the current object type.
 * @return string
 */
function wsal_bbpress_add_custom_event_object_text( $display, $object ) {
	if ( 'bbpress' === $object ) {
			$display = __( 'BBPress', 'wp-security-audit-log' );
	}
	if ( 'bbpress-forum' === $object ) {
			$display = __( 'BBPress Forum', 'wp-security-audit-log' );
	}

	return $display;
}

add_filter( 'wsal_event_objects', 'wsal_bbpress_add_custom_event_objects' );
add_filter( 'wsal_event_object_text', 'wsal_bbpress_add_custom_event_object_text', 10, 2 );

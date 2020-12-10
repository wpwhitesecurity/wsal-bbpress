<?php

add_filter( 'wsal_event_objects', 'wsal_bbpress_add_custom_event_objects', 10, 2 );
add_filter( 'wsal_link_filter', 'wsal_bbpress_add_custom_meta_format', 10, 2 );
add_filter( 'wsal_meta_formatter_custom_formatter', 'wsal_bbpress_add_custom_meta_format', 10, 2 );

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
		'bbpress'       => __( 'BBPress', 'wsal-bbpress' ),
		'bbpress-forum' => __( 'BBPress Forum', 'wsal-bbpress' ),
	);

	// combine the two arrays.
	$objects = array_merge( $objects, $new_objects );

	return $objects;
}

/**
 * Adds new meta formatting for our plugion
 *
 * @method wsal_wpforms_add_custom_meta_format
 * @since  1.0.0
 */
function wsal_bbpress_add_custom_meta_format( $value, $name ) {
	$check_value = (string) $value;
  if ( '%EditorLinkForum%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View the Forum in editor', 'wsal-bbpress' ) . '</a>';
		} else {
			return '';
		}
	}
  if ( '%EditorLinkTopic%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			  return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View the Topic in editor', 'wsal-bbpress' ) . '</a>';
		} else {
			return '';
		}
	}
	return $value;
}

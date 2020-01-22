<?php
/**
 * Sensor: System Activity
 *
 * System activity sensor class file.
 *
 * @since 1.0.0
 * @package Wsal
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * System Activity sensor.
 *
 * 6000 Events automatically pruned by system
 * 6001 Option Anyone Can Register in WordPress settings changed
 * 6002 New User Default Role changed
 * 6003 WordPress Administrator Notification email changed
 * 6004 WordPress was updated
 * 6005 User changes the WordPress Permalinks
 * 6007 User requests non-existing pages (404 Error Pages)
 * 8009 User changed forum's role
 * 8010 User changed option of a forum
 * 8012 User changed time to disallow post editing
 * 8013 User changed the forum setting posting throttle time
 * 1006 User logged out all other sessions with the same username
 * 6004 WordPress was updated
 * 6008 Enabled/Disabled the option Discourage search engines from indexing this site
 * 6009 Enabled/Disabled comments on all the website
 * 6010 Enabled/Disabled the option Comment author must fill out name and email
 * 6011 Enabled/Disabled the option Users must be logged in and registered to comment
 * 6012 Enabled/Disabled the option to automatically close comments
 * 6013 Changed the value of the option Automatically close comments
 * 6014 Enabled/Disabled the option for comments to be manually approved
 * 6015 Enabled/Disabled the option for an author to have previously approved comments for the comments to appear
 * 6016 Changed the number of links that a comment must have to be held in the queue
 * 6017 Modified the list of keywords for comments moderation
 * 6018 Modified the list of keywords for comments blacklisting
 *
 * @package Wsal
 * @subpackage Sensors
 */
class WSAL_Sensors_BBPressSystemSensor extends WSAL_AbstractSensor {

	/**
	 * Listening to events using WP hooks.
	 */
	public function HookEvents() {
		add_action( 'admin_init', array( $this, 'EventAdminInit' ) );
	}

	/**
	 * Triggered when a user accesses the admin area.
	 */
	public function EventAdminInit() {
		// Filter global arrays for security.
		$post_array   = filter_input_array( INPUT_POST );
		$get_array    = filter_input_array( INPUT_GET );
		$server_array = filter_input_array( INPUT_SERVER );

		// Make sure user can actually modify target options.
		if ( ! current_user_can( 'manage_options' ) && isset( $post_array['_wpnonce'] ) && ! wp_verify_nonce( $post_array['_wpnonce'], 'update' ) ) {
			return;
		}

		$actype = '';
		if ( ! empty( $server_array['SCRIPT_NAME'] ) ) {
			$actype = basename( $server_array['SCRIPT_NAME'], '.php' );
		}

		$is_option_page      = 'options' === $actype;
		$is_network_settings = 'settings' === $actype;
		$is_permalink_page   = 'options-permalink' === $actype;

		/* BBPress Forum support  Setting */
		if ( isset( $post_array['action'] ) && 'update' === $post_array['action'] && isset( $post_array['_bbp_default_role'] ) ) {
			$old_role = get_option( '_bbp_default_role' );
			$new_role = $post_array['_bbp_default_role'];
			if ( $old_role != $new_role ) {
				$this->plugin->alerts->Trigger(
					8009,
					array(
						'OldRole' => $old_role,
						'NewRole' => $new_role,
					)
				);
			}
		}

		if ( isset( $post_array['action'] ) && 'update' === $post_array['action'] && isset( $post_array['option_page'] ) && ( 'bbpress' === $post_array['option_page'] ) ) {
			// Anonymous posting.
			$allow_anonymous = get_option( '_bbp_allow_anonymous' );
			$old_status      = ! empty( $allow_anonymous ) ? 1 : 0;
			$new_status      = ! empty( $post_array['_bbp_allow_anonymous'] ) ? 1 : 0;

			if ( $old_status !== $new_status ) {
				$this->plugin->alerts->Trigger(
					8010,
					array( 'EventType' => ( 1 === $new_status ) ? 'enabled' : 'disabled' )
				);
			}

			// Disallow editing after.
			$bbp_edit_lock = get_option( '_bbp_edit_lock' );
			$old_time      = ! empty( $bbp_edit_lock ) ? $bbp_edit_lock : '';
			$new_time      = ! empty( $post_array['_bbp_edit_lock'] ) ? $post_array['_bbp_edit_lock'] : '';
			if ( $old_time != $new_time ) {
				$this->plugin->alerts->Trigger(
					8012,
					array(
						'OldTime' => $old_time,
						'NewTime' => $new_time,
					)
				);
			}

			// Throttle posting every.
			$bbp_throttle_time = get_option( '_bbp_throttle_time' );
			$old_time2         = ! empty( $bbp_throttle_time ) ? $bbp_throttle_time : '';
			$new_time2         = ! empty( $post_array['_bbp_throttle_time'] ) ? $post_array['_bbp_throttle_time'] : '';
			if ( $old_time2 != $new_time2 ) {
				$this->plugin->alerts->Trigger(
					8013,
					array(
						'OldTime' => $old_time2,
						'NewTime' => $new_time2,
					)
				);
			}
		}
	}
}

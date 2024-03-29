=== WP Activity Log for bbPress ===
Contributors: WPWhiteSecurity
Plugin URI: https://wpactivitylog.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.html
Tags: activity log for bbPress, WP Activity Log extension, activity logs
Requires at least: 4.5
Tested up to: 6.1.1
Stable tag: 1.0.6
Requires PHP: 7.2

Keep a log of changes that happen in the bbPress plugin, forums and more!

== Description ==

bbPress is forum software from the creators of WordPress. Quickly setup a place for asyncronous discussion, subscriptions, and more!

Keep a record of the changes that happen on your bbPress plugin. For example when someone creates, modifies or deletes a forum, changes topics or changes the forums settings.

Refer to the list of [activity log events for bbPress](https://wpactivitylog.com/support/kb/list-wordpress-activity-log-event-ids/#bbpress) for a complete list of bbPress forum changes the plugin can keep a log of.

#### About WP Activity Log
[WP Activity Log](https://wpactivitylog.com/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description) is the most comprehensive real time activity log plugin for WordPress. It helps thousands administrators and security professionals keep an eye on what is happening on their websites and multisite networks.

WP Activity Log is also the most highly rated WordPress activity log plugin and have been featured on popular sites such as WPBeginner, GoDaddy and Kinsta.

### Getting started: activity logs for bbPress

To keep a log of the changes that happen on your bbPress plugin, forums, topics and other plugin components simply:

1. Install the [WP Activity Log plugin](https://wpactivitylog.com/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description)
1. Install this extension from the section <i>Enable/disable events</i> > <i>Third party extensions</i>.

### With this extension you can keep a log of:

Some of the changes you can keep a log of when you install this extension with the WP Activity Log plugin are, when a user:

* Adds, modifies, renames or deletes a forum
* Changes the status, visibility, type, auto role and other forum settings
* Changes global plugin settings such as the posting throttle time
* Adds, modifies, renames or deletes a topic,
* Changes the roles of users in the forum

Refer to the [activity logs event IDs for bbPress](Refer to the list of [activity log events for bbPress](https://wpactivitylog.com/support/kb/list-wordpress-activity-log-event-ids/#bbpress) for a complete list of the changes the plugin can keep a log of.

== Installation ==

=== Install this extension for bbPress from within WP Activity Log (easiest method) ===

1. Navigate to the section <i>Enable/disable events</i> > <i>Third party extensions</i>.
1. Click <i>Install extension</i> under the bbPress logo and extension description.

=== Install this extension from within WordPress ===

1. Ensure WP Activity Log is already installed.
1. Visit 'Plugins > Add New'.
1. Search for 'WP Activity Log extension for bbPress'.
1. Install and activate the extension.

=== Install this extension manually ===

1. Ensure WP Activity Log is already installed.
1. Download the plugin and extract the files.
1. Upload the `wsal-bbpress` folder to the `/wp-content/plugins/` folder on your website.
1. Activate the WP Activity Log extension for bbPress plugin from the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Support and Documentation =
Please refer to our [Support & Documentation pages](https://wpactivitylog.com/support/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description) for all the technical information and support documentation on the WP Activity Log plugin.

== Screenshots ==

1. The easiest way to install the extension is from within the WP Activity Log plugin.
1. Forms, entries, notifications and other bbPress plugin changes reported in the WordPress activity log.

== Changelog ==

= 1.0.6 (2023-03-23) =

* **Plugin improvements**
	* Support for WP Activity Log 4.5 (upcoming update).

= 1.0.5 (2022-11-17) =

* **Improvements**
	* Ensure compatability with current and upcoming [WP Activity Log](https://wpactivitylog.com) release.
	* Event 8001 (Forum opened/closed) can now be triggered via quick-edits in the WordPress dashboard.
	
= 1.0.4 (2022-04-22) =

* **New event IDs**
	* ID 8024: Created a new topic tag.
	* ID 8025: Deleted a tag.
	* ID 8026: Renamed a topic tag.
	* ID 8027: Changed the slug of a topic tag.

* **Improvement**
	* Updated the plugin translations to ensure all strings can be translated.
	* Updated plugin to meet the WordPress Coding Standards.
	
* **Bug fixes**
	* Updated function names inline with the release of WP Activity Log 4.4.1 to avoid PHP errors during certain actions.
	* Fixed function error causing WP Activity Log users to be unable to activate this extension.
	* Ensure BBpress post types are always ignored for standard WP Activity Log events.
	* Ensure events 8013 and 8012 are reported only when a change is detected.

= 1.0.3 (2021-04-28) =

Release notes: [Major update of all the activity log extensions](https://wpactivitylog.com/core-update-extensions-2-0/)

* **Improvement**
	* Events now use the latest event format used in [WP Activity Log](https://wpactivitylog.com).
	* Updated the core to the latest improved core (better performance and more efficient).
	* Extension can now be activated only at network level.
	* Extension name added to plugin's admin notices.
	
* **Bug fixes**
	* Several errors reported upon deleting a form.
	* Fixed broken backward compatability issue.
	* Fixed broken backward compatability issue.
	
= 1.0.2 (2020-09-04) =

**Improvement**
	*Updated the code with the new core code.

= 1.0.1 (2020-05-20) =

**Main plugin rename update**
	*[WP Security Audit Log has been renamed to WP Activity Log](https://wpactivitylog.com/wp-security-audit-log-renamed-wp-activity-log/).

= 1.0.0 (2020-04-15) =

	*Initial release.

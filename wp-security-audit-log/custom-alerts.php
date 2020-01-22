<?php

$custom_alerts = array(
	__( 'bbPress Forums', 'wp-security-audit-log' ) => array(
		__( 'Forums', 'wp-security-audit-log' ) => array(
			array( 8000, WSAL_INFORMATIONAL, __( 'User created new forum', 'wp-security-audit-log' ), __( 'New forum called %ForumName% %LineBreak% %EditorLinkForum%', 'wp-security-audit-log' ), 'bbpress-forum', 'created' ),
			array( 8001, WSAL_MEDIUM, __( 'User changed status of a forum', 'wp-security-audit-log' ), __( 'Changed the status of the forum %ForumName% %LineBreak% Previous Status: %OldStatus% %LineBreak% New Status: %NewStatus% %LineBreak% %EditorLinkForum%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8002, WSAL_MEDIUM, __( 'User changed visibility of a forum', 'wp-security-audit-log' ), __( 'Changed the visibility of the forum %ForumName% %LineBreak% Previous visibility: %OldVisibility% %LineBreak% New visibility: %NewVisibility% %LineBreak% %EditorLinkForum%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8003, WSAL_LOW, __( 'User changed the URL of a forum', 'wp-security-audit-log' ), __( 'Changed the URL of the forum %ForumName% %LineBreak% Previous URL: %OldUrl% %LineBreak% New URL: %NewUrl% %LineBreak% %EditorLinkForum%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8004, WSAL_INFORMATIONAL, __( 'User changed order of a forum', 'wp-security-audit-log' ), __( 'Changed the sorting order of the forum %ForumName% %LineBreak% Previous sorting order: %OldOrder% %LineBreak% New sorting order: %NewOrder% %LineBreak% %EditorLinkForum%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8005, WSAL_HIGH, __( 'User moved forum to trash', 'wp-security-audit-log' ), __( 'Moved the forum %ForumName% to trash', 'wp-security-audit-log' ), 'bbpress-forum', 'deleted' ),
			array( 8006, WSAL_HIGH, __( 'User permanently deleted forum', 'wp-security-audit-log' ), __( 'Permanently deleted the forum %ForumName%', 'wp-security-audit-log' ), 'bbpress-forum', 'deleted' ),
			array( 8007, WSAL_HIGH, __( 'User restored forum from trash', 'wp-security-audit-log' ), __( 'Restored the forum %ForumName% from trash', 'wp-security-audit-log' ), 'bbpress-forum', 'restored' ),
			array( 8008, WSAL_LOW, __( 'User changed the parent of a forum', 'wp-security-audit-log' ), __( 'Changed the parent of the forum %ForumName% %LineBreak% Previous parent: %OldParent% %LineBreak% New parent: %NewParent% %LineBreak% %EditorLinkForum%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8011, WSAL_LOW, __( 'User changed type of a forum', 'wp-security-audit-log' ), __( 'Changed the type of the forum %ForumName% %LineBreak% Previous type: %OldType% %LineBreak% New type: %NewType% %LineBreak% %EditorLinkForum%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
		),

		__( 'bbPress Forum Topics', 'wp-security-audit-log' ) => array(
			array( 8014, WSAL_INFORMATIONAL, __( 'User created new topic', 'wp-security-audit-log' ), __( 'New topic called %TopicName% %LineBreak% %EditorLinkTopic%', 'wp-security-audit-log' ), 'bbpress-forum', 'created' ),
			array( 8015, WSAL_INFORMATIONAL, __( 'User changed status of a topic', 'wp-security-audit-log' ), __( 'Changed the status of the topic %TopicName% %LineBreak% Previous status: %OldStatus% %LineBreak% New status: %NewStatus% %LineBreak% %EditorLinkTopic%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8016, WSAL_INFORMATIONAL, __( 'User changed type of a topic', 'wp-security-audit-log' ), __( 'Changed the type of the topic %TopicName% %LineBreak% Previous type: %OldType% %LineBreak% New type: %NewType% %LineBreak% %EditorLinkTopic%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8017, WSAL_INFORMATIONAL, __( 'User changed URL of a topic', 'wp-security-audit-log' ), __( 'Changed the URL of the topic %TopicName% %LineBreak% Previous URL: %OldUrl% %LineBreak% New URL: %NewUrl% %LineBreak% %EditorLinkTopic%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8018, WSAL_INFORMATIONAL, __( 'User changed the forum of a topic', 'wp-security-audit-log' ), __( 'Changed the forum of the topic %TopicName% %LineBreak% Previous forum: %OldForum% %LineBreak% New forum: %NewForum% %LineBreak% %EditorLinkTopic%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
			array( 8019, WSAL_MEDIUM, __( 'User moved topic to trash', 'wp-security-audit-log' ), __( 'Moved the %TopicName% to trash', 'wp-security-audit-log' ), 'bbpress-forum', 'deleted' ),
			array( 8020, WSAL_MEDIUM, __( 'User permanently deleted topic', 'wp-security-audit-log' ), __( 'Permanently deleted the topic %TopicName%', 'wp-security-audit-log' ), 'bbpress-forum', 'deleted' ),
			array( 8021, WSAL_INFORMATIONAL, __( 'User restored topic from trash', 'wp-security-audit-log' ), __( 'Restored the topic %TopicName% from trash', 'wp-security-audit-log' ), 'bbpress-forum', 'restored' ),
			array( 8022, WSAL_LOW, __( 'User changed visibility of a topic', 'wp-security-audit-log' ), __( 'Changed the visibility of the topic %TopicName% %LineBreak% Previous visibility: %OldVisibility% %LineBreak% New visibility: %NewVisibility% %LineBreak% %EditorLinkTopic%', 'wp-security-audit-log' ), 'bbpress-forum', 'modified' ),
		),

		__( 'bbPress Settings', 'wp-security-audit-log' ) => array(
			array( 8009, WSAL_HIGH, __( 'User changed forum\'s role', 'wp-security-audit-log' ), __( 'Changed the forum user\'s auto role %LineBreak% Previous role: %OldRole% %LineBreak% New role: %NewRole%', 'wp-security-audit-log' ), 'bbpress', 'modified' ),
			array( 8010, WSAL_CRITICAL, __( 'User changed option of a forum', 'wp-security-audit-log' ), __( 'The option for anonymous posting on the forums', 'wp-security-audit-log' ), 'bbpress', 'enabled' ),
			array( 8012, WSAL_MEDIUM, __( 'User changed time to disallow post editing', 'wp-security-audit-log' ), __( 'Changed the time to disallow post editing in the forums %LineBreak% Previous time: %OldTime% %LineBreak% New time: %NewTime%', 'wp-security-audit-log' ), 'bbpress', 'modified' ),
			array( 8013, WSAL_HIGH, __( 'User changed the forum setting posting throttle time', 'wp-security-audit-log' ), __( 'Changed the posting throttle time in the forums %LineBreak% Previous time: %OldTime% %LineBreak% New time: %NewTime%', 'wp-security-audit-log' ), 'bbpress', 'modified' ),
		),

		__( 'bbPress User Profiles', 'wp-security-audit-log' ) => array(
			array( 8023, WSAL_LOW, __( 'The forum role of a user was changed by another WordPress user', 'wp-security-audit-log' ), __( 'Change the forum role of user %TargetUsername% %LineBreak% Previous role: %OldRole% %LineBreak% New role: %NewRole% %LineBreak% First name: %FirstName% %LineBreak% Last name: %LastName% %LineBreak% %EditUserLink%', 'wp-security-audit-log' ), 'user', 'modified' ),
		),
	),
);

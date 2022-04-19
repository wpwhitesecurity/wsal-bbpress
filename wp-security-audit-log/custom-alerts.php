<?php

$custom_alerts = [
    __( 'bbPress Forums', 'wsal-bbpress' ) => [
        __( 'Forums', 'wsal-bbpress' )                => [
            [
                8000,
                WSAL_INFORMATIONAL,
                __( 'User created new forum', 'wsal-bbpress' ),
                __( 'Created a new forum called %ForumName%.', 'wsal-bbpress' ),
                [],
                [ __( 'View the forum in editor', 'wsal-bbpress' ) => '%EditorLinkForum%' ],
                'bbpress-forum',
                'created',
            ],
            [
                8001,
                WSAL_MEDIUM,
                __( 'User changed status of a forum', 'wsal-bbpress' ),
                __( 'Changed the status of the forum %ForumName% to %NewStatus%.', 'wsal-bbpress' ),
                [
                    __( 'Previous status', 'wsal-bbpress' ) => '%OldStatus%',
                ],
                [
                    __( 'View the forum in editor', 'wsal-bbpress' ) => '%EditorLinkForum%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8002,
                WSAL_MEDIUM,
                __( 'User changed visibility of a forum', 'wsal-bbpress' ),
                __( 'Changed the visibility of the forum %ForumName% to %NewVisibility%.', 'wsal-bbpress' ),
                [
                    __( 'Previous visibility', 'wsal-bbpress' ) => '%OldVisibility%',
                ],
                [
                    __( 'View the forum in editor', 'wsal-bbpress' ) => '%EditorLinkForum%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8003,
                WSAL_LOW,
                __( 'User changed the URL of a forum', 'wsal-bbpress' ),
                __( 'Changed the URL of the forum %ForumName%.', 'wsal-bbpress' ),
                [
                    __( 'Previous URL', 'wsal-bbpress' ) => '%OldUrl%',
                    __( 'New URL', 'wsal-bbpress' )      => '%NewUrl%',
                ],
                [
                    __( 'View the forum in editor', 'wsal-bbpress' ) => '%EditorLinkForum%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8004,
                WSAL_INFORMATIONAL,
                __( 'User changed order of a forum', 'wsal-bbpress' ),
                __( 'Changed the sorting order of the forum %ForumName% to %NewOrder%.', 'wsal-bbpress' ),
                [
                    __( 'Previous sorting order', 'wsal-bbpress' ) => '%OldOrder%',
                ],
                [
                    __( 'View the forum in editor', 'wsal-bbpress' ) => '%EditorLinkForum%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8005,
                WSAL_HIGH,
                __( 'User moved forum to trash', 'wsal-bbpress' ),
                __( 'Moved the forum %ForumName% to trash.', 'wsal-bbpress' ),
                [],
                [],
                'bbpress-forum',
                'deleted',
            ],
            [
                8006,
                WSAL_HIGH,
                __( 'User permanently deleted forum', 'wsal-bbpress' ),
                __( 'Permanently deleted the forum %ForumName%.', 'wsal-bbpress' ),
                [],
                [],
                'bbpress-forum',
                'deleted',
            ],
            [
                8007,
                WSAL_HIGH,
                __( 'User restored forum from trash', 'wsal-bbpress' ),
                __( 'Restored the forum %ForumName% from trash.', 'wsal-bbpress' ),
                [],
                [],
                'bbpress-forum',
                'restored',
            ],
            [
                8008,
                WSAL_LOW,
                __( 'User changed the parent of a forum', 'wsal-bbpress' ),
                __( 'Changed the parent of the forum %ForumName% to %NewParent%.', 'wsal-bbpress' ),
                [
                    __( 'Previous parent', 'wsal-bbpress' ) => '%OldParent%',
                ],
                [
                    __( 'View the forum in editor', 'wsal-bbpress' ) => '%EditorLinkForum%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8011,
                WSAL_LOW,
                __( 'User changed type of a forum', 'wsal-bbpress' ),
                __( 'Changed the type of the forum %ForumName% to %NewType%.', 'wsal-bbpress' ),
                [
                    __( 'Previous type', 'wsal-bbpress' ) => '%OldType%',
                ],
                [
                    __( 'View the forum in editor', 'wsal-bbpress' ) => '%EditorLinkForum%',
                ],
                'bbpress-forum',
                'modified',
            ],
        ],

        __( 'bbPress Forum Topics', 'wsal-bbpress' )  => [
            [
                8014,
                WSAL_INFORMATIONAL,
                __( 'User created new topic', 'wsal-bbpress' ),
                __( 'Created a new topic called %TopicName%.', 'wsal-bbpress' ),
                [],
                [
                    __( 'View the topic in editor', 'wsal-bbpress' ) => '%EditorLinkTopic%',
                ],
                'bbpress-forum',
                'created',
            ],
            [
                8015,
                WSAL_INFORMATIONAL,
                __( 'User changed status of a topic', 'wsal-bbpress' ),
                __( 'Changed the status of the topic %TopicName% to %NewStatus%.', 'wsal-bbpress' ),
                [
                    __( 'Previous status', 'wsal-bbpress' ) => '%OldStatus%',
                ],
                [
                    __( 'View the topic in editor', 'wsal-bbpress' ) => '%EditorLinkTopic%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8016,
                WSAL_INFORMATIONAL,
                __( 'User changed type of a topic', 'wsal-bbpress' ),
                __( 'Changed the type of the topic %TopicName% to %NewType%.', 'wsal-bbpress' ),
                [
                    __( 'Previous type', 'wsal-bbpress' ) => '%OldType%',
                ],
                [
                    __( 'View the topic in editor', 'wsal-bbpress' ) => '%EditorLinkTopic%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8017,
                WSAL_INFORMATIONAL,
                __( 'User changed URL of a topic', 'wsal-bbpress' ),
                __( 'Changed the URL of the topic %TopicName%.', 'wsal-bbpress' ),
                [
                    __( 'Previous URL', 'wsal-bbpress' ) => '%OldUrl%',
                    __( 'New URL', 'wsal-bbpress' )      => '%NewUrl%',
                ],
                [
                    __( 'View the topic in editor', 'wsal-bbpress' ) => '%EditorLinkTopic%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8018,
                WSAL_INFORMATIONAL,
                __( 'User changed the forum of a topic', 'wsal-bbpress' ),
                __( 'Changed the forum of the topic %TopicName% to %NewForum%.', 'wsal-bbpress' ),
                [
                    __( 'Previous forum', 'wsal-bbpress' ) => '%OldForum%',
                ],
                [
                    __( 'View the topic in editor', 'wsal-bbpress' ) => '%EditorLinkTopic%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8019,
                WSAL_MEDIUM,
                __( 'User moved topic to trash', 'wsal-bbpress' ),
                __( 'Moved the %TopicName% to trash.', 'wsal-bbpress' ),
                [],
                [],
                'bbpress-forum',
                'deleted',
            ],
            [
                8020,
                WSAL_MEDIUM,
                __( 'User permanently deleted topic', 'wsal-bbpress' ),
                __( 'Permanently deleted the topic %TopicName%.', 'wsal-bbpress' ),
                [],
                [],
                'bbpress-forum',
                'deleted',
            ],
            [
                8021,
                WSAL_INFORMATIONAL,
                __( 'User restored topic from trash', 'wsal-bbpress' ),
                __( 'Restored the topic %TopicName% from trash.', 'wsal-bbpress' ),
                [],
                [],
                'bbpress-forum',
                'restored',
            ],
            [
                8022,
                WSAL_LOW,
                __( 'User changed visibility of a topic', 'wsal-bbpress' ),
                __( 'Changed the visibility of the topic %TopicName% to %NewVisibility%.', 'wsal-bbpress' ),
                [
                    __( 'Previous visibility', 'wsal-bbpress' ) => '%OldVisibility%',
                ],
                [
                    __( 'View the topic in editor', 'wsal-bbpress' ) => '%EditorLinkTopic%',
                ],
                'bbpress-forum',
                'modified',
            ],
            [
                8024,
                WSAL_LOW,
                __( 'User created a topic tag', 'wsal-bbpress' ),
                __( 'Created the topic tag %TagName%.', 'wsal-bbpress' ),
                [
                    __( 'Slug', 'wsal-bbpress' ) => '%slug%',
                ],
                [
                    __( 'View the tag in editor', 'wsal-bbpress' ) => '%EditorLinkTag%',
                ],
                'bbpress-forum',
                'created',
            ],
            [
                8025,
                WSAL_LOW,
                __( 'User deleted a topic tag', 'wsal-bbpress' ),
                __( 'Deleted the topic tag %TagName%.', 'wsal-bbpress' ),
                [
                    __( 'Slug', 'wsal-bbpress' ) => '%slug%',
                ],
                [],
                'bbpress-forum',
                'deleted',
            ],
            [
                8026,
                WSAL_LOW,
                __( 'User renamed a topic tag', 'wsal-bbpress' ),
                __( 'Renamed the topic tag %OldName% to %NewName%.', 'wsal-bbpress' ),
                [
                    __( 'Slug', 'wsal-bbpress' ) => '%slug%',
                ],
                [
                    __( 'View the tag in editor', 'wsal-bbpress' ) => '%EditorLinkTag%',
                ],
                'bbpress-forum',
                'renamed',
            ],
            [
                8027,
                WSAL_LOW,
                __( 'User changed a topic tag slug', 'wsal-bbpress' ),
                __( 'Changed the slug of the topic tag %TagName% to %NewSlug%.', 'wsal-bbpress' ),
                [
                    __( 'Previous slug', 'wsal-bbpress' ) => '%slug%',
                ],
                [
                    __( 'View the tag in editor', 'wsal-bbpress' ) => '%EditorLinkTag%',
                ],
                'bbpress-forum',
                'renamed',
            ],
        ],

        __( 'bbPress Settings', 'wsal-bbpress' )      => [
            [
                8009,
                WSAL_HIGH,
                __( 'User changed forum\'s role', 'wsal-bbpress' ),
                __( 'Changed the bbPress setting <strong>Automatically give registered users a forum role</strong> to %NewRole%.', 'wsal-bbpress' ),
                [
                    __( 'Previous role', 'wsal-bbpress' ) => '%OldRole%',
                ],
                [],
                'bbpress',
                'modified',
            ],
            [
                8010,
                WSAL_CRITICAL,
                __( 'User changed option of a forum', 'wsal-bbpress' ),
                __( 'Changed the bbPress setting <strong>Anonymous</strong> (allow guest users to post on the forums).', 'wsal-bbpress' ),
                [],
                [],
                'bbpress',
                'enabled',
            ],
            [
                8012,
                WSAL_MEDIUM,
                __( 'User changed time to disallow post editing', 'wsal-bbpress' ),
                __( 'Changed the time of the bbPress setting <strong>Editing</strong> (to allow users to edit their content after posting) to %NewTime%,', 'wsal-bbpress' ),
                [
                    __( 'Previous time', 'wsal-bbpress' ) => '%OldTime%',
                ],
                [],
                'bbpress',
                'modified',
            ],
            [
                8013,
                WSAL_HIGH,
                __( 'User changed the forum setting posting throttle time', 'wsal-bbpress' ),
                __( 'Changed the time of the bbPress setting <strong>Flooding</strong> (throttling users setting) to %NewTime%.', 'wsal-bbpress' ),
                [
                    __( 'Previous time', 'wsal-bbpress' ) => '%OldTime%',
                ],
                [],
                'bbpress',
                'modified',
            ],
        ],

        __( 'bbPress User Profiles', 'wsal-bbpress' ) => [
            [
                8023,
                WSAL_LOW,
                __( 'The forum role of a user was changed by another WordPress user', 'wsal-bbpress' ),
                __( 'Changed the role of user %TargetUsername% to %NewRole%.', 'wsal-bbpress' ),
                [
                    __( 'Previous role', 'wsal-bbpress' ) => '%OldRole%',
                    __( 'First name', 'wsal-bbpress' )    => '%FirstName%',
                ],
                [
                    __( 'User profile page', 'wsal-bbpress' ) => '%EditUserLink%',
                ],
                'user',
                'modified',
            ],
        ],
    ],
];

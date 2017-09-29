<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db219464_1clk_wordpress_3ful2zg8m87hGnHl');

/** MySQL database username */
define('DB_USER', 'wordpress_n1ivv1');

/** MySQL database password */
define('DB_PASSWORD', 'ZCAixzPD');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s219464.gridserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TC57z1TrttsJWf0ReeCtPZLOoSpjS8YMXhRfdv1shMXsHp3iGkTn8qQgelRSxogq');
define('SECURE_AUTH_KEY',  '8GGcb7KbJ7tLqmXHFOdog8XbLwWu1ITbFGmb5QaHOySvoZVT0ZQN0iTpV3fHiRke');
define('LOGGED_IN_KEY',    'xnC0tdT3VGG3LnzBEim2iIT7INhDZruumu2JrBAcvBIkiPzrD4LTQxbLZSmvbn26');
define('NONCE_KEY',        '03LWkUWcMFA2uo1CB4Xn3v3cynwGfsNI4xBWwaa88Q1Do7RTnhgJUrIgYEhmXvBI');
define('AUTH_SALT',        '1qz6eIK1ZkoiSpKX1rEFzsiogvCoUTnG4WGsLXL59xa8LwmeI6mmiNVLv4Pn5mbC');
define('SECURE_AUTH_SALT', '9prZoX7og3P2w6FvFiaR3X8oM8H0ZFkqe8bUr7zG2raElMGU6Ovo8PwzVsxEJAXI');
define('LOGGED_IN_SALT',   'ePPsGXT043bMILaRSS4xN5iVIHrP41YZhmKRiieJpEaezrWUukYPQI0OP8SQqpeC');
define('NONCE_SALT',       'jXtZ4tjabfI1FvoF0WbC2oNCxgttIAxKYueK8eBe7aCr9ou7aU9sDuHjZOdIPEwl');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dxwh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

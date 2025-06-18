<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cmabaroda');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (!defined('WP_CLI')) {
    define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bucNs33AFy5O57y1SbIoMabCcDAbfZ29E25J4uJhzBigof8rS2THnOFAOdV4LThB');
define('SECURE_AUTH_KEY',  'GH8N0yAkWLoWEdwle5Vy6WtiCYhDGGEJ1e09qlylyOBCfDP9461Mf9JBuivyXD5F');
define('LOGGED_IN_KEY',    'z9zsgM86bwfJAa3Q1eBHB8zIRI06vvBzwdmIhlI7te19bvUyp1NOOzITuai38DvM');
define('NONCE_KEY',        'hBXH18BA8lLXTOaA7WYBf40Z7Dk5B9y4yildMJH0ovidCNIf9PH2TOz43snM0iD9');
define('AUTH_SALT',        'T9fYiewbBbFsyN4rfsnf0kM7bw9PRDRyyreFJliHn9GR9fWp4ioZqAnuGhrr7VYH');
define('SECURE_AUTH_SALT', 'HDBFYew4oYUxP6m27q87UQXlgdD5Plaq4wle4A4YnVcVajqjBQZOqwk4OGcQaTD3');
define('LOGGED_IN_SALT',   'f494eKJXuvBUAEgAL98Qckg9mcRdFWuGrelaSor9qhdIbIW5EN03jaN8PtQcHcys');
define('NONCE_SALT',       '0BrdRneb0gBQPBJ1okdD7q3khGGIvK0VoiAN3wWDvyXMMx6025sueOR5x2igNtJM');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

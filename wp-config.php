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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commercebeau' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
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
define( 'AUTH_KEY',         'suXuFo66sT9JvOJ2Lje9XPOC7tVOPgLolIUujNf5Wc3P6pz5d0HujZvsqhvCdSpy' );
define( 'SECURE_AUTH_KEY',  'sqqmYz0tSCajKqXoUHznVCFBRC811IIo6aJDlCZcSG24hAhQnDrXBvyOaratq42y' );
define( 'LOGGED_IN_KEY',    '1K8fIFpUx0IydYU2JnarPbiBgRo6Qjkf4OGxRi2DMbHhD3IWqd7M9WXctz0g37dL' );
define( 'NONCE_KEY',        'lZTcxuECsJL7LcwY2A3CuAIGZy2DWJdl8tokHexCvEUvOXOEQkmlQZ0MCpLKAxmZ' );
define( 'AUTH_SALT',        'ybOjSuEKx4ZNLkTJTOyCNxShyiIlN7udyN8zRzrJndRrz1BqzzSWlrZgdMWQEDji' );
define( 'SECURE_AUTH_SALT', 'tsB3om2IQsfbsvEQ9nN9sAyyYaln507MtgwF7wNCjZNwVDyYRljsOeEUt6m8um03' );
define( 'LOGGED_IN_SALT',   '0xIXYlGh1CNKmU51lFUQgFHAIALfc63kSjM9yTqG9tTKCGsIE9OYOwMnU61MSawE' );
define( 'NONCE_SALT',       '76Uv8aVIEGSFciAMBDZToD0kWeckqPXp1KSfxJMPZaF83BfxSz0L2573zZdyrtnV' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

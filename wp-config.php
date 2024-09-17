<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressUnivresity' );

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
define( 'AUTH_KEY',         'v3EpRNYs9elhqIvY0eFWrCNlSldjXnQim0l7K47EzHwioItjBnrVpK66vkZGXLVO' );
define( 'SECURE_AUTH_KEY',  'IeAwdMXAdxyYqRTJ2rbWKzXVr6T2NK8aNs5kUp1LrftfaLg6lCYwUcUA8HaM2QS8' );
define( 'LOGGED_IN_KEY',    'CpvKdfn67WGeP2HUqY1M3HYqaeA14O2jhRrpRe1Vd05LQs9XC2UD3MwyFkWuVjYE' );
define( 'NONCE_KEY',        'pg5GC8qKLJe8ajzB2TC9KkDueP9Ev5fz9kZqejdBYDAZR6vla3fRvUm7eee27RxG' );
define( 'AUTH_SALT',        'wq3l1tUvY5HXcMMw8RMcVGb8YMv7ula47EAByMnuLGiW3mDV5y5P6F6bgsIt9FXZ' );
define( 'SECURE_AUTH_SALT', 'I53cBLUUlnmAxUHjz4AmxGujc0dhPe5JjqNk457JyOABtVoSNBQdqwSl2Z5hdCxb' );
define( 'LOGGED_IN_SALT',   'ca8HMRvcbAyzO2IJ6UnRsx7dWKWFfXZWfyPG8Nz5n0yoEn3TYirTWCSGYpZdu6B2' );
define( 'NONCE_SALT',       'fdks9Chg1COhX4VnH78228jwGOIuPjVbBrxljswzfVTtkBs51iJ7TggomB5m7zCb' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

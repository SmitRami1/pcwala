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
define( 'DB_NAME', 'pcwala' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'bhau1805' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'AgHBhv_|)C8_yHl/9zj=[:y/).9:h/!|V?^70FqK4):CV[J>(KhBy3RGiH0E Hrq' );
define( 'SECURE_AUTH_KEY',  '4);oA?@|JLMr-iIQqFn!#fZ]Y0`r+julE0W>b]A++w8SWtFvsf7$!YU:M6X@P&j:' );
define( 'LOGGED_IN_KEY',    'n^?k<IazfXK}+B3BhBzhxA_(C]]2{8a3Q#1|ut#gXEiKZS>7I6@t%^@@KXj~I!?$' );
define( 'NONCE_KEY',        ')9Gn&mrz4}Dc@~OG.lV9qnR@oH@!,vWGz1 {ftXyA:2fZT.OcBaJkM6R}f7Yezwe' );
define( 'AUTH_SALT',        'WM<[|OlIXVtScE*[RT$3=u81du<%H`[p(zpcw7{drn_.N`5QZa:NnOj.LKY}p>WQ' );
define( 'SECURE_AUTH_SALT', 'XTPO GyVlD9a|dV&vZ=LNB7+(:z)6VjUSOM9TMrJKjD14{-/^)Pm=IRb7jvMA`s:' );
define( 'LOGGED_IN_SALT',   'CM6~rCgBzB~OaDnAFVIig>epi9QAq^(i0Xzd3RZd1&naj<}r*r!qIaM<C@~vioXC' );
define( 'NONCE_SALT',       '=BMzJ)WZ9td.&,f#g-pu+khZGS/U0rnPkUf{3J4Wcnt5;H+1MlYk.0m0Pro915(K' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

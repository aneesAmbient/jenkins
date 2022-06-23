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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '1ZkJ>Y;y-n.m%&sZ)d2F%Pptf:3uUFwd,j8L[Je_6,D_t1`+Tu.{;.oR3k`gjZ/t' );
define( 'SECURE_AUTH_KEY',  'M`,+fxRt.p!]@/W-;Pi=;gl,I9(_&)!$ad]}z~MZvg=:_:JlyronTdghp!iy$-28' );
define( 'LOGGED_IN_KEY',    '}|Uw?ygCCW<Pr]gLHk~^h2?eByxP_>)h_$#JW. d%dml?7ymdw`&IVdNnw&!8fjj' );
define( 'NONCE_KEY',        'a(]@afpY=*ZJ+7!r+uU6,)_L|#/THp`(%pi>y;t)vNbq iT4:.Gp ~GL{h8ESQhA' );
define( 'AUTH_SALT',        '6p}tty)!:+-pQ{?Fbp/@ez/=2J;t:$WSMoqvk`]]{82qr3A/V6hU]Og}]h_s-v1-' );
define( 'SECURE_AUTH_SALT', '10_V8ps=j/kRYl!zL{X?$ &SDhm[r&dQC_RAV_,zr1zRb@#pQgJRsMtID!|cDGZ+' );
define( 'LOGGED_IN_SALT',   '5&k:_fkA|TdX?Pf iC&z405#8y8?O|OgLY;M/,3{6 P6tJEGh<vMB$FFKOe1Qt,B' );
define( 'NONCE_SALT',       '*AMT;[EE}: [tD-^]4V:_9_l|bcGiKl=Pc@[n>B<yDJ,YW*XD+H-2+~1$2gk4QH#' );

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

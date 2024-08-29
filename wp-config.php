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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/AvEga(zmC@L&^FVmk(SvXt;TPXFwdf4 FSY%r$.WUfvT%V;g20f?N:B2:+mjrJ;' );
define( 'SECURE_AUTH_KEY',  'E7Dv{R+dd1Xv73v<k4G:}n>M^v=W^n%z~,LmB@Y&2#k@{JD{L?G:AR&0PX7z^V>K' );
define( 'LOGGED_IN_KEY',    'WmAU;4),WqCG(^/2:3^&LF}WKe1PRKDJX8V.1P)Z~*h.eZyJTunMS53MgZzqU@wu' );
define( 'NONCE_KEY',        '@`bBO@LJ#1`M6X8X#2Y+:f|zX|[i~sw0ji%${s8{O_SFi1BwUT]3u+&q65|An){R' );
define( 'AUTH_SALT',        ')&~FSp2EfR:y_&jB7?U5-$1OKyYR8ErdF;({4~ygYY~[}QGK8 Np=!dBuMll=PU>' );
define( 'SECURE_AUTH_SALT', 'E0(51ouw<&BigeArqP[AGBL0pyahuFiG70C>) xaMYte^-cLPcA~Rn;E+V9UU)uv' );
define( 'LOGGED_IN_SALT',   'G_W-`5wVRuCQSaMKRmue7)A^^}p^!~K5T}ifB^SOYUxVs~O!;2N?`e+z.ugz5fH$' );
define( 'NONCE_SALT',       '1J]ZP_B oUawA5EV7b%*0^sv7!05b<x1T$x#|V:K=2zZ{KdB>bm<Hw]z-J`>qa<V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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

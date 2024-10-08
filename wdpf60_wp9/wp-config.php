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
define( 'DB_NAME', 'wdpf60_wp9' );

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
define( 'AUTH_KEY',         '6EQ^%RL})spNE2OHft){o<PTrXz|FL6ebH}L(RCB- j0m+)OIk;gh?|^b#g|sKA@' );
define( 'SECURE_AUTH_KEY',  '[4b{84hTB_}f}9K,S<rAuWyVGDD`ar@s/11pgltd #g41aZ`woPvpem<e]f_JaJ%' );
define( 'LOGGED_IN_KEY',    'Qj[KM*8J6?PS4c65FT%q@#?Ncr)awsfp`7#>84%=2e!VZ3oqzn)N:$*!^8CtBfZA' );
define( 'NONCE_KEY',        'KfW:5RdD6(Ih-fu%W!`&i#BpK}k&h?8l|(^lO2tKng7Z[`Id$QtenrB{HfvdC19S' );
define( 'AUTH_SALT',        'hvf((Urius5U0M!1 <~t!FZC})1.TH24g%g,4Oc:.U(v [%EA`Ipb(N:^d24{ayU' );
define( 'SECURE_AUTH_SALT', 'h@}IRw@7}ey#>ky~R:c|KVH.KJ0t/#~]rNtDo42/zeRUuCQ!R4<908- JiBka$p7' );
define( 'LOGGED_IN_SALT',   'I*k*I-q;$5gPStV[JnBSW,lurC}>-sYnc]BLT$jT*hyqUpd5JCUOJ.SD([a+k^5&' );
define( 'NONCE_SALT',       '1U5l>E/j[8fEB/DO`+(I/s(CLk;fF>*2a,.ELr4.RSx%lU9ce:tLC=.PBNjkJNIK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'idb_';

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

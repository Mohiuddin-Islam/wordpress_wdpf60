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
define( 'DB_NAME', 'wdpf60_wp6' );

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
define( 'AUTH_KEY',         '!Uzcq}{2=e2#( [Oo`P=DRo0eKN[{EjHnlZRw}-{6(-77[fD.[6<V+EbNfnLRp?t' );
define( 'SECURE_AUTH_KEY',  'eBdul.Z?`NdW~oZbps8:vjEHT{/zeoBTJAzdyN_s*vc_ZxJYWnfR0`g8l$].4:z[' );
define( 'LOGGED_IN_KEY',    ' >Uf/LP4^N)#tcS!FQPa.xT5/!d,(mB%6GIewCPGLJd`+IO#B/L9h_:5M}h_5[{ ' );
define( 'NONCE_KEY',        'h{?4+oPBDzx*<ZQ$^=vqY=KctQYAG%n=~>D5%W)D3$CEoHe;Vh0d<j)+V*)VBpL_' );
define( 'AUTH_SALT',        '%=L2DnDTVyc{M{oEnD2?b(}#;rQPdl(&HB~5jS:+t<d+tR>a=JbIwp2kd&pw/K5{' );
define( 'SECURE_AUTH_SALT', 'T OG/fnewzOY$ewe@8)eme$!e SSgi;:53=J*W~8M#BWTI8*l{:w:[ E|T[:<Eo/' );
define( 'LOGGED_IN_SALT',   'wUTUOvxDD<0~lNUuMIwkoX8rD9fb}^wwiFBP_.z~=B9hZ|;}U)cG9TA!&wJd7%M-' );
define( 'NONCE_SALT',       '}7BTnz:xSU2^^YUV6)C rz~9cVLoh= {L)ZZ{@Nq-Gz6:W6r( (wBUWpF?rz>E}r' );

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

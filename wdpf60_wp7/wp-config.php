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
define( 'DB_NAME', 'wdpf60_wp7' );

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
define( 'AUTH_KEY',         'O/:lq1Wqh~l_L}GQw2M9{7j=LhP+gv}2#nLv3l$xiyQX({$w<lQJwcr.rb,+ArKi' );
define( 'SECURE_AUTH_KEY',  'OaVo7A>7:)1-`H]@Y/w5g/d(h=Jo06|$aLss!MdO>?XKJ8[|QcI,yj>al9upapj:' );
define( 'LOGGED_IN_KEY',    'fLu_LjY+&fW|{0>2,m[e>ivo  (iN2N<U V[~e)4Fu]&brF>fW-Hyzr254|%e`;V' );
define( 'NONCE_KEY',        '3&0L8>ZC4?FEIUf.Hc9COnDHf!XM+5=k}fJtMsYS7PQ00z.+7{0*f=UIH-ZjQ2Qm' );
define( 'AUTH_SALT',        '.B^hpPa_W9gvfvrvFc4%0cJ?DnFNET#wpu}YQ{+=F2#{ `ski:hPCfC7WT:2su`6' );
define( 'SECURE_AUTH_SALT', '1RT}n_S9,cn=<;mdZ8A]d]rh7}1N^:UBx.!gZi/l/ijpzCI6}.@ulBOZ@QE5d/)I' );
define( 'LOGGED_IN_SALT',   'P0>va[!^K~za &3M4EFbm&ZV{Cjrk*mi~J=u^}lrI.<D%)nbFx>|=C)LhKC)d9~t' );
define( 'NONCE_SALT',       'lE8xeN%&BJxw$7p96T1lzD!E#gvOe7:j+Nq5${z#_pdhhP04(J~C-9BT`}-;!C6]' );

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

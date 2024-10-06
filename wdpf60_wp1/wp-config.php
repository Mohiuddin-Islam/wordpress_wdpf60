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
define( 'DB_NAME', 'wdpf60_wp1' );

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
define( 'AUTH_KEY',         'Z+9.}Bzj<L+mL%(8pQN8#^Sk@c&4*OeopScODF&wG_},=AUaf_dXa&AvgO>s{f&$' );
define( 'SECURE_AUTH_KEY',  'Alvw#x^]7Ul2-*zS9xG4YQXw(T&x,UrJ%c0&u]=IMk6{%k{cqjt7}E]/D}|v}{.2' );
define( 'LOGGED_IN_KEY',    'w=(i^3H<r{enXS{>^SaLST/AXu9>!4q[S$~5)BJ9Iv_emgdkuM0{&)tX gi5Gf(2' );
define( 'NONCE_KEY',        '%8:KZ5G%sXc,G.~&r&JoBE-km{|;Yu^q9#h(i194x*i0Q?^hK?C(;`JKmqVYP(yi' );
define( 'AUTH_SALT',        'ZSl:}~E8f_Is$_}a4;pW&FcjD=>_~,;<<B}.6DP5f2e8a!wiCoz45JJ0TUyN_l#.' );
define( 'SECURE_AUTH_SALT', 'N,<h@*|>8_%LM2^ 19C2P~?IMfM720_%s0J{mJr4t%X</isH$N|EgvSOD&&mE?eD' );
define( 'LOGGED_IN_SALT',   'VB&iF/k)R6gQpGU.Qy<mXp`>{}uW72A{YC|l<T1nTMV.H,&XURnJOinY8=8f+X*`' );
define( 'NONCE_SALT',       '1Gx|amKa+]k5:#*O0B{/wru+s(w{@fRA:Ag0/J8wRl0=&vyC?iTE$_fxVsW_6$&B' );

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

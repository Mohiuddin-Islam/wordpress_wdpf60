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
define( 'DB_NAME', 'wdpf60-wp4' );

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
define( 'AUTH_KEY',         'nr;HC+SnTN [;u7Hh5-ql=<65P(^EAe,OThun8ze_.X2{`}w!OQN[!9T.ssxyRAk' );
define( 'SECURE_AUTH_KEY',  'k/YY{PawrOx;IY8jA!ZA:J/7f(m&WV}.A6q}0eh=`(x#M$<gOZO}O~p0*Q1}6S;m' );
define( 'LOGGED_IN_KEY',    'Zbl{9!iR#9v$P R@8Tb/j8GTGA<4+9#Q#=>WjFPBLOc5aUY_Z+RzNsw:qgM&_<1B' );
define( 'NONCE_KEY',        's6Y[QG{K1^;x$cVgnb<Xp<>c)wV<C~.5j^NWGWhYP3ln BtCn&UdBjD@[.m1>nt%' );
define( 'AUTH_SALT',        'a$,*honF@:70ansJf+!]w~f@4Iz!DagyJz+|L&$wgnq)|z44<}D_R~.$9<5c_8R0' );
define( 'SECURE_AUTH_SALT', 'UBQL{`UphG<8bJwXY0H<:T<N;ekYWne+5`UQW 5`|d,-fFa.AC<!~}Nr/H%J:t5T' );
define( 'LOGGED_IN_SALT',   ']rDJ[ZJX4G!cU,5GVgv w8r~ &$W.sQ?Zb4`^2}zNY*FyYFw%bT!({j!yG(Y[F.)' );
define( 'NONCE_SALT',       'hH>a6F.LV8XbR~m[IT;=](#X`1{Bx]4|c9(ipVg:Tc_8et/D4td+gOm&HLmlA[Og' );

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

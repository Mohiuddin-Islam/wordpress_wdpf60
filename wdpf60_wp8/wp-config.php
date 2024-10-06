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
define( 'DB_NAME', 'wdpf60_wp8' );

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
define( 'AUTH_KEY',         '$Aw G2q3q=,EOT7H:_p9GH(G,t(} %ZowV$S?(CNZ#+WGexUOuX3ix(JoSQ0Ys4z' );
define( 'SECURE_AUTH_KEY',  '!+&Wg7~}|v$m@^@$f24EL>3L+zz)8+ _([5vDr~DV^Mslx8^{:f_+I=SI04r[,ND' );
define( 'LOGGED_IN_KEY',    '2m3qHNd,KiD^=3uT%Ud<]BU@pCK)u/$cX-Zoi[/9&w;W{p`-fefSfRBa,m@@D;c:' );
define( 'NONCE_KEY',        '<uU^nU`Ff:2|2[4G*$R,+ww:7a~fOCMbD&ic)byZaq?ewww)<h8dl!*FC{^Ftp]A' );
define( 'AUTH_SALT',        'Pr1:=Rm[<x5]dkmaxM?65MF[IsC_.hF@Q|N4e>)=I:Sma#%&.xB|6BTX@z_pi_yo' );
define( 'SECURE_AUTH_SALT', 'a1n)Zf720X3nVzaYYLFjN~}x#fvWCB{ZwD9ZvA?0i)<kMO2(2F@S>NO@ka$iyj$8' );
define( 'LOGGED_IN_SALT',   '8:4*KZP.<C2$6rW]qAZ<[YG-DGnD@cYSv4JP,-j_0_9AP07)FW*(0eN7`!FS0DN$' );
define( 'NONCE_SALT',       'r Ql^;|wm=qZoPIQeZ`@U*tH&..k)c+kSuZ8~tl^ORic-pgj/:Q-wm)H8@hY*uMb' );

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

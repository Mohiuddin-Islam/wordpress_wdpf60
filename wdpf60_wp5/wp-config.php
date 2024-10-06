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
define( 'DB_NAME', 'wdpf60_wp5' );

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
define( 'AUTH_KEY',         '72X7|YkV$w.R;E|mB@ebMe~-2c91~s.%W{`|hfCfztOwn _]SMyyn#[B^`zryCa`' );
define( 'SECURE_AUTH_KEY',  '.U1[|];q_CDEu^kph199x{K)y)RPeX dfI>ku?^1v+eKvy+UL{t.?r(2BjK/}C%I' );
define( 'LOGGED_IN_KEY',    'Vhz%n$Hre*{>&|Em.)=VPpW7{Qh9BZK.qp<veVs_loOEVr]4~=uhjuN+M^P<y^<u' );
define( 'NONCE_KEY',        'Mm<%n.<)Zo4=vi)<3Q)$$mf(F:aNN-~:f.*En&D)(}nf}?E72iO-pMqmi0@I5SH^' );
define( 'AUTH_SALT',        '{*3azisB|kT`D}P+( AU#s>I2Z]7OPKJE4`ncyzac8E$<|<?yv6s8qtuJ?yb*:]s' );
define( 'SECURE_AUTH_SALT', '_SBZ{.ij(x.Sx:-7yUFFC#dGVp|j_1F`~23 Y8t+MccxzbqtYb$?z&|yW,S/|D63' );
define( 'LOGGED_IN_SALT',   'OcYn<pl/NH3w_):4Q_G-46NcM[+v.hHO/*akC9$6tYAFAk8c6+.9ForLn|]CjoJ_' );
define( 'NONCE_SALT',       'dLv;~LV5&qkMJl:?C-l<MJbu7rTDWp[<bvxaz#.XU(PwgtG=S(lyO[TiqyI>-NLg' );

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wdpf60_wp5/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

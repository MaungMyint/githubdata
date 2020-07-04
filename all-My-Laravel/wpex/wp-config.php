<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N$<(3lf-Ew^.|}%%&{0d.ya}+LINe/#ci]}r(}DRd%M9og,*&M6z5py5R7(k<[/q' );
define( 'SECURE_AUTH_KEY',  'J_5HLZ-J&wjD&7>KM.}V9uBM!K=[~<+D +/}/)ok!~tUA:6tmL3[YDW?{XLo.+v$' );
define( 'LOGGED_IN_KEY',    'F*QEU@${o+-_xq7Yg#33*^x@ryF`V56 tI%RfWc11@shd$ZRoHH!jwbO(&Xnd?*a' );
define( 'NONCE_KEY',        'N>Uos!)csnZvxZ*&jHB^cGZ>3MO6wT$cQil/P{CSQQm@c26o?(-jBLzk:)i}_q2U' );
define( 'AUTH_SALT',        'SDZux!r(rX}`_Vc90ssvN:FDd7~1&2b3pP9i>tx1.5;L5ITC,w2dQc{qZU(`HS:-' );
define( 'SECURE_AUTH_SALT', 'p5j;Awa|}0)h_=.|9*Sdw`sh#X}3|}7(M5&=;s+1Z30X<Er3!PPzM_ _Aiju.g^&' );
define( 'LOGGED_IN_SALT',   '~HQ/8QI/J9e!Yt=B#P_L%^_lw?+kr:rqBj 6]0bN1[PtAzlar;o0!+.4U(h/fTMM' );
define( 'NONCE_SALT',       'I>kr71o)(7-jJzI+gJwe+mOL|o/yl(fRvj +U2eP]^SV.biZ&GlMZGCp}RY!hb;S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

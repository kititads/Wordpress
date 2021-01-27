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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DatabaseWordPress' );

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
define( 'AUTH_KEY',         '^m!lkQ&YpIt&NkNzL!NIx#EJQc_bpxsqo~FH3xyZA>r5+)H]qTHHGQOK8d`zP1cq' );
define( 'SECURE_AUTH_KEY',  ']~fHJFZKLIW.pDymaWumN?0dn_Y?x);rTQ31)ega]T C=qedd`xj:BF6Ea[~<bu3' );
define( 'LOGGED_IN_KEY',    'NqY7}y+>g6QYUC58(P8Uussw#n!a7h@2ruqtI7[1w=1@(lXGQ^eFfS@;$HTLZx>F' );
define( 'NONCE_KEY',        '/UeZrQ! UEr~s(?ED_pekbQcb`*S_WD6|xniBFhcU<R|u#>m{!&0r_2p3pzx2X-&' );
define( 'AUTH_SALT',        '=+r^_{(D>+rs[eXUo8qSl$RSD-><{7/|~1! uM;W,[r($Qw}OJppP=E#T+H+;AK#' );
define( 'SECURE_AUTH_SALT', 'uL_[5YP#_(o8O3*2D4yT6Ix gCOn|7dfRdEl!hl.f8A(0%yZ.gWzqx>7FSpmFDj1' );
define( 'LOGGED_IN_SALT',   'rR?.tRP<8w?~d3n(?ATj`6ia4hDsi[L<hvn;oc@YT@2K7LhqoQCO$R)iwBX_3IMP' );
define( 'NONCE_SALT',       'UU>nE4AoNIA<aA>)|O#4LBx!.~?,TwFZU4w@da3_V)lsd%`1^lv<J^x|g[$_^p1<' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

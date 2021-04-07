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
define( 'DB_NAME', 'childtheme_db' );

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

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yBEJ]6cH@_#9I>=rnSpXT{q>lAn*oRj8GQSL9ms#y8,cqGzU0^IL_21lE@i#Qv@p' );
define( 'SECURE_AUTH_KEY',  '-7#T(%9Li-@Etr]VcwK@dVN{~!mAv(YX9F+J;>N0_Jzqk,2Z*y8Ma=WN-Cr+-sdK' );
define( 'LOGGED_IN_KEY',    'M{. >L]PGRPO.; ?]F^}sMtSbNdXs uuT}TYIxyJr=If+YVN-YT=x(7aD~}@fpx,' );
define( 'NONCE_KEY',        '1vw}]&gr-e6y9jb8#97E3~ 0.H]Le}w 8j_[My-^2S9*q5bj5O;LnOd/[IDYJ[.#' );
define( 'AUTH_SALT',        'L2nnp/u^.vF&98`2qU#=E/agb>Z5)nj1t1^G@w<-brA]WM/`6y4zHJ/!$7IpU(53' );
define( 'SECURE_AUTH_SALT', 'RKXbiKr(f1$8l~<F.^mNps0r~}Z_H}qfI47M$Fg{hv4r^u,=$o*{7uhWnEN>x%=f' );
define( 'LOGGED_IN_SALT',   '?eRZ~[y*ve9d0Kdqu?XQ$lE_7cEs 5fq#&J(ouy]caWNt?xBq0y|AXOM_:em[t0)' );
define( 'NONCE_SALT',       '2j`^}L7OJGDN=ISHa!9/m8hP#a,V<nltuIMm<fekdV.2z$:A1PXd;Vh}oN~^^8{-' );

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

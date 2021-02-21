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
define( 'DB_NAME', 'ten-yards' );

/** MySQL database username */
define( 'DB_USER', 'zeryard1_corp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adadadad' );

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
define( 'AUTH_KEY',         'H%93Cn#ssQ+==IT4vUrzEwfVN5c4,Ka!<NVv%]6pW2,odznR`v(p~WD<scl|5{%h' );
define( 'SECURE_AUTH_KEY',  'S:9+?_Gw-[.1+]`a((O^Aey7Yf2v<~jWMtt=77ed{)rBL=w?.#a?>m/q7sN!?DgY' );
define( 'LOGGED_IN_KEY',    '_mTp/DJr]N.V/$!?n3X>x^CqIX_C$u$o9AvB?omaB,z~Zpz``0w4$onj(do.!_M}' );
define( 'NONCE_KEY',        'Cm5x57`OKuw8~43aMRYc,Tt2~FM>0>tSk9SY/_(lWI1=[f&]SGU26]iSB^`G3e&[' );
define( 'AUTH_SALT',        'elvh+Is=oqu^4f(DRGWYb8}#JAL[%0y:*NpgGBZ<{(OEQT,.W^3.BaK;0u:T?YiJ' );
define( 'SECURE_AUTH_SALT', 'HKHsv?I|t0;a$VU?jT&63%{)#u-LQe$yzVcEOa}7VMQQZyC#3fzD`A9MP>|xWdpZ' );
define( 'LOGGED_IN_SALT',   '|b$hft3|qZ[`t}h<A]z8Vb`k`JyZj9+`*{Y5Va0 `xtSh9sJqX0f![^xHOB+Q@fO' );
define( 'NONCE_SALT',       'wlkaVT?de><S3-[Vtv3!%I_lizuHn!edf{Z{fq=-tVOC_vLlz)WtUXuU|,6omF0>' );

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

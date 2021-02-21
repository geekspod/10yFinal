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

define('DB_NAME', 'zeryard1_WPKJI');

/** MySQL database username */
define('DB_USER', 'zeryard1_corp');

/** MySQL database password */
define('DB_PASSWORD', 'corporate@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '6f3770377d3507f029434d60f0d09ae1d5089d0e45f9e92bbae7622ab6f1cd8f');
define('SECURE_AUTH_KEY', '734de1f804ba5a2b709bb494c193e68d65b388c63d553dd180074c95228f53d5');
define('LOGGED_IN_KEY', '93c6b3e6be55a10dde617d784906177d753d32ab88495950be3ebdff66aa8200');
define('NONCE_KEY', 'f8d76f4c71622b5b8a0ece17160c0173034237a8368cf13258d579c65f779173');
define('AUTH_SALT', 'ac8eff11328e18ec02d44a666b07f5f769d780df0e0b3f3183b94b1e99cefe7f');
define('SECURE_AUTH_SALT', 'e02da2743134235788eac12fa5abad0c3986a20e99f6c7cf84fca29b249a58c9');
define('LOGGED_IN_SALT', 'f524e94928bded69652b8141a48f02066328bb8e0a611d2bcce7fd882f2d98ef');
define('NONCE_SALT', '0253648a3dc31f8897fb71158f9389fc7227f751dcd77e5730375cd02d530922');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'CCB_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

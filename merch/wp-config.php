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
define( 'DB_NAME', 'Merch' );

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
define( 'AUTH_KEY',         'm[bQSd?hC5|3?P1=_XgIphi?HNoG(i`5%5V8xP_BIf,a,=yB/xIhb|)e6t:6`^LW' );
define( 'SECURE_AUTH_KEY',  'u-0?/MQ9H-#?1Nu1OA`W<g3h;+T=415D, GsB!/)(i]A^R9#Y=8}H)kk3dW>.[M!' );
define( 'LOGGED_IN_KEY',    '421yu,Ho.^EZ<f}zXb.`mAW(867!9Svw]+VJx6C;:)_#CP#aT..56N0!kZVtHjUU' );
define( 'NONCE_KEY',        '&qoq.P<AMnK3`Q6zM3G h.yM~?RaLs)$o#l,2+q#BVf<`y|?-@|kC++((?.0:BJq' );
define( 'AUTH_SALT',        'F8|$um|nMWbs-mwA<+`I+sNq_9^]Kabgh12g6VOmYlsl7T:Il!g3*1V%`+w>DZ 8' );
define( 'SECURE_AUTH_SALT', 'yCGAAk)b]BkZZCgRZTi:)NfYrkM7VHCF(X1-+;q@u?;x?zjyRD_uK2i?KF-lJ?0F' );
define( 'LOGGED_IN_SALT',   'aS$0|r4E112pV#9Cuj2aq?hr~b.5#!8uKtKDE.-YA^iyG5&u-^&3ydJ1,?VZ{2G]' );
define( 'NONCE_SALT',       'v{<v*)k>-6=!IY!%jZrP)_04@?sZSy{fZ[B]MQ|jO%*kZ#/?_8j[lA|&]@S:s01`' );

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

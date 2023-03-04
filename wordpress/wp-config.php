<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'C3 O sakZ,yxr*IQJ}Gne]}Q9uz[BUzc:j#SEA`Rbm_zf[Tzz=:-F3`$F@22I3Sa' );
define( 'SECURE_AUTH_KEY',  '<zO@%Iq5K<j+tb$^!|wPx v#0Yo2R4]g>8alzW-urBJptd2f<3ZGq1wSz/r-Vu]u' );
define( 'LOGGED_IN_KEY',    '~fLMrl9=KX|01 bp_,(TJ]nswdb#JaN/90[ec#:-=WEF8TARHpf@6Je{NX*5g+.G' );
define( 'NONCE_KEY',        'nm^PneZT8G>EL>0ADt9#[zpE0%XB_m^bk$q[[WrZes5qyp?ZL:hHX4t0Zu&JG:4g' );
define( 'AUTH_SALT',        '*ga_>&B~ygX|rR`-?}!(*]G/{+Witir$Y|y^1ny&p(nSg$>T!ss^dpiII|3JvKp1' );
define( 'SECURE_AUTH_SALT', 'u`:@wCcQufKW|QOqg<h5Y%yxDf&Ha={#w/.7uh=71{V`&>Ynng*+1FTERt7{ma0}' );
define( 'LOGGED_IN_SALT',   'jq%aP9Et9CI)7|yj=&,T 270,Xpiq:$YXyjUXw,=6r]Jfo`W~8y Y7#3(qZz?>2e' );
define( 'NONCE_SALT',       '.SntUnCP5:]Oa)eEiZ&-S7iJc63M?AG3+T^q|uuHky{Ce0TW&)U#NXy$Xq=B%:_u' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0777);
define('FS_CHMOD_FILE', 0777);
?>
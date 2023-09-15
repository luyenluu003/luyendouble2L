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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luyendouble2L' );

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
define( 'AUTH_KEY',         '9Y*-`{()GHWSqm|I{BEl^nNn#%_-[)OX!wi2xXMb%_LNVymev/H1UF};rY]S#y#N' );
define( 'SECURE_AUTH_KEY',  'cJ@&_p10=LUlYTEh27sXP$u7hIF<CyD-#w{KlE3bJQ|_D{MHH$@RjT h>)3%jSJ2' );
define( 'LOGGED_IN_KEY',    'ym$*7(qrK,(.&7byvWMgUcUK(N_&>QgW`gQ%]Z}TG+IL@Ts>i0Z2Zcc}sxez67WT' );
define( 'NONCE_KEY',        '58,ry*Q_{AAkq<55^K*Q3uH1xLgMUL{;@.ir6%9siW9Fl4wVUt9u/<(?.fgGV8W+' );
define( 'AUTH_SALT',        'Q~)B-F|*c5 5bNu f]che[TuxAvcZ3}gw;h}[F~r#Hf>/@mqXjHvYK!)ghVInOOk' );
define( 'SECURE_AUTH_SALT', 'Q4UcAgRv`kbX@=_}#!mA`fg;9k@u3lq6^u4P 81r?i3,>^7~0kaX22v{y+@]Jwvz' );
define( 'LOGGED_IN_SALT',   ']+eF?6c]Eg/1*sPIPjeU<NjBI@tL yp|]e%t~}Jx z5bFf-H`)p3@lcdDp1nH!6M' );
define( 'NONCE_SALT',       'S>1RkbMltFyvudGW8nPy2l6oKfUv26,}zvGSQ`p*i#4;jD;Li[}&k+<ySXF%YH88' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

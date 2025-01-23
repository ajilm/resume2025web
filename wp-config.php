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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'RlP|&cILA%u!a^Spm/,;H6AJDp4-xH.8./1px*(:U+sDl/T#iu1ZCUwh9|[6PYG ' );
define( 'SECURE_AUTH_KEY',   ';e^6=gUnY?i)sVH2qt+xnnuM/0*d?XlvbvFW(<$^_-0+l m,fsWk4;0&}=Lg<4|K' );
define( 'LOGGED_IN_KEY',     '>bzAui;efy2sRaL D?Y/U}jvXszY:]`&#{;3#pQp-c9Gv`v/xi?Y[lKK,lPf^dAS' );
define( 'NONCE_KEY',         ';6[^U#yI@h8*Ai|Ytl%(78;0!9nvFRyTWc(L<GDeQ:%W%gXw_sat~k!2c15l]`(?' );
define( 'AUTH_SALT',         'nlBCj8;lqpmzC&yr900p[2(b)|n,*UMy,&2DV)di?{``4K0lGe}+%B*QAjIdY!;H' );
define( 'SECURE_AUTH_SALT',  '~td5YiR2=I$e=(-g<>KdI*A;rtzYgI2jejmny_F?-piiGU1tMFCmB7J4,L~]xw#M' );
define( 'LOGGED_IN_SALT',    '/L#$$[KW=nF}:Uv{Fp@sIslt4H0|#eQqv)SEh^b)A0x_B8PNnaGSbejHZo@|et5N' );
define( 'NONCE_SALT',        'nnx&voQ~BhAZhLA1pM,!E`k5Lz`035ac}U=I3Z5Yv0{A+]=bI+ejf$?TnH2H }pA' );
define( 'WP_CACHE_KEY_SALT', 'y|@MR63WP#OrQaZ<Vz@pPGo*Nm{+s*MYpp_t<qZL~6^yRD3K~[3f%d0+0x6JE~K?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
// if ( ! defined( 'WP_DEBUG' ) ) {
// 	define( 'WP_DEBUG', false );
// }

define( 'WP_MAX_MEMORY_LIMIT' , '512M' );

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

define( 'TRIPADVISOR_API_HOST', 'tripadvisor-scraper.p.rapidapi.com' );
define( 'TRIPADVISOR_API_KEY', '429b9071aemsh0a68ef642842b42p1bf35ajsncb3b235d8f82' );


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

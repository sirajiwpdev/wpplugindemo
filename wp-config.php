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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'schedulepress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'z@%xtI^!x+v7PTj8 :=~ju,<{1``/HP>s/Uny6$i(.T(N6> a(KMnmJQ`kC(*cj9' );
define( 'SECURE_AUTH_KEY',  'CTi}Ix_@9z1;-K2GWt@K)lmv}0OR3J`i/NR$N^)2f[[FjHn_u=gHRO9]GM6tgZdr' );
define( 'LOGGED_IN_KEY',    '~9C o =FHObu=.A}B$([^*/G>>u.}S/I5?Jn|X6^Fj(|i@r7IoziL[X_H/=-J*)/' );
define( 'NONCE_KEY',        'uiy|b&m%TJ9a}duls^|nlG/!t*-lgz^1@qzoe9his5FT_x)=96m-|X^*g?Fn^evc' );
define( 'AUTH_SALT',        'OZ@3vKNV!364s:W~y99N<`XXz{:AA (w $VRG9UP-X^n4A12(slZZ]qq?%R]02D]' );
define( 'SECURE_AUTH_SALT', 'L.LYzpm~3wp|Djh}6|Xigq]E8|%^M,+3ZLmye|Dpy[*/hk<H*O(CU[[[woz>0:q.' );
define( 'LOGGED_IN_SALT',   '>%Y~|?A015ZT$&v*giKDYiZ6F^aXBN?PAniHW5~>tfp<Euh#N1}L[p}:Ew/O^EI{' );
define( 'NONCE_SALT',       'ZhMTXqP1AZz?Xxp}Nrx5xA-vh2j!4;gBBV2/ub(win[S^@QsnoSiP}mG>vrSBk#o' );

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

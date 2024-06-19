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
define( 'DB_NAME', 'webtest' );

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
define( 'AUTH_KEY',         '--E3T[;Zq}DCm A%)+}> #QSsiP_lU[fg5f(= Enm<%E.VNhQ/(UfQ]4=Xpt~.0+' );
define( 'SECURE_AUTH_KEY',  '7sI-wIgRXLRS`q;Az_m30c{}xAA@u_F?%,Mw9l?7+_AFV@_[Mtd[}CZlZLj66j=a' );
define( 'LOGGED_IN_KEY',    'lFEzcpce791GW5 g.l|`0on6a_9Rlg^X.+jPB^-u^KCK_Sp#-@z2K+N|=XAb-`7K' );
define( 'NONCE_KEY',        ']44c<rKzqV($kTt5NMWM9IEh[e6#w%{}3c>!6:sx#$J-r@ i~Zdzr.y}N|3yqx;@' );
define( 'AUTH_SALT',        ',YK|jH}ojfFe^jB;RyBYDev}$:7B<w5o:;64_RdQG,Ke ~;zVOuj7RHglqWHuU):' );
define( 'SECURE_AUTH_SALT', 'l0>2&Drj@xAzY3YTi4|R@l=S4n0@%.>uM%F3/w2^BzkSR>*]I7QC/2kM1wP*}XOO' );
define( 'LOGGED_IN_SALT',   'G^*/f{8Xf90x~zT6yWx-bUP)M}<zV: w`!LYaN|lrfl[UAtpWP6^-?K:47]d}eWB' );
define( 'NONCE_SALT',       '7&9f~]Ox$>kL;{t-QJ#E&&*{06a>?QQc GuXP]lFf,5)htm^C*8u7;wczeIRx9N3' );

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

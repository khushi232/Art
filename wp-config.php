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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         '9&b0&8:esb,AP*S>>nDZ*u&dpau]VuDH|L*Z$ec,+;A,H@?:B1>~2=^GXAvM/hw8' );
define( 'SECURE_AUTH_KEY',  ')a)keTCEGBLhWeeH9C/j))*Vcw.7m6j2S|`MD@nSY>etPXE}w.62JIcRO9tvB-;=' );
define( 'LOGGED_IN_KEY',    '9B4FQLCYLb)..8$D$^_g;D,f(9[O1dXZm0>eu1u! <kH>oLh6DGE?Z 2;Tb(xr].' );
define( 'NONCE_KEY',        '-P8>r(T(2Wns;e3EWIhSi9uSl,V1[^EgYaf>XEe{%2n_)]j%{hK.pG4Shni$-[r|' );
define( 'AUTH_SALT',        'cc]Gq=sQ!P Ot6*oc$vg]bGvca#8oa3@v7pk9rET5>?WYugX=LzBqX?/XW#5utp^' );
define( 'SECURE_AUTH_SALT', '}k?zXy$c5?)O9gZvH_v!cURo~CI5c90LC5F&*u@epgY0S<ApxvzSo#$(ep!D,4}c' );
define( 'LOGGED_IN_SALT',   '}-k,xcpnG(l:CTo|q%18@qGX;{3Ip;jknf>ugalYBP]cmk@IrIC:2|uziMeJ25u;' );
define( 'NONCE_SALT',       '1dD!r8v#gj^^/[VaqVWQ*%$Q4Et;W5Fk*mwQSty)ETGVV%iMDp*_y5{^|^F[aanE' );

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

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
define( 'DB_NAME', 'aecoda_db' );

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
define( 'AUTH_KEY',         '| @cE0*%j?5ZO&D-:)(?iKi A-/6)mIo$6dtyyP.UR{8@z4%Ftuy165]UR+P@C|Q' );
define( 'SECURE_AUTH_KEY',  'X&)l$(Bq@:1B2F1<snFhN<FlI[Ui,DH0]X*}#p~m^|g2tZ ]qz*gZ*{JCWOP>B_@' );
define( 'LOGGED_IN_KEY',    'Uv1}Xe/twW|/k%[yl!+b0]I[1&`#G7)|)ed]3_P<{_u|+%T1~R_35gtv>uK#{/&4' );
define( 'NONCE_KEY',        '^BFgQ.n]69X2cI=0+XlQ;((ahh^O!_4g%e7Q]&PS_P_Q+c[A#l50MJ}$bmO]fKz1' );
define( 'AUTH_SALT',        ')-])l6MF/aM3LO4C5`)I`KF07}A@%EaM@`hWgkRotnRO#c0BC|=2.N3H:9zVRJX_' );
define( 'SECURE_AUTH_SALT', 'eDie:;lBt/rjABac;>|nJ9mIlLcqO+3J%>i3}PWyUfO%Y`L) >;G6AaN2=$glx6}' );
define( 'LOGGED_IN_SALT',   ':z//*2t!b@(c(fOj.[EQoaJrA}o.T@)YHEE(+No3$#2M&=4q|e(>hXK!u%P^qf]7' );
define( 'NONCE_SALT',       'Xoyk>57RIf2<<%<uZoMhccl([)9Dd:1e/{0KAZK@$00;~j;~K*PUtH+-)}dh<iw%' );

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

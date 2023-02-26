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
define( 'AUTH_KEY',         'W(deC=0_hizD~]A)VivE1ZTCT*7Ez9][g`Z!zbDF(88z*|*HZ YJO/J~|mzq;5No' );
define( 'SECURE_AUTH_KEY',  '/FJ.#oOi/<,*tT8A7H;}:?d>@9xH[b^T(17>D:=h.kMyC)/)2mi0Gra?*`ZHjObg' );
define( 'LOGGED_IN_KEY',    '.R;i)5h;9LE6.>dD~DWqdA;d-JC})< kQ)&XPX{KTg&][~{W2,e.Hg;Y86W?#{|,' );
define( 'NONCE_KEY',        'Wc#cdla%7r `4kVq,,:>5f>U?gn2Ei At-6[Y2{3Mp0q&2VmF3xNz]bHVD%>.Z%E' );
define( 'AUTH_SALT',        '/,l=#lL05;r-S?nXz=GI1-Z[w9`OoCD!X.T!n)`vv`v15%o>TAR;>fVHA p@q8?L' );
define( 'SECURE_AUTH_SALT', 'tLT04?L%Zd/iwcS+1chU@-:aqng{3_Qiu_HstIe<dQZO5I?zD<v]Hl~XRu2Y=G0M' );
define( 'LOGGED_IN_SALT',   'D^DbsVOs6pxqb_:t>8ldb}>A+]Zx$Wo#->y0z#_rW]]EEMnL;Wu$K]E_2KT/TWOg' );
define( 'NONCE_SALT',       '2Z8/g.gCk [53wvPa3YSkGZBC.F>Fa*{*`&=tk_`A60em=(8Ial{_97VQhvW[mri' );

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

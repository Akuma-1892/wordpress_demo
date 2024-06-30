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
define( 'DB_NAME', 'wordpress_demo_db' );

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
define( 'AUTH_KEY',         'w`X(j#x]=TUW`~?]:PdlY.s72{k!-hS(%fs*bH7|3gn8|Biv.Wf7s:%t[3k/PUp_' );
define( 'SECURE_AUTH_KEY',  'GXST {n3~`DD+UA4EeCk8L :niOk:~2;QCA9wtXxOq5Ge$}3#,$ID/#Qhu/nOm%T' );
define( 'LOGGED_IN_KEY',    'p-g|-wEwi)WS:z~+:uefZ5Ke9VmHqq7rxGtu8E%U>FD9hF:giTgB^HxtHJ%wR^Bn' );
define( 'NONCE_KEY',        '$M;U$M6fm*Qq*&oF9ec-+zp(zyb21rqK-:bqPnnbn.|3;dNTs,CA9FRfZmCrl+7}' );
define( 'AUTH_SALT',        'o&j0}=I!OQD@SOEk^c1.O$eqB)8;O~p6$NEyXLwM]fsIG1]_d [{|`b]fba:+fRo' );
define( 'SECURE_AUTH_SALT', 't_B[tb[tvf:d8b0({@Xz79~<*>V7U%:K<:`#.MFF*%.o[YJlUh]k;WIMo&$Xl,vP' );
define( 'LOGGED_IN_SALT',   'DQ3m#?}(QHeX`f!bIf.;5&8m~i1rmlY&8Vs*E.5FJ,e>Wpb4JUV .06:%(diX8 &' );
define( 'NONCE_SALT',       '!Q/o,6%=|.Tidu@t)v=<bu/bTo _9om.I8xNW{CL|n`8&4~, DmlR:]g@B^@*%8;' );

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

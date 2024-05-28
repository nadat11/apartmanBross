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
define( 'DB_NAME', 'apartman_bross' );

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
define( 'AUTH_KEY',         '7|nZT4^CO{PUkP:9LLIWSL/eTm@hW(cHD^~v<lwDIkrA$H/15~3yv0z30.4|/mRI' );
define( 'SECURE_AUTH_KEY',  '^`AL.SF7mrRb*5bha(582m9Po^&jsal!Q[IY56R|X*xNb>fdzroQJWp[/OB2PhuC' );
define( 'LOGGED_IN_KEY',    'ieQ6W77=m]&w_60S{24SO HOK8C%pfg]wR*A_8H$.b(#nn1v[lnU9{xDn3j;:B@T' );
define( 'NONCE_KEY',        ',0fxryX75[7V1>T_022h:]n(|Pw_uGx75Tb/R9_H-Np*rU=uvrm|vzAU~{kNw0N3' );
define( 'AUTH_SALT',        '?b]Us0^3k|#Z_s4j#I+#K):_x_1kD*,cRlaJj~0lysSK21R4*ay 5/ |pp:;7>v#' );
define( 'SECURE_AUTH_SALT', '((8*QMk,e*H9mH=ox-z2MoeLs>Zm5^0G^R-?,yXuAt*gZBq-L]dF^[1ll8aPVH|B' );
define( 'LOGGED_IN_SALT',   'fI>|{0lU%bmD>y7@^fHA18>UImE^^!M$3xx1D>eKh/U|IxnNLYw4DJea5NU?gtIs' );
define( 'NONCE_SALT',       'lwN~hE=!*Yn.$9tg%f=J*4C<~A+l$L}3>Oe-[WHigFG.-./_r_nCW$/s-u}`~&2>' );

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

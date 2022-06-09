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
define( 'DB_NAME', 'cut2code' );

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
define( 'AUTH_KEY',         'ui]|$/k@4st20B2-Ta./z6}]FaT^zrxaC6eFL/`U_rk>,3W2eUKPRG^e|2bgtpEI' );
define( 'SECURE_AUTH_KEY',  'OF`bqj#xq5j9M-jIbdEVmOHlHo[M[*rD*;34x#ZV!:z-S>HJ46E1mY~#z/WN8UsG' );
define( 'LOGGED_IN_KEY',    'SF~?hnRj2e(%Pg8$@sru1KX/{:T3wxqe-bc&K#c6A@LeQQe8l&Os[NA9h</6d:[1' );
define( 'NONCE_KEY',        'z(U~E=~UJKzA0DW(wCOn>/2z2O/4lZ~0q0ak2,)ZMW/GY.m2Qf`lB2u_*hTs^f7A' );
define( 'AUTH_SALT',        'I..~I6H3y&<p8)PI[@zt{tk&#n2laRz/,hlZxzWtSJ{yj[Jr4bx->uH*t;3yPC(Z' );
define( 'SECURE_AUTH_SALT', 'lCXWlS$b&$w:|y5c|gTbit=tD,]Q0V;#3>/5C-w]?P;kuqks/ndM3.7P{O1q5%LV' );
define( 'LOGGED_IN_SALT',   '7Sc %FzxR(__.78UQj4#E^UY/:vd(Dz2%sQ@x0N^A,W;7vQQ~zu^6)%)5)P9/_<%' );
define( 'NONCE_SALT',       ')B)%j%i?R{LrSdK*?;^4x9Gv,nsRFl79i5Xx-{|b N( 3DCd%g9,BLh1h++^l,{~' );

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

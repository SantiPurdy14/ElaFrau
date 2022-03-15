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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'ironblack1498' );

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
define( 'AUTH_KEY',         'NbEC(p!)wC^^U-G=<^6%@[d =9c{8W>GgbET)n}ZWApca.7>c9Z`1H*66~)1eRP<' );
define( 'SECURE_AUTH_KEY',  '^E.gf/Lw5fb(N>WpwMkUnxjU-fC{Cd)poI<sJ Csma_:5;_NRSw&!9I{v{_Jc1z_' );
define( 'LOGGED_IN_KEY',    ',W.;9C##?}8[$iE=(r$Rch9:lc)}!qki{*i0MNP *UvZZ|2oa_>,:nVKi07|@;vM' );
define( 'NONCE_KEY',        'ww1uJ:#>.ydDW|2 }g{6/kia{tIu(>P(&7gKJWX1/eO53Q%F<8r|kmjq,v>k; At' );
define( 'AUTH_SALT',        'NH}`)[keBWUi*ZHvyK4M4)$b:JVlAuJbW?|8YT_wr|p&}r^m= g/In!O>X{=~5p~' );
define( 'SECURE_AUTH_SALT', 'g8UKTbM1U>(@-,.ky2k_l=2EzhtvZ:ns1jY*3Y^>I5k29CDR0}:F>joHqo1>7bG ' );
define( 'LOGGED_IN_SALT',   '>^Nt)X=f!1So=Gwjat$J|f1E)a1}IILk@d6}HV.Sw3v5b<B,=wA(1irAOy6D!^hv' );
define( 'NONCE_SALT',       '[j#UD;7Y72#53e3S<cFh_Fd8,T^9O>sZ|RPn,Mv$ZG.h|%a[`=|i$d1p=$s6H_K;' );

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

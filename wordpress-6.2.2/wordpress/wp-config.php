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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themabuilder' );

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
define( 'AUTH_KEY',         'tT1/N9d{I3},CDr/fV^/xf/d+#kDqWOMStS@f2@=]+RsW._rA0XfE/rVYQtBbQ(@' );
define( 'SECURE_AUTH_KEY',  ']WH>.(itA`lv-hE[Y=G6^ygtiuq+fY$IH@ZvaRiCh0sori|Ak&<d$>%` [/CCaCn' );
define( 'LOGGED_IN_KEY',    '[wG$?>-Qqz*/yqcf)7nYS&vK_ uJu3HI2+;*2M-@ky.UNlui+qS,<NTuR9R^$-(*' );
define( 'NONCE_KEY',        'X;nEI/v@`]kk#e!I6?ipF$8d>x{e?1-j.WaIi<N<Gg~Pc.Jw#rRN.>/%W=Q?Y@UV' );
define( 'AUTH_SALT',        '7r`8[0H.WLiWR~^NgS)OEbP2~C~af83{L[#z_RVE7}9xG5sw1}Gk!(sRbsU!CgwK' );
define( 'SECURE_AUTH_SALT', '@v,xyM<,$;h33Q;sGmH-lU>Z[>7RFNw=jo;*y|^LHrA JIFJY#!nS`gcO::D{qP]' );
define( 'LOGGED_IN_SALT',   'lyo#Tb9.%8 R(|XK&u7m#m$qLqK6_gtYIR953_:%uFP4NVkRg:]P|R$(mLu.:^5`' );
define( 'NONCE_SALT',       '>S)N01A9UA_!Qr6eHQk;vP}xi6!VOHkoR=.8|jfn!~92dT(&`}yjev?`,#hO}nl?' );

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

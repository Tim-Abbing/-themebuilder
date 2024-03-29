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
define( 'DB_NAME', 's169822_themebuilder' );

/** Database username */
define( 'DB_USER', 's169822_themebuilder' );

/** Database password */
define( 'DB_PASSWORD', 'Themebuilder123' );

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
define( 'AUTH_KEY',         ' C>w&hx/TD,F8>:%Xkjn)Pin*IV?]?S46{*(]Pa_nE7S|x}.XI,R6^PKzaKvLm@7' );
define( 'SECURE_AUTH_KEY',  ':$6v+14Y:+?kc=&b-!)Bw(dz4T(D+wsFGaY>}%^5UNzh@^yRJuO]6. n?p1~X-ve' );
define( 'LOGGED_IN_KEY',    'E1H[z]{hOM1&r_f.z5staJz`EihTE_Pr>BQU/a=l.2ccM`;rid9{kb[,}D-3n)/C' );
define( 'NONCE_KEY',        'nxNf(Sn7$3qb9rr`i_ JfujLfvo<PG&fl#hU)OtGu7Yaoiec={-@#Aw-|/m~^h)p' );
define( 'AUTH_SALT',        'T`Koj6aBm>T9YL!Ws/O)=]^boJd0m<?S1@)7lp04rOeyTN$e}90>k//6$S}4=LRW' );
define( 'SECURE_AUTH_SALT', 'mdA8/IB+/6+fa^F*~K<!|C*0Jv;#v`qkBeFCKv~bqVBEJpOCg*ej*`5eCW,~2hKW' );
define( 'LOGGED_IN_SALT',   'Luuv[zzlP>>>CIj@OSZ1EVwxWEro:wn %Di9Ynuu3)>a}xF%i!;E+sV^*!?-Od^d' );
define( 'NONCE_SALT',       '}`OZ]Q)uAP%zjA?e,<>vNvHdYAL{<{n]Es$_Y[~xwDhc9UFkqCa_/^*l+/J$j|<e' );

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

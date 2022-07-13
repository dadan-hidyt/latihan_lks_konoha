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
define( 'DB_NAME', 'db_cms' );

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
define( 'AUTH_KEY',         '{G![n5C<2yK}V`!2Mrs/~xv[:nA^#C(.b^ q*,(<7ed~#tmzbZZ(v:(4.{<dMnR>' );
define( 'SECURE_AUTH_KEY',  'N2v_@HU*f(w8+@a-Z1}*ft<|vc_uNBK/|8ZHvH>Z.KJhqxN>4[WSFN[v@F6j;5v{' );
define( 'LOGGED_IN_KEY',    '7~LZZ&*^I+tP@ul_>)Gb$B,aRBXkSx3Cp.<u7B?i=3eyI97*1A$K 9R9l^IUK9ey' );
define( 'NONCE_KEY',        'eaM$ Jp}9zHXBfs5V0bfiiZ6@cUjH9qt;=$A:={@~V?<8h)tUbnj)7^?n~Z*6I3t' );
define( 'AUTH_SALT',        'Jh[6>-L:RcE%^8^bv~:t?U%YAd9%&T>tP+Y%.H`v]<fy/ z=lpx>a!d|E&UNj:=Y' );
define( 'SECURE_AUTH_SALT', 'Z~Zu[&6X2~:rPEJeNZs*#(C}R#up%2/#E0Se$ryaQhOg1RLHIw9B74</OW1b+mjt' );
define( 'LOGGED_IN_SALT',   '@E@Q5yu^#z0}obyKH?ycH<n+X4[=0<j>bT2G0^(e*WnXfW_Zanvk,_v=g>OG?;KM' );
define( 'NONCE_SALT',       'bz5<[I}  %AdRt^L(MO%^c]pd*qd9:4#t)BQZYa}`:Hw]1VOCI{#js@W)`TWJ$}Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lks_';

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

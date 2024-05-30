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
define( 'DB_NAME', 'wordpress' );


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
define( 'AUTH_KEY',         '4(L}ofiOnd0NY8RK`c)&r|;iieFA%99Qu&1SC.YwaL+LXXMu}&dnqcXm,1#u|:9C' );
define( 'SECURE_AUTH_KEY',  'G+IMRnT{@u71~KtN,1qFF|5K~IF(xM&}D]~aynDNG&Gsk6QtI&;xPpDcP^5=5wek' );
define( 'LOGGED_IN_KEY',    'q2vq5s>6kyV7[42)+Aims;N@dzFSFUv7S>1k}- f=r2e+>fET5l*8*vHZ{>qX`b1' );
define( 'NONCE_KEY',        'dtvnWbtfQq;nM_pENnNb>n6y&5P )UH#4Pup|]-N<t3>=RMbv C[qG+3!jn<OcQV' );
define( 'AUTH_SALT',        ',!R3@WwKf( fZ2jjsRtX#>8dx!yOy$WqT,<SCjz^+v;C13 )!|9~%xb.2g>Bj77A' );
define( 'SECURE_AUTH_SALT', '&)o5c_Kzh]%z(7&fyk}t4X@D#VQlldfh7!~mj^]q/C,KBx8zj;^[kxcw;7psBN&<' );
define( 'LOGGED_IN_SALT',   'x|!`/[hJOy=;wv5n69l-,]Z&58j;?6,^(WcpjgsY`bK|5?rv@5i aKQ7,|xR|F1$' );
define( 'NONCE_SALT',       'nY8+a$ KN_Kd6rYsXEF8wJuay>|ojw OoPqGA8#E3wIhX.A}w2J=}N/&BVT$$dsp' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true ); // Optional: Enable logging to a file
define( 'WP_DEBUG_DISPLAY', false ); // Optional: Disable on-screen display of errors


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

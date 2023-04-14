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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'A-iZ*.csJZRVR+P[R9CU`@G(XeCq>V-$@vyQIG)%bE|J};.FQd&*Mxpi+Zbt])*U' );
define( 'SECURE_AUTH_KEY',  'ZTP).@8?0qTxze-!Qs;,mo$`=@qaj~^L#r cfRgqL*;6R$kS8]SDbQ&6e=3.:doo' );
define( 'LOGGED_IN_KEY',    '=H1kEI+Dv#b6kHHD(9lGy6}6z^WQ2&e5}Wi1YdBe.~3d3mc&qfZa#RMk4~|c1?B4' );
define( 'NONCE_KEY',        '|0fL2K};SKGII)6J}+yWE;xbZrK4/$Ws%d~H+Lpqbl)J<yK/F=<;0&ilSx_O%s[A' );
define( 'AUTH_SALT',        'ji=tT3V:5EO 3w=LhLu|U@Nw,RDCdUTuZo.*=62sFdk96D3YGUrJMc;`H91GRK(&' );
define( 'SECURE_AUTH_SALT', 'IBMtPiKpYf6jDtF!;qfV @1/~5(P|;5^L~D[?G|TtP#Ph<,4rc63BU}~]K6?{mj=' );
define( 'LOGGED_IN_SALT',   '!0JK3a)Nm*fS$F#%c CuszUYeGe-Oy;CuT/o10I@G8#4PtQaD%Xfk@1az)Zj,zfh' );
define( 'NONCE_SALT',       'WhBi2N]Kz[ICN]F#nNxHIZ-8X>AI?*uL8G!S^q#D:wj3[(wEN9*mH0DNMh)<I= -' );

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

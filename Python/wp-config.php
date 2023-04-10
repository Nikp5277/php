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
define( 'DB_NAME', 'python' );

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
define( 'AUTH_KEY',         '=e$@bm[5%Oue-Yby4D=S}(4imIFAO&%PAD5P 1nQKsl{3be+n&LZaJqW=4_h+UT:' );
define( 'SECURE_AUTH_KEY',  'NqvEY{b]ia{.a5yO;(XU@2v$*8<ToCd) PxuqBbpJH^-P}>=YMEFjYymyVQ=MR{a' );
define( 'LOGGED_IN_KEY',    '5@kZ,-G,w_*[ykps/h7~=KRIuXLzi,` ezX]wFw9$ni#6A{bA~8WM`^ccWV,WH/+' );
define( 'NONCE_KEY',        'uoQak>59FK/5=cEE62UiWHyN s=~~^@GOyS5^!hyyEN#SN0el[fKQd=XG7e(P08.' );
define( 'AUTH_SALT',        '@ZFr-ys5oi#m?pmO_=AE|+t>Y8`I.;s+Zu~Y&-%6-P_b@T&&^@,Rk/VM_8*?:Iz&' );
define( 'SECURE_AUTH_SALT', 'bd|h_q?*{8]<R0eA@+f$q/H5i&CX|F`87FMYr+hJxE;M)hj+7&@wZU !(Rh>Nus{' );
define( 'LOGGED_IN_SALT',   ':k[q:^_dHft%z[7%5Oy%*?{DHoNQ92fSqYpT3l!e( 2LO5aVpC__;XAQ e:}NqF+' );
define( 'NONCE_SALT',       '4B$k2(Q2l&Yx~eez^&3Xwk~7[[uJSeD!*/|&t9]O(d5s#47A>akQH0CQDQud>@Z*' );

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

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'VfqdJ[qcK3v:+a){eF L{w~} PDUX]_LNf?8h#-)Z OYa]I7G<XW,P,EHHa)%#hE' );
define( 'SECURE_AUTH_KEY',   'KqM~zuoe}e:FxH mIr4KL$a_<)KvM|uBQ9)opZn[iQ+~C=KD$&6eHoTir7+wr1b9' );
define( 'LOGGED_IN_KEY',     '} *R#+BN$j&[,`hmHcmc@[S#he1Ed~yc]o*;}09nRmhf@j`Cs }&IM7lHd6STcOm' );
define( 'NONCE_KEY',         '&`P@VH.*#>.n5TZ1$cf`:eCS`?IjnY_:IA^Z0@OQ0MPE(E*2_PLfk1?(0o>BLP&b' );
define( 'AUTH_SALT',         '?G&P?n)_$i)9g#{$7P :Zc4Cutf/7YP-te;T+H4,ioC7c;]ln#C,U{1+/fE0D}`5' );
define( 'SECURE_AUTH_SALT',  '*~8{MF9|L|IEfAZX_j#(rQE%0c)C^7H2g*]s0I$b?,^DIk_~,=lH^~8EK%WA!{8v' );
define( 'LOGGED_IN_SALT',    'B,4H*5Cq|#4Fd!H5e`Z1&xzPOX:qW<T-vI[J1#*=nIaTRd:TcFanoUgA~78AZb/2' );
define( 'NONCE_SALT',        'K?J0~D#aAEEj/|dl!u7>2oj|HR01Rit>x0=)J+_KHzzS^~N6T A;4l/5u6[-R_]>' );
define( 'WP_CACHE_KEY_SALT', '6U &*a,3B:!<:+F/x5:N@#zLu=j9.9d)R2]91f5b{K|bvb} EjsQZW,40%EN>kHl' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

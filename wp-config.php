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
define( 'AUTH_KEY',          '.mr%f]lAv@IM&rhf+G^W(6t6!?co7ecFZa=xw>ut3<(Cq@5a`#^(LS*E$Bs@RofA' );
define( 'SECURE_AUTH_KEY',   'pmCBt!<=ri6:+r-`V{HC@#k+!a!g{mGbLcT]{fEf/yU69n=8u!#xl6J6U<ze`&]~' );
define( 'LOGGED_IN_KEY',     '7(<0Qj|{kfK/$@)&[J!M2foMPf[xqM`GM)O@$C!QgdKY]A[+JA;ZoU87~ R*ERwJ' );
define( 'NONCE_KEY',         'UKO|w<=kD9&~]hD[BT*#!C$p4e L2l(wGGX,ag&f=:wbjC=Wv&8cZT1|<oAZ0vu~' );
define( 'AUTH_SALT',         '#5C()F%b)j=g-ky=+P0,X&} $,7X2m }jf(p9c6h>KmS8Q@|r@t)tPM-OCecui[4' );
define( 'SECURE_AUTH_SALT',  'p0-@$A/HN[aCOh5)wd5vv$WcKcJv6lnXutM/B#b5X:]li9It8Q[ /CIKNI)G/s5>' );
define( 'LOGGED_IN_SALT',    '1}E2f0;`YGmdRD9t~Ho^L%}b}KLA^jmXMJ[5gl*crqb}e;{Xdh;8w2B84~i?(,v_' );
define( 'NONCE_SALT',        'gfd#6{Ax>)VH+/$P]<pXB:CP,#te^us>* mY> RG-|]@RBa~2fBZ;C(=oGtLi)&R' );
define( 'WP_CACHE_KEY_SALT', 'X+Yco9LdBsXsSCf-tzM=VNrriy(wz]`],Ek50$2zYU@}N,? )4=`Tt^2q!s06ijm' );


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

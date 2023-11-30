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
define( 'DB_NAME', 'healthcare-wp' );

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
define( 'AUTH_KEY',         '}6C99)bh4;=6FUb3oZvJ,BtR8:{E ?N(ypOjMx&XXFC$X/MMS{fe!GXGv,b@|GSs' );
define( 'SECURE_AUTH_KEY',  'XjQ7D,5+ZjM@#QV.aA76hk3)tST~LAB1WAg?z{qM2uGIq_lv6f026Ll/VE:Qr%tb' );
define( 'LOGGED_IN_KEY',    'RZ<nqB5;jZ:1qeh.rsoLt*h(419bC`2M)aGQ:x_O^qq-S9&gkF5U=t8Lex>%05#~' );
define( 'NONCE_KEY',        '}3Al~igd:G@zjk<X?]J*3.%%1iv@FGR~oJ$e.fvPh/voHYGk9ztD>Ry.cJUkC>-O' );
define( 'AUTH_SALT',        'RMDty=n6,.cbLT&7M1<Ib~DXqY@T<%DZ5p%`eJaV ^EaMD>jRNg-#1<6`PyonP((' );
define( 'SECURE_AUTH_SALT', 's_`_<8:i%Q54dR&BS&?Bua=AlQ|7@4Oge$G[ae*zQ>mtQ~,uWFsNNrq-Zride}8t' );
define( 'LOGGED_IN_SALT',   'Z]Gc~RH AVsl@oEIf(9w1+`h]g+ds34|W3tqhh]1W<~^IV43=_u%,9Ai}{{p[sI7' );
define( 'NONCE_SALT',       'MM- g+;3bY(~89vu,=F;z!GGz:s0-AyfC[{?#asD5ZbX=)m}U]9SDHBir:g<hin?' );

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

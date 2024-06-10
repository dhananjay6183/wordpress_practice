<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress_practice' );

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
define( 'AUTH_KEY',         'E7C2/^d3-|iB:x}jw,<7mKQtu7=|{lqs2B2L+DwrvK~#0tU$of9qlVi65ot?p0iu' );
define( 'SECURE_AUTH_KEY',  '-B6(uR9|nvkbmmcq2C$wflF1_`KN%jw.:$|)2o].p[ev&qWVuEf@61B62<AdNq-*' );
define( 'LOGGED_IN_KEY',    'ZL >!f.OecEh(?`HKW-F>R4^y{WGxA!G]Wc*H]l/f_voa`v48E,Wh>RnMjvjvX*x' );
define( 'NONCE_KEY',        'CDL@!oB=bX zEXQTIxTuRYBQ+Y}gb!~3b0XO|c2zD`mxV<3#$e^7Q>3pOD+FvU}f' );
define( 'AUTH_SALT',        '4,uUE|)<VHWzbobCdX$3jG%Z0uZ:A_b949_wDW4H)BJU~BsH! ,MlbH 7#]_C>~C' );
define( 'SECURE_AUTH_SALT', '!>l]i+6d L l%F4x--3(_s[@&#?1KN7(6A%4+H?W!)wI@?^:0iQQ$u:ZZG]sv2cA' );
define( 'LOGGED_IN_SALT',   'r<S &U:BQ#SeiTH{mQloQ;_.%_piEeA5L;uG[Fm!Ley/I8m,Ce,zA{lC]&6&gCA}' );
define( 'NONCE_SALT',       'g@)nSR{?6,o/MZ0vSe/^87OplX*aU:|1UaW=Kshnb~cc[mcy2yN<j?@ZBB{#~wnF' );

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

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lp' );

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
define( 'AUTH_KEY',         '_Q:H#c?cF xQvH98iZKs1pw7a}i8xqq,ju;/3gu%mVVe_),Z(7Sw-z@]phWSC?01' );
define( 'SECURE_AUTH_KEY',  'xgn-G=y3Z)PrQj|Z;,t9VY!#AU#U9cySw^1Sh^::igeSam!Tvz?8C.iT?G/.1*gs' );
define( 'LOGGED_IN_KEY',    'Z^TNkSu})Rvv 0}q8L&:QjL,?B5m-v/E@:Q65tev@|x/m_S<LY9Up9#L1%;<Tw+E' );
define( 'NONCE_KEY',        '6>@U:Pn6rnWCh:O1Erwa`k5EuFvYS>tWR@VC.vY70v9w4#_dlEaAg8b,ge|G_|)o' );
define( 'AUTH_SALT',        't#~4I@5Hz*:& 6?-/Y%!Mh$$lo[$D_g;LL!!L~6q!dQIK(3Le=/MwnyqC)@u3_Hb' );
define( 'SECURE_AUTH_SALT', ':`9SCq,zfZN 6-x(V9Qi_as+fjwH%$a#wUVM1auFOZ<WivL@fpMVkO].U(:%jCQA' );
define( 'LOGGED_IN_SALT',   '{/e9Kk~ZR%N.QMNFq#dn&oT;)Z>=I}nb#Ng]}EDiCQFb5uC}5.^dN@DVY}!s+j >' );
define( 'NONCE_SALT',       'Je=!w ~TR )%{=nd} #x!huK4!Q?nM4#Wa]XvnXD~$t9GMYcOt0j)k<H,_)-zr;g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

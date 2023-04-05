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
define( 'DB_NAME', 'mentor' );

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
define( 'AUTH_KEY',         '3^JeDCD};RNyN(}b@d@?:K%M:yH)@l8G1I(GS>orUS9V0uI|@66b*Gp*)3V96,Lg' );
define( 'SECURE_AUTH_KEY',  'uK2:~MucX3g#=48@,q6435%+w22lH-^ZB31N Wwb431~3KU&Sg)`NT4qV4q<Fj:a' );
define( 'LOGGED_IN_KEY',    '/w^ Q`ay@3}M``}TtuXzHL,K/<8rg:A3YGkWuLAu?Q;/!ri6iT,o-sYe%@P; )0A' );
define( 'NONCE_KEY',        'Xv8AQ)PZMZ?6a9)6Y[9ua83,u{(in IOr [~Uv@!K,0QI)$OtpX3`[;tO18tL~vc' );
define( 'AUTH_SALT',        'Xptd|/KX N<#|UP_sum%j<+3t$l-PYj/N<^~dBo##VT~/EU.$1;*&,^9d/LjI&gE' );
define( 'SECURE_AUTH_SALT', 'v6_v< tp.LY7qhj2,4-zlkUam8!P`j tByPFru VZ3l$y|d*i=su.`pSVeW6z[ft' );
define( 'LOGGED_IN_SALT',   'lW8kIT:fcTrubjPX7p6/&2E5P;hg%>@&-NoIRJ7{c1<6Na^r`uVxeP>gNoLy)s3:' );
define( 'NONCE_SALT',       'j9QNa^!V_td`28C#J:=E18Yk?Ba(2Mnk*BQA(^}cG+G77MsKh%g!:]7_#s$NtK;i' );

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

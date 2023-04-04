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
define( 'DB_NAME', 'toolm5' );

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
define( 'AUTH_KEY',         'su<%jn!5$/?QiQY6XCc3(E:?kQo/=:6WoEt_`Ppp=TdnVNGDKOzmWT67ICoLUab$' );
define( 'SECURE_AUTH_KEY',  '/wjy~loX9JBoHI_TvUr`35vL`0GB_=/:f{G$hz/NU:upxA[E8?Ksy,}o(hiKr^1]' );
define( 'LOGGED_IN_KEY',    'NhZ$Bkjb)u`(5Aq@s5jqk`{S+R;(wSh?w-0tSbA%a,b[$.q]c`y![`(EFVP4EKie' );
define( 'NONCE_KEY',        'te2{X~7U`D{)va)g?_QZm|P|]g|UP~fSZ,41C2)*?UdW%~[tZTr*N`@{?hd-k]X:' );
define( 'AUTH_SALT',        'CG|zDo ?yb^IHN.<KW/FA 4RZ%6 U4{>.uf~<tTZXhf.0]r?S!Wd{hFR}(^%sc(>' );
define( 'SECURE_AUTH_SALT', 'vQGmsM+on+}=I4J%g%EEhIINBPpNPLnVGWnWQeK,t&hJqEn6%KBiEKuJ)sB3UZvp' );
define( 'LOGGED_IN_SALT',   '$*F[Q0FFa1H3zvvB[;fF`7SdO=LJA.Vl!?IDO$7GfcCRK$5CqC<%lh:wo|,*7OsK' );
define( 'NONCE_SALT',       'JvKxD;.hz8k1wL{u[uN7h].VaTq-^cb/_~L}7#w(!(_u4o#d@rtvc^~XQsanwQ2.' );

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

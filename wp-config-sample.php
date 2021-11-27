<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theukrainian' );

/** MySQL database username */
define( 'DB_USER', 'ukrainian' );

/** MySQL database password */
define( 'DB_PASSWORD', 'n9qIrHG4dHpaQYxI' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G-}oGcMs:yOJc6Ti(3r1A6~+^=,MZvl*bal@Qa{-P7RJXnnxHS6as_|u^8/=NW?n');
define('SECURE_AUTH_KEY',  'KVHi%!t!ZJ]^As|N7u]5JD[ah-&UtJ/ntF0Ku&|`63%V]{ZVOj{$+4^h^Vou8rA%');
define('LOGGED_IN_KEY',    'saIw!+oDxhPGe8.&lEo-I4#mwuYo@9ictt+5L=8a){8Tg}FXp{jGbs+_t{= %dz_');
define('NONCE_KEY',        ')a~s)ZN&C)O5]Dsz>-`5FR A]P[w6U^ iQh>3X+9Zp1wc<u=IgF|O[)T+3~vsO0E');
define('AUTH_SALT',        ']`WxCe%)d(,_h8w;|}NO5Tv&R]K(iw|Uf={IoY!/k@3K8}W`Y*CL.i_e3|yiz&RT');
define('SECURE_AUTH_SALT', ';+p3M-5|F;-6XX/3W&QQ<@GyE/b57hzRHSEYc=|#O@QsedsbuyPG+8ja`9:*_~_u');
define('LOGGED_IN_SALT',   'B;&HN;P9`z|!AHC@|7T3<?x$tY6e,qI)]|s]`Fj)_;?S3buqW}w^JaG-v7Cka{A9');
define('NONCE_SALT',       '`FoD,T+/N4BT<$;+c*e0cb,<y%HID0lFbnWOX/K|lv< ;d[Y3/=H7(Ko?Uaix1a[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ygp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

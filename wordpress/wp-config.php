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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+u6jjQ]irtxh6_SK-|s4s:~r^Pj@T{HPZUB#0*DxCYpv158db^M)],3:=^ <83x=' );
define( 'SECURE_AUTH_KEY',  'uE|=R/ :SB_w[j~z&?*}PN/!!D@Q}$R?U53V-1DAX>0@^5dGHjq84,u^,bDdZ!1K' );
define( 'LOGGED_IN_KEY',    'Xk=f@o{>n*D@,WTl&Lj_&/l8D+RlTd3()ILLq:vm% 47:lr[$H+huxB^-@; )&2q' );
define( 'NONCE_KEY',        'iyARtP8>Ts^Y}Oz7l7pV~<v2Uy7k)a|8O@}_a1g)GX+_S&bju_RUBcJgi>pVdy:s' );
define( 'AUTH_SALT',        '8zH{uxd?5Gm`mLDP&=Gk[`Y%zu&tSXGPFVCe4JRV#w[@c.qs(pvmCO?c4H4p_ETF' );
define( 'SECURE_AUTH_SALT', '{f=`LeMMS(H[%jVy+S[S@)w$RDB).YXNFjaQss4M^L7:LESqN8K;A%E(5TX:7auV' );
define( 'LOGGED_IN_SALT',   'K,mB*?ocyxN{emnmw?;:|O _O,$uc%jv&z R$xk%`fr69{w{bp[(9mXk#DW/m>m,' );
define( 'NONCE_SALT',       '$S&n<hXI%y f*a<mzR(DfOqhCAg]XoX-=y[mOmDrW|DvLY*RME!`tS9_R_a6vt1>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

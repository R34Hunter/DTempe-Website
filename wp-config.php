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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'Ff_ :$z*KPZ*.T[1Yhjb`/$gE{Ud(e:Q!G QO;.AubR?xi)AgJ!74WG;Z?*Bk_%.' );
define( 'SECURE_AUTH_KEY',  'I]$I]MczN$8#C?Ufc>l:5[Vd>!I&$`4?#VmW>g^!h{&m.qI-,I;6iCOcCJfy_4$|' );
define( 'LOGGED_IN_KEY',    'ZM.%Y2`%`UNi%feL=Q_F7/ZYFOEten`aTdNaNtH2<~.D7%d!Z <YGOx)4Dt;etS,' );
define( 'NONCE_KEY',        'Dvb;/9c|Xkd:v7FiVH4A]hzba=**<fClH^J7L%Cp{}RTx 7bl?d`nd1y i15L?)8' );
define( 'AUTH_SALT',        'u.xNNBzxl(T #e#FR#aCeV955[NZ|(4[_qW0yh4DtEi%$):s6Dn7!>h^2dmLpUpP' );
define( 'SECURE_AUTH_SALT', 'AU!=g?v~)N%4_xj3J! 9B=!I.Yp/c0WM8QybV,55]jAq K7((^4fqFv$3ds+^,jl' );
define( 'LOGGED_IN_SALT',   'rGSxC^rPR_,6eYo_VcbB#wc]>ymwFgJz0%/V)R6P(%5Ps7)#`(Ij104k:B/,AgFl' );
define( 'NONCE_SALT',       '=DLc;cO=kntNyDpKeB*I2<5Dwv*<2.BaCA4GnZ.:!sP&H6EF&m=_D>w1XytM=rAY' );

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

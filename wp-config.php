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
define( 'DB_NAME', 'alulu' );

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
define( 'AUTH_KEY',         '>{V-l@$nYzz]aZ]V^/{`mc@yjS^f;+Bg|>Om2:*;y(<+g5@01-s,XQg-2/)o4>mU' );
define( 'SECURE_AUTH_KEY',  'Hd:z<}BVvzQ-}6 %wX%>ZCNrZ6R;g6l&#vyoTW=eyw:oNLv`H]l9 k:E`}P,Tm!6' );
define( 'LOGGED_IN_KEY',    '`H(Ztc!{Lz1s{lqqiK+0Lb(JyK2#)!rR]]No|0Jw?ia-BnygpWUVoI->`^n8Im(6' );
define( 'NONCE_KEY',        '+m6:%7zLgS_Tw6}9)IdBN,=Zv.?q6k>xvGGw><Rwp06HcNHWY:WG_r!R6.!n1$}p' );
define( 'AUTH_SALT',        'M%x,b{7d-:`T@lLq4:l]_Gb_7B+O9I%0=YIq1-Z?m2KpCdaP<gxvw{[:dBAM/2$Y' );
define( 'SECURE_AUTH_SALT', '5K[6&?}2QKtPu5h@Op.Y=5QFHFgw:_>sbN_nzda(t;k>o`6,E#=do:-Mo-CVkZKv' );
define( 'LOGGED_IN_SALT',   '0|prVob0vX0F2W36<C08V4D=;B2-$%UgM{jhh_u*V/x=RJqe)n=HjCm~PrZ0fw-s' );
define( 'NONCE_SALT',       'IsCer pmY#`ciw;b)e;2(}N;,&Vvh,U]@PKl#D}_Kz;I)U-|M1NTfe}*r:|$ !ms' );

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

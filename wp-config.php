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
define( 'DB_NAME', 'seo_services' );

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
define( 'AUTH_KEY',         'V^Y7PzuvK_tPHqrcK:]::JRV$L?Q~yEOwHYTecw~?(zex-@4h@vGZMz!IJP5_<Jr' );
define( 'SECURE_AUTH_KEY',  'ofOQn, nU8_^]h3SS0#hE!*q=@g[BpA;EP=@n|^$MgzXQP7C!P&5Y}umb#q9RFC+' );
define( 'LOGGED_IN_KEY',    'DSQ%OYFz_tnffJKmYLf+pRe6)I`,lPl*9~<}Voi{VMxKs%A+,8[C.x$npD38Y_$n' );
define( 'NONCE_KEY',        '3^Sni Gl#Tg*0?~vyDi~5>b4]ESV&4#pDd[]I09_+Tlld)Im-IY1}8TC;jm &-;7' );
define( 'AUTH_SALT',        'hV1sqC G*[wbXWM:4X9>/&l}C5[oL,e`Fe?D*!RILu!>&14kV$I&f4*9c#!a4{zu' );
define( 'SECURE_AUTH_SALT', 'FmM;`&;`aHHKk!i+1[lbp;Z^`rJLP:0)1vX8zT!XYqF.O_l)t-@.`m#]`^fia ;E' );
define( 'LOGGED_IN_SALT',   ')W`v,evLY)r(+?:NM^=;^H=o;rVlgfp=7{8gTEfQBP;s[EUGOy5&>gRYu DU>vt,' );
define( 'NONCE_SALT',       '~{.dn(45]XkpZ^LO$~q[>Lt)V.,P<NtC1WHZ>n##(9b~a`XUL(:XGC[!/Xr~RGGw' );

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

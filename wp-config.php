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
define( 'DB_NAME', 'e-com' );

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
define( 'AUTH_KEY',         '9#HYi O.Tv7eILSlz_<q&Eb6mD5;.}dlzV~~Mmh4UM$8kvg.o^tb>v5;5>95 z-C' );
define( 'SECURE_AUTH_KEY',  'XXb0sHb-t|KrxF@J%F{EoQ^Ix@hKU*XnVRl-iSAOv[wYOC7*&43$x8w;,ggD#beB' );
define( 'LOGGED_IN_KEY',    'v@+-/|I&X,r]AW-v18#9}2L</-w<;VH&){O53$ |]~#8t@#5s/ZFEYGK8mFtn|@z' );
define( 'NONCE_KEY',        'M!g(mH{<K 1AZv?LNu}8R$c&9cw(u+V%3yza5vE8Q&%zy#|/.waUU7|_6G}boww$' );
define( 'AUTH_SALT',        'Bm}LWq`OHe&<)lv,U7-ne{lPJc83rWRfR{a`p.tbjn$[5<~rCk<$[t0%HSsO?y?S' );
define( 'SECURE_AUTH_SALT', '2_DR 2hppIPsk8gUy:g1~Wjl*/OM.-oUH&$h Ayodn%B1Sdd(/ (m9,m))F.?,M6' );
define( 'LOGGED_IN_SALT',   '=h_Xubr}5,QaLWBYj@ g~Rf9.nE5!>;;<&Ia{|,892/,tgU[=c&~h= t}8PHl;Kr' );
define( 'NONCE_SALT',       '5]}oBE0bT5ACYRd?Z*|t+=~P njxH%HJDgP#`3H/dg~1EoK,ta7x,S,W;#>up<X ' );

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

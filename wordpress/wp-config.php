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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flueario_FluentWebsite' );

/** MySQL database username */
define( 'DB_USER', 'flueario_joesirven' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jmkjmk12!' );

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
define('AUTH_KEY',         'a(n<=OgX_<5M`W~k^~,b0iVeK=g[D>t^&}qm#spd24mE f2,DmA$7rF9J&.lN-]{');
define('SECURE_AUTH_KEY',  '~b}Vz6$eSt9Pz8gq0<Y.9g3&Lgh<=80Z|>FvQ3ix^_@/<`!c5`x]pk|0-2cQ580v');
define('LOGGED_IN_KEY',    'ZxX*eIk:=a2{Z >eazp.L`p-$nF-Q(|[:N|k<-fTnONN@dCVNWl,i9T|[nX1d<~_');
define('NONCE_KEY',        'V.xz5D)F1#;UNz`Cw(5Oh]|+CO]+Vs>lW-DN-+:8oxC_TQ0`AxvvE]B1zz1^*[qm');
define('AUTH_SALT',        'G`s7({JnA1)mvd%++A@|B#VU1!SsEQq&}yYA #:v Q)+~s52u7Vwja79j6}SDJaR');
define('SECURE_AUTH_SALT', '7@d;EtP-6A#OQo1QXonL}UY|@z-_7E6#3@w5,q[ajKq|rW.%W164V_c+=Cpy|OTQ');
define('LOGGED_IN_SALT',   'gY_q/d,+:E*f&}d&4O-B2{/Y+IOZ+T^xV+e*J:M&k10!SKf|raBGBv$TzEQVovCJ');
define('NONCE_SALT',       'x)1YTXIT}$VE0],>OJiylH)v=g+6Mbc~zzKQ2Swrc;t7`!A-O*y;cs7f5PY8f|Bc');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

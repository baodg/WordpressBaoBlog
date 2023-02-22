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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'fBO3k6[zJI#IQ&1o|9pBv*^Tf[;M^5 )Jic:2WpiS#inxz@qhZGddM5 $|fJU#^o' );
define( 'SECURE_AUTH_KEY',  'b)T=AjzQXx|DNtPg5}N,ZB.j}:nX-lFQma7pd|_r|*+9gMcH/&`#mdqTaXsG{5k_' );
define( 'LOGGED_IN_KEY',    'Q<:<?mt.[~C`Q2$shl-bCDhJ_incv?gmu)u,V}o~z=#yXK0/mjtP=WmpcrW(g MM' );
define( 'NONCE_KEY',        'IEA:UcP)P3r)3&2gJ-L~6p]Gv]7K5m*v6u>nc__,n&Kakn,gWs~7SVV:F5EO)n#8' );
define( 'AUTH_SALT',        '9p~E$>.RRYjX]@0w]5@qnr<(|1^cgXfbL=0<PcR|-RgDh9Z8_2VA(5Rrm=Pl|dkF' );
define( 'SECURE_AUTH_SALT', '(eRkKQmI;AU;sxAAg&G5m6{^mT]]k7jE&FPU/=sbLorjJe vjn2l?(k<jwk;4oW/' );
define( 'LOGGED_IN_SALT',   '/g/8Bmm0i3>M(d5X_O??g!/<B2iOs*Gc4Y~{5 $#:NOg-h)XbBZ)ybZw%6bX^I2p' );
define( 'NONCE_SALT',       '6&+BRw`TU<D}b=JyS|&9Nh5SMQ1>-^TOv**)xLST{%Gy4sw]A73[{*q.Srq8uwkJ' );

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

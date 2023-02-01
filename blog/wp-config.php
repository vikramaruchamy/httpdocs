<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'badmin' );

/** Database password */
define( 'DB_PASSWORD', 'Rmcb9vrhw9@@@' );

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
define( 'AUTH_KEY',         'Kx87bbI|Lpd(e)j+RCHAl(zAwv>{=+[m`Zb|fv,A9nUoW;eC:D7^I.vXf6etI*gu' );
define( 'SECURE_AUTH_KEY',  '+1 ^Hpn_7YySlXzM|h tcDBc|}Kn|Gh}{c2`MO$Z2r0.B*bHF$p|$_d4=1K 9=x+' );
define( 'LOGGED_IN_KEY',    ' )j,W{C/i_g8$p^P MyaJIB}[m~@{f9!y&Yyv87g&Tol7SwS/Zms2QR&<4vmr@oM' );
define( 'NONCE_KEY',        'J:IgiXBUFf0QT(-FqOac~~cHy-i3m=?g*gjX:K>Adh!eGYGx;D0@<38=HjnO]f]c' );
define( 'AUTH_SALT',        '*Z7byWpN$s-_!|{3)l1iA%wnKr>Znn4U$qHJ-i3_`CoaGLVeJ3zi6fHE3mt4&(WJ' );
define( 'SECURE_AUTH_SALT', 'Hx$5sX:n|5Cbtmp9sW0VG $![k*^[m^6}nbHHdh9wUbA_j^.P]Bmy})<~|(EsNs+' );
define( 'LOGGED_IN_SALT',   'ap}x5v]V|m5_U*RYneQoC@FvHU9sY%!/SlCCy 2-AHG}>ZK^}^M&ym<J|0KB:BkG' );
define( 'NONCE_SALT',       ']h,(2cW)4:yC1nP8KyNxQ6eI,%2LbmkN$q&k[g}][!J}O,j~~7#l-U5sF53e8IKV' );

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

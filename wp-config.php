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
define( 'DB_NAME', 'nodejs_proj' );

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
define( 'AUTH_KEY',         'V0_~>*+X/4&oHC,8,U-u{~c!q<}DdF@{u@a.,NK]bf? ]hSHS!lM&pp<~-b77(8D' );
define( 'SECURE_AUTH_KEY',  'TSF&W6ZF6p8)UN:^-XffZS9QZ.;PncPsE*g9J*l;+BvYzHG&Cw.i11EK&i0s]BuW' );
define( 'LOGGED_IN_KEY',    'z]hS@Ke563=B.}KV/9|W_:yd`7:L,GW<q_6)hR<m8$?Kf|<Zf}dVijE?S$ywCU&T' );
define( 'NONCE_KEY',        'le~baVDpiC{:5@#46*W<RV2taQqtPvYys,yrq*xCX|UiIqxI1lpwB|wZ1Hb,T2BE' );
define( 'AUTH_SALT',        '<Yr//U&HCXPNNUW$cRV%FT#S(Qk;u21YfFo|(fRFXpq84 Qms633b9=E[DC8998p' );
define( 'SECURE_AUTH_SALT', 'mPG-TWq[6^,5nr:6xiL$?)WxDD]G1W9fWq9t-jq?L$ 4?u/u{7|s!}?cL}M~9~AB' );
define( 'LOGGED_IN_SALT',   'rXIYFYu:(z8/]%kHjXi;S>xT:EqgAXh~DT~D /OC_]k)[B&C3leur/BA#*jiU~ni' );
define( 'NONCE_SALT',       'x2J7xEpzXuWbHs2)seE:Q5qobTtkah[q#IzDU]F(P2f]Pv7s9_8=J9}+Qa(w{!uO' );

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


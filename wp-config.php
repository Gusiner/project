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
define( 'DB_NAME', 'otpotpot_wp123' );

/** Database username */
define( 'DB_USER', 'otpotpot_wp123' );

/** Database password */
define( 'DB_PASSWORD', '1D]S03)X6p' );

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
define( 'AUTH_KEY',         'zlqrr7syxc7mh3wz6r9cxi97twq8loaoqhpv5zu5fm8s0jwxtpajjlqnu5e9eiij' );
define( 'SECURE_AUTH_KEY',  'rzr1hmlzov19xebjqaighct6nsphjgg3f9de32rkdtv0ir2mrbbo2ng8d4x2sy3i' );
define( 'LOGGED_IN_KEY',    'ool1g8p5fljajdq6roqahlnmlslugy8z65tuk2kqeauz6rqhc10dhwerukok8uot' );
define( 'NONCE_KEY',        'roxhlse8jtyzjypcvuxhosyame3p4olow8xyulr4w3d5zsmllx3ituui9ysuxxfq' );
define( 'AUTH_SALT',        '3agshzd4tmtyei64vec6my2dx3gfsp4y4czxvozxkqkc045h0maldiw3sgrrgptu' );
define( 'SECURE_AUTH_SALT', 'oqf9aknlbhtqu9ip6emdpx1zeegyvrw5moz3wcm7dsqqt5au7r1pz1wrdudoqotf' );
define( 'LOGGED_IN_SALT',   'b0wk8pnhiekbtcmafl6pxby1cylxuogzbdifceikgjjy09n5ogbzra2cfvwwj0fo' );
define( 'NONCE_SALT',       'xbu3dyuclmejzc4apbm8qxmsmrg9g3o3s2s4qpovburyhxd2i36gvobm9kxe4sz3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2h_';

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

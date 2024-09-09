<?php
define( 'WP_CACHE', true );
 // WP-Optimize Cache
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'redcbltt_wp939' );
/** Database username */
define( 'DB_USER', 'redcbltt_wp939' );
/** Database password */
define( 'DB_PASSWORD', 'p)8Za!Pg3)6dk[S)' );
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
define( 'AUTH_KEY',         'dwbakyc6cf90luvtganzwx3zbc31rvea5iy44pwtkoskixrg4b1zfkrfmssfhlt0' );
define( 'SECURE_AUTH_KEY',  'r4kpqh2duckdyyqf0qa2a1nkvvahajbfxeeku9r621v7lfxsgzcxuqkc3ypbn2ds' );
define( 'LOGGED_IN_KEY',    'qracva03gaj5v5nknw0nopzecc0dcnvwum7vyp94notkl1mkphg4fhr8oagxb925' );
define( 'NONCE_KEY',        'ytqkkt3xt6jilbreut0wayop4bf53zqxb7jdmeohx2jmpinbzw9cnsmhuypfr7vq' );
define( 'AUTH_SALT',        'p1i6qmo2mnlmhbz7pffvr7wy26n8aplfc0afmsfgiroewoqf9wuazcibe980fulc' );
define( 'SECURE_AUTH_SALT', 'zkpsnuybzyom11srwyx15zzm5qafgsvw9xzibyj4rlcelhwbo6qvp2af4ucdtoio' );
define( 'LOGGED_IN_SALT',   '7qtakeelx3xloviuufvx3yi2pqpt1njiw3lntvodlh4fmgxtohcfzaanlwglo9tw' );
define( 'NONCE_SALT',       'iz0s99m2dehet5rk1xt6nshglngdh1mgjg7dbldmgzvoiotccjddlimf9h31dn1u' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpx2_';
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
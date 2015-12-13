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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blue_leopard');

/** MySQL database username */
define('DB_USER', 'skywindzz');

/** MySQL database password */
define('DB_PASSWORD', 'sendou!0!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.-8q67B@rDhRt.LRW);g6GD)@d2H[f$Wi3nvfR);k8-#>3}~#i+zAM@R:HA?Me`U');
define('SECURE_AUTH_KEY',  ',SKWqyk4~K&}O7Nw2h,ka3<Jg{v+Xh,[P$u4-v0rrtzL7,{,xb_H^3j>uGN,mMk0');
define('LOGGED_IN_KEY',    't&vyBVN}j3g40JZ~4wmn|wKGotuw[H*I!qC)lceYJ~Gu_|<Y@_VaE:(M`ZCG Z*|');
define('NONCE_KEY',        'hI#&Mp2v,Y0yf:eDsGhq(G|c30:oa:^T$x7j-2lEWY6PW)D?0*~4s<o-|jWpDi/f');
define('AUTH_SALT',        'Q4e1`?O.6Gr.?[B%B e!s*soRnV:NBTkLP#e@H[A_Wxu_:.2sQk@Jmqe-8 bJ^4F');
define('SECURE_AUTH_SALT', 'DJ5vY9k*b-?a]>ldMTsFuY-K6B2#BQ+D,[~5`3uTQHE DJ%F-#J|Ub[/e=>0-e W');
define('LOGGED_IN_SALT',   'xF#VgVu0;|*fmWx(K S@zT{bHT a%oRn++Hug$-CVn1KKokDOt(,wo{IQ~)DJY-b');
define('NONCE_SALT',       'x9fgtbLuy_{V@~@V-Ns.`]X 7Y KO].ltE%tHt*L-~lej)h0l1%ml,L45gjQ2-ZF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Root123!');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'i|!GlKaQ[10!E|+axSztbW1C^(L8^L|8K4[O3<=I#qd}7KM3!lB71@>zpv}HpTb,');
define('SECURE_AUTH_KEY',  'Y2zbie*2M3Te$I~ p&Im!hR(c!R4k~r:G1uxyi4xv[mvLVP9xFi7ZOpO!f.!z{4I');
define('LOGGED_IN_KEY',    'JXd(@78gJN0^FF.N1-xhklj[#AZCFyfM$[Y8_hntuI.lI>nTnuwS)Z@u}gbKoo=p');
define('NONCE_KEY',        'n}xz6R/.M^9ZNs%Mb[:47|kx6pu xyKh!=N :4{{l-CCZnOJYB0`bB%/YDzos[;G');
define('AUTH_SALT',        '6!FxB;c{}L$O,Dt-p%}q~Rk#[hk+?XP<xj`7K)I!1jx1p+;n;>OoYGMrywK*=->R');
define('SECURE_AUTH_SALT', 'SnD_sdrIH}14o]iM}XMGp:DF/!w8bH#-6nVvV~n,VT_N!H<G!]1[gZ6}rgv;olfk');
define('LOGGED_IN_SALT',   '_4>%@$$sy/kBh KO44y,4@`m>!@A19IFKgy,~]+&-s<N5PbW9,(_v}krPq~~f/sE');
define('NONCE_SALT',       '(K?SAEO,OJo)d4@BK4MTzyac?fsRtj=XG-JvRBvYt51G YZO1<81R?t!|4E D8~X');

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

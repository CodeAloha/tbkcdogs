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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'd7cba88b9fd17c390c5df2fd6ba6e09e97c791a35cd60d4b');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'd#y4T.f`Q/7.L`?rBV0a1xTcB`Y5M5xk|eX%A?kLaz~!`Wg|LV;P> 9x=:<B~]km');
define('SECURE_AUTH_KEY',  'W^MpLh;4s@X08#In3^Py0p_vFct1kyeBy92RhNjjHH9u}L]:,|$8S,XqmXQIWt}e');
define('LOGGED_IN_KEY',    '2 +uOa:5wEoksml>6k1YD)vbPLLy<oKm+Oj_yLE7gAAY^Jc<E,U7WiuQ?*f=5[sW');
define('NONCE_KEY',        'Lk694j>&PSUfp#kRwisfA5&MP#G?*u#s;h%CfFA]xK.Bp%.9oIAT$9=Ybn_[$%u*');
define('AUTH_SALT',        'Zr!ApfJI6s=V,M0~xTBU=.D(MC=zI$9Pnak:F2FwBkd3tC*IjNh`:|h+-uFyGrWe');
define('SECURE_AUTH_SALT', '4:ng,M~[$.ocy?:kZQEvUP9AuzH=]e2v2^} ?V,!vEb5F)K|~k/5_K5<M84EPK^h');
define('LOGGED_IN_SALT',   'fU@we:WS*V_?J.-zysD?s*r_K5z-_~Ha: G*btMJ048@js6t3[ <?1K&KrN4_Gnx');
define('NONCE_SALT',       '_ Xb=]WhozBOd`]t.0bL,Y4j|Q,CF>b)BEcrcg@9=j!&u|TlA C,wAF92`JB&q$K');

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

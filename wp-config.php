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
define('DB_NAME', 'songblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_HOME', 'http://localhost:8888' );
define( 'WP_SITEURL', 'http://localhost:8888' );

/** Development Environment */
define('WP_ENV', 'development');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'VrX?0<Lt0NU|TC]GQP;a7+|7^[R|2d7AEKVwN!:H*Fp0*m.`a-Tgo-$jgc*S<IsA');
 define('SECURE_AUTH_KEY',  '7p5U|L5ECqpSS~FZD(I)El;nQy3@+bt|b:N>tggxx;6`q%-k/5~]jup(*F6-(7=l');
 define('LOGGED_IN_KEY',    'e5}BX;1WGL;dJ5[YJ#smPEV+HuXYHMr7s,|-9wIVw;u0kdq-->+(zCIBNA6PW]OG');
 define('NONCE_KEY',        '*Val<!ca632V<+,@>g%o{o}e@?+u*$]D9-6>LBy9~4F{<cMergn`<kuKq=aa#s72');
 define('AUTH_SALT',        '[{)n7O#NiPB{5;{b#~&-MvEGLi-JF7k&b<M;b{j?.?nTQ0;y~&O(sIo*~e.4xels');
 define('SECURE_AUTH_SALT', 'GL|<`<c&W!kD=_V3iKg[G$3.elSUF-+BMfnjwrvdyYVGV&eL8[hn*+!Fgq}^p.]R');
 define('LOGGED_IN_SALT',   'k)t`62_V9z^&o{ qs*nYTku@L75H`G]# GJ7a2+VH(}}Na|K+_&YV%47>LIK75Zk');
 define('NONCE_SALT',       '+3%ds%|V+:ilKE]N2G!OK=pu8OIv&H!V.I=([ER:h]1AS:dw^zDX|OIa:v gEPR]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz25_';

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

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

define('WP_DEFAULT_THEME', 'KalistosiMagazine');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');
/** MySQL database username */
define('DB_USER', '');
/** MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('ENVIRONMENT', 'dev');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sU$*h8r61xMdk9m.>BZYvwx2}UFw=;Yk>%V-)-TnkwU7nN5;#uc3|Sy?n*~z3 cA');
define('SECURE_AUTH_KEY',  'xG.|o|je^>.t_Z`BVDJobDIq/N+f%.bFWrj.bI0Z<]2^nN+,t%GR#Kq;3e{n<WQd');
define('LOGGED_IN_KEY',    'RK/_}YFp||jJWN$qWT[ifqv1hj3@BMD/Cg-J&EJfJ6Sj,dfK_F!bd<%$v+IFHDY0');
define('NONCE_KEY',        '-bQ]WZ8BSZwTBA(Oz<KS[vG/7]+2[]NYz,vd@o0LIn<xwuVk LU~Pkq/h8FJuwW@');
define('AUTH_SALT',        'hk.[$r+m.vI/8^D#I)v$uQX &H#g(+ZL=-:*cyJAh=.GX8oq6s>l<Sa6[o.}FO`S');
define('SECURE_AUTH_SALT', 'oA37Uj[C*y[q+8Vfl[;v5X@j}8dBM4[3neL=%Gy$[Q?AM$u/acwFD.>6}$2;lW@i');
define('LOGGED_IN_SALT',   'I6yM+!D&pDSi27xjJ7B/9k$UXeprH+;bHQulkPL]AF%N!twRRXEP+TqEPs~q|D{`');
define('NONCE_SALT',       'eMfb[S}T0bKQV?7@v;kSL634-F19$Q~{SYf>Y}+`P[4*YCeY(}8I&UfU-&^7`*b,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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

// logic for root domain
define('ROOT_DOMAIN',str_ireplace('www.','',$_SERVER['HTTP_HOST']));

$uselocaldb = true;
if ($uselocaldb) {
    /** MySQL database username */
    define('DB_USER', 'root');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'GlenmoreInvestments');
    define('DB_PASSWORD', '12345678');

} else {
    /** MySQL database username */
    define('DB_USER', 'dbusr');
    /** MySQL hostname */
    define('DB_HOST', '192.168.210.62');
    /** The name of the database for WordPress */
    define('DB_NAME', 'unoProd');
    define('DB_PASSWORD', '3evqn1eC7Nol');
}

define( 'WP_MEMORY_LIMIT', '96M' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if ($_SERVER['HTTP_HOST'] == 'www.glenmorecapital.com' || $_SERVER['HTTP_HOST'] == 'www.glenmorecapital.eu' || $_SERVER['HTTP_HOST'] == 'www.glenmorecapital.net') {
    define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);   
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$by-[mQm-9>NEpfLeyKrR;D3/P]7v&O_]|Q oyO+jZ+O7g1F57-?*)$r|^b9nUhs');
define('SECURE_AUTH_KEY',  'bbe1@bXj&v|#aU=1gYu+TY^~B038K(O-5}mrGmY<vlos!.M2kA)sIx*Jq^A+$gFD');
define('LOGGED_IN_KEY',    'Z#$Dp#Y*$Apzz3!mW}+o/2|jcn;.aeX5@Vho%;karn{S|Td=bJz+1/!=C`$Bb-&{');
define('NONCE_KEY',        'eENj5J-=Qt~D,7Ome=$#%uo*a`d#o2{#Eo[a):Q%w]6Xl{I)p7~25Hx@<dRZ|je+');
define('AUTH_SALT',        'E{tKs*=4-a5<ABNd`u[{VJXq+:>Mp]t!&V8 ?~&lkKjh{$VS|gB+ +?LwWP@L=2g');
define('SECURE_AUTH_SALT', 'oZmw3*Y>Bf+R7kAbxTs]V51Mvh7m!%c_DX11u*<~6TT27*O1d>X;27~S+zJW,TVo');
define('LOGGED_IN_SALT',   '!o TKpD5ee,?OMY{jdHHr>N_Vj-9K},AsLl+#4bOkS<9:h6<)>>c(d+8mYP/a b7');
define('NONCE_SALT',       'Ec!M6>^$0Q@SM~]c<*a+5`+mlD$C?fpA+WEZh`p,Em9E{:<)qC?DJ}EK-.{[|jM=');

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

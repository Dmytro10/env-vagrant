<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eqblackrock');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '64M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


global $local_env;
$local_env = false;
define('LOCAL_ENV', false);
if(!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'devel.eqblackrock.com'){
    define('LOCAL_ENV', true);
    $local_env = true;
}

define('AUTH_KEY',         '7xrdZ<>`MQu.eG~[.x?LlT(jZA[Ljl@9nAoYdhp7^-tpjZg/MNL++Icx!F,ctQf5');
define('SECURE_AUTH_KEY',  'Gm9M1!A.(<;z]fVO/ 4>WV*oL0;z+!!EMKv`I)TW(Jz2THCFR@zevE82|XxDuns5');
define('LOGGED_IN_KEY',    'w1J]eaN~OYp|}dCe: bc5ve=|,R fr#v*&+sqkHFG$&7Q+k`c@ds2DCj@*w!Z)-F');
define('NONCE_KEY',        'Vh|HG]<=GY~ e.]cy9JulLu07QS/} 6PH&;Az0cQn9yFQ/^*ILvz].rY;`x+mV:J');
define('AUTH_SALT',        '!jZ<96W]Ic?Z2wB;SjQu898&_KyMq-ja$Ug9CrCY%!@cLYGR=Z->(a~i4X>V/GBN');
define('SECURE_AUTH_SALT', 't>+b=HKdw+2Dru[:-nVLweT$^;+K]xk_`%Ph< gbU#v`1*zZLG+XT[0MGD;K+gEd');
define('LOGGED_IN_SALT',   'X{J#5n9]D+m,F_9q1Ldp _*z,RH2beA#eaYQ*L2(Bsvz$a1vo_Vn838V41z-bY!I');
define('NONCE_SALT',       'HE1M;oyv;Z/[W/)-Hl-P$5q <g|:H}ytQnGA>Fs/4vxa{, $_o|-_;.e!RIuu @4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

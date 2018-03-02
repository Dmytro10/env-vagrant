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
define('DB_NAME', 'RoyalCapitalPro');

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

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R35Xu#)JR;hgkt{B+b}2#V6r:H}|:BA]G5!Gj[]R+@L-3Crl[Z_LYPbV/Io[7=Ym');
define('SECURE_AUTH_KEY',  ' *Y4!jXjo4,[[l8xu9jORS2bXb;||W*h(2iC}9(_m=>cj@8rjPB,AlZ*KIgQ,o;[');
define('LOGGED_IN_KEY',    '!>n]l=a=*sUc6xHPWL0LM7wkSSNvL=E|d/hlK= $M$l+B9g?#jNlO?WKQ+,3rkPp');
define('NONCE_KEY',        'JfyraN0%S-<Qfhb.N~QdXToSDYOIZSA@Ds128f-u[X#WQV@2i-cUuI~<};!-u+g.');
define('AUTH_SALT',        'B3lqy`HrSa1eu34DUxZI.uXY4g2*kbmLK%~srO$*euJDkW*!.NB*&uEmC@ix$Mq]');
define('SECURE_AUTH_SALT', 'c%[KJAfJL>&hkT8+Qy|>a(re~$j//u|DxaQ1);}[1huK)_1~+!)dk_by-wT;r>+W');
define('LOGGED_IN_SALT',   'q-7y u1:8|~cx1LBT/r84RT3T#sAaJ+;>+<uxf(F!D7Se$G;UzBP~~4opKOoD8b,');
define('NONCE_SALT',       'hrR[{?<%4+;@qD7c4S$i7OSwF+qp+8qr0_{95eXhqKs&A95bH=8PHjMDOpSZXN4@');


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

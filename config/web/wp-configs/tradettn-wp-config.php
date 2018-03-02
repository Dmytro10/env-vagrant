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
    define('DB_NAME', 'TitanTTN');
    /** MySQL database username */
    define('DB_USER', 'root');
    /** MySQL database password */
    define('DB_PASSWORD', '12345678');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+o(7b!A-h&(YtF5.y@@>>Hp$XMuKE{[O!=+7QX7H~[yPbKB80~JKwCWYv+~@g5O%');
define('SECURE_AUTH_KEY',  'X4,^-|?k_%t2T$98I|hd0h0nVdi?JE=-|%d|K-O;F?FMe@8v|A0t=W1jJccOw7S[');
define('LOGGED_IN_KEY',    '|1q:%yb?xgw6YZr7a1&HFmS_D?5a5@vUyJD-G;,;]<{H#G(5[|T>(F9hAk+gTFg6');
define('NONCE_KEY',        '}TOOTc}~NGh@snrla4Q13j|E7!~oBbWU7wqwD@ZD||];-R|o2+|/;<TiTTq>h+NI');
define('AUTH_SALT',        ' 86FFn`Q%/UdE x@ RU5o5}T[]+o&4etP1 =!Po|-2-ewAG}fOg-r^gNIc;rOcWC');
define('SECURE_AUTH_SALT', '^9m#Q4God.p^!Wi2[*|NL91(>h2^jI)DuWt;[]Q18Z,Al*c10+1HAR@+Ag+(Nfw6');
define('LOGGED_IN_SALT',   ',7HS]=|f8)Df|}2N|>._5oa!*-NRp`/@R(Gn++Go8.C+,t2V-iS9wVJ1w8-g/}at');
define('NONCE_SALT',       '#]&vMCi8<Rc;sa(f5-{L7|3bb^9ZD$;&Wb]*{7|HS~ZIKw?Ndocz%)y-ovGbg/vU');

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

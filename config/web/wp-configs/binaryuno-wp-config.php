<?php

include('whitelist.php');

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

// ** MySQL settings - You can get this info from your web host ** //


$uselocaldb = true;
if ($uselocaldb) {
    /** MySQL database username */
    define('DB_USER', 'root');

    /** MySQL hostname */
    define('DB_HOST', 'localhost');

    
    define('DB_NAME', 'BinaryUno');

} else {
    /** MySQL database username */
    define('DB_USER', 'dbusr');

    /** MySQL hostname */
    define('DB_HOST', '192.168.210.62');

    /** The name of the database for WordPress */
    define('DB_NAME', 'unoProd');
}

define( 'WP_MEMORY_LIMIT', '96M' );

/** MySQL database password */
define('DB_PASSWORD', '12345678');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


global $active_domain;
$domains = array(
  array(
    'domain' => 'www.binaryuno.com',
    'siteurl' => 'http://www.binaryuno.com',
    'home' => 'http://www.binaryuno.com',
    'blogname' => 'BinaryUno'
  ),
  array(
    'domain' => 'secured.binaryuno.com',
    'siteurl' => 'http://secured.binaryuno.com',
    'home' => 'http://secured.binaryuno.com',
    'blogname' => 'BinaryUno'
  ),
  array(
    //This domain simply runs a landing page - /ar/cmpn/iphone-6-ar/
    'domain' => 'www.5bookstore.com',
    'siteurl' => 'http://www.5bookstore.com',
    'home' => 'http://www.5bookstore.com',
    'blogname' => 'Millionair\'s Prodigy',
    'limit_to' => 'specific-lp', //possible options: specific-lp, all-lps, no-limit
    'allowed_lps' => array('iphone6-ar'), //insert the LP (Template) Slug
    'default_lp' => 'iphone6-ar' //which LP should load on the "homepage".
  )
);

// if ($_SERVER['HTTP_HOST'] == 'www.binaryuno.com' || $_SERVER['HTTP_HOST'] == 'www.binaryuno.eu' || $_SERVER['HTTP_HOST'] == 'www.binaryuno.net') {
//     define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
//     define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);   
// }

foreach ($domains as $domain => $domainData) {
        if ($_SERVER['HTTP_HOST'] == $domainData['domain']) {
         $protocol = "http://";
         if ($_SERVER['HTTP_HOST']=='www.binaryuno.com') {
          //force ssl
          $protocol = "https://";
         }

            define('WP_SITEURL',$protocol . $_SERVER['HTTP_HOST']);
            define('WP_HOME',$protocol . $_SERVER['HTTP_HOST']); 
            $active_domain = $domainData;
        } 
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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

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

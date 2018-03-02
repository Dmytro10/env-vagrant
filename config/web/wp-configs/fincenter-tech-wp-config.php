<?php

#include('whitelist.php');

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
/** The name of the database for WordPress */
define('DB_NAME', 'fincenter_tech');

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

global $active_domain;
//$domains - required attributes are 'domain','siteurl','home','blogname','primary'
//blogname is basically the site title, also appearing in the browser page titles.
//primary will be used as default base for robot_domain url and for support email url
$domains = array(
  array(
    'domain' => 'devel.fincenter.tech',
    'siteurl' => 'http://devel.fincenter.tech',
    'home' => 'http://devel.fincenter.tech',
    'blogname' => 'devel.fincenter.tech',
    'primary' => 'devel.fincenter.tech',
    'robot_domain' => 'devel.fincenter.tech'
  ),
  array(
    'domain' => 'www.brxfinance.com',
    'siteurl' => 'http://www.brxfinance.com',
    'home' => 'http://www.brxfinance.com',
    'blogname' => 'www.brxfinance.com',
    'primary' => 'www.brxfinance.com',
    'robot_domain' => 'www.brxfinance.com'
  ),
  array(
    'domain' => 'brxfinance.com',
    'siteurl' => 'http://brxfinance.com',
    'home' => 'http://brxfinance.com',
    'blogname' => 'brxfinance.com',
    'primary' => 'brxfinance.com',
    'robot_domain' => 'www.brxfinance.com'
  ),
  array(
    'domain' => 'alpha-promotions.co',
    'siteurl' => 'http://alpha-promotions.co',
    'home' => 'http://alpha-promotions.co',
    'blogname' => 'alpha-promotions.co',
    'primary' => 'alpha-promotions.co',
    'robot_domain' => 'www.alpha-promotions.co'
  ),
 array(
    'domain' => 'www.dexiacapital.com',
    'siteurl' => 'http://www.dexiacapital.com',
    'home' => 'http://www.dexiacapital.com',
    'blogname' => 'Dexia Capital',
    'primary' => 'dexiacapital.com'
  ), 

);


/** IMPORATNT: Make sure to Create a Brand Images Folder as well inside /images/ 
All functions regarding brands are located in inclides/brands-func.php
2.12.2015 - R.L - removed 1800 as a specified brand. It should be the default anyways.
**/

$brands = array (
	'msco' => array (
			'lp_name_in_crm' => '1800Option-lp-millionaresociety',
			'support_email' => 'support@millionairesociety.co',
			'name' => 'Millionaire Society',
			'multilanguage' => false,
		),
	'mscl' => array (
      'lp_name_in_crm' => '',
      //'lp_names_in_crm' => array(),
      'support_email' => 'support@1800option.com',
      'name' => 'Millionaire Club',
      'multilanguage' => false,
      //'domain' => ''
    ),
	'Wallstreet' => array (
			'lp_name_in_crm' => '1800Option-lp-WallStreet',
			'support_email' => 'support@1800option.com',
			'name' => 'Wolf on Wall Street',
			'multilanguage' => false,
		),
	'germanbinaryrobot' => array(
			'lp_name_in_crm' => 'German Binary Robot (Members Page)',
			'support_email' => 'support@germanbinaryrobot.co',
			'name' => 'German Binary Robot',
			'multilanguage' => true,
			'name-en' => 'German Binary Robot',
			'name-ru' => 'Немецкий Бинарный Робот',
			//'domain' => 'www.germanbinarybot.net',
			//'robotdomain' => 'app.germanbinarybot.net',
		),
  	'algoprime' => array(
      'lp_name_in_crm' => '',
      'support_email' => 'support@algoprime.co',
      'name' => 'AlgoPrime',
      'multilanguage' => false,
    ),
    'algowealth' => array(
      'lp_name_in_crm' => '',
      'support_email' => 'support@algowealth.co',
      'name' => 'AlgoWealth',
      'multilanguage' => false,
    ),
    'sm-ru' => array(
      'lp_name_in_crm' => 'Secret Millionaire RU',
      'support_email' => 'support@secret-millionaire.co',
      'name' => 'Secret Millionaire',
      'multilanguage' => true,
      'name-en' => 'Secret Millionaire',
      'name-ru' => 'Подпольный миллионер',
   ),
  'golddigger' => array(
      'lp_name_in_crm' => 'Gold Digger',
      'support_email' => 'support@gold-digger.tech',
      'name' => 'Gold Digger',
      'multilanguage' => false,
    ),
    'fastcash' => array(
      'lp_name_in_crm' => 'Fast Cash Signup1',
      'support_email' => 'support@fast-cash.club',
      'name' => 'Fast Cash',
      'multilanguage' => false,
    ),
    'aussie-method' => array(
      'lp_name_in_crm' => 'The Aussie Method',
      'support_email' => 'Jake@aussiemethod.club',
      'name' => 'The Aussie Method',
      'multilanguage' => false,
    ),
    'dow-focus' => array(
      'lp_name_in_crm' => 'Dow Focus Group',
      'support_email' => 'support@dow-focusgroup.online',
      'name' => 'DowJones Focus Group',
      'multilanguage' => false,
    ), 
    '1800option' => array (
     'support_email' => 'support@1800option.com',
     'name' => '1800option',
     'multilanguage' => true,
      'name-en' => '1800option',
      'name-ru' => '1800option',
   ),
   'virtnext' => array(
      'lp_name_in_crm' => 'virtnext',
      'support_email' => 'support@1800option.com',
      'name' => 'Virtnext',
      'multilanguage' => false,
    ),
    
);


foreach ($domains as $domain => $domainData) {
		if ($_SERVER['HTTP_HOST'] == $domainData['domain']) {
			  define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
  			define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);   
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
define('AUTH_KEY',         '$QdPBfTB+<HdX.-Fd55FCE}2iE_~q94p!GQ+=%&S9}AL/[InC<$6T]bEamg5(UWo');
define('SECURE_AUTH_KEY',  '>J|a-i+kUC?Q^ Vd=>/p%9!W+E*)62-~c.CDG: nyA:3OzAFcX}/lzmJ,ZCJU[Ii');
define('LOGGED_IN_KEY',    '/9xS+5aK$u-/-8b&bPU*+LVUhw,fC8V=B+)r6tiNkuiN~CKC5M+Od!jtpg|JovNA');
define('NONCE_KEY',        'r8tvOO|[A!_k!%w}(+`Z#S=uLx+GGRtZB/s+CKvO=O[gqYtS{z~#-h^~>^ah]C?o');
define('AUTH_SALT',        'yBn~S4&E;t:C._Cly+$hSMA$R.-C^BRPt<D |(0?U~nnp.7QqK;c=r]-GMCY4aQO');
define('SECURE_AUTH_SALT', 'ubH}>j6B!>8,E-Hpn4iIvy~O*|R-/~?pa{wq91j6}p-Q(mouQ0|n)7PH8~=k f;g');
define('LOGGED_IN_SALT',   '2 T19G ?o5p+,mI+,?pPH2yKSYRAZ@`7CmhK*VvJ*KbigS[)];On:$l_HmaGtBo3');
define('NONCE_SALT',       '/LE6`s8_k)+{3,*@0L-*/o+T(dxA0zQ;wvg/;Qz}$vk+$ugU+N|-imlIY{v7[A{6');

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




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
define('DB_NAME', 'wpTeeShirts001');

/** MySQL database username */
define('DB_USER', 'wpUser001');

/** MySQL database password */
define('DB_PASSWORD', 'Abc?123^Xyz');

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

define('AUTH_KEY',         't<.MrQs1z7BR1 jF~!zHle[r~#Yqq4sF:zM.Q1kLlhn^G=GXhZ[p!b;uk,].|#DZ');
define('SECURE_AUTH_KEY',  '}^k#a-EpZzWhGcGs+iDKj&9cSucTu2~>Z&.c-I3G[maa7Q*.e]:|VmLRZ-pNXUuK');
define('LOGGED_IN_KEY',    '#6.lTAm|3MmYi!>nEW%AbdZ7kQHwJq}+hj,c&cB+s5O8OS!e=}`Q`D-@3BaD>_+u');
define('NONCE_KEY',        '=Er<0(CnUsdj@)s^RjGed:|%o3u:pg.,40+?U?cPHFgt2{_.If^:.r,x~Jm><Q22');
define('AUTH_SALT',        'phkK: ~:{c#eN{y^<bUcA@eP1`.|hlB{~S,0T^gHPvsGI{C!fh7vC7,_k:)wY{n-');
define('SECURE_AUTH_SALT', '^bU@+1lR}>yp.bK]@+|lABVeC&MA-k_w!viQwOn~&a8l8yxFpQ@nQ.O0jO@hY?tB');
define('LOGGED_IN_SALT',   'Z-y)ZuaE-Q5tR$9$:[>-HCOil|+s>@KuK.+Hu<Op~Kh(G2n|QXxt?9k9h*Z9I7bS');
define('NONCE_SALT',       'x:)g7GpOE86fGFAg$ZHXZLr%$X4?M5*3UO)mP`$}~H{-7T3 }:&[KCW#+5-w]9[[');
/**#@-*/

/*define('FS_METHOD', 'ftpext');*/
/*define('FTP_USER', 'username');*/
/*define('FTP_PASS', 'password');*/
/*define('FTP_HOST', 'ftp.example.org');*/
define('FTP_SSL', true);

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Qt0RxNd4_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

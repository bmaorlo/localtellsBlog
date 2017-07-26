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
if(file_exists( ABSPATH . 'wp-config-local.php')){
    require_once(ABSPATH . 'wp-config-local.php');
    return;
}


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'localtel123123lsblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'XXXX');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ')S`,xEV#9q`AFglv[+NDjVRl.v?*);y}HEfMzxR}q]Q_Wl1ird3_tU(r-(zX`SX>');
define('SECURE_AUTH_KEY',  '&w+^{_wJ[*lJ2:&X!-?@64Hs|Gp5Fd!v2._t0H;o,mJ3X4cei-:E1ZxoH@;{$P,*');
define('LOGGED_IN_KEY',    'JV1n`xP#pw6<p;.d$e*=o+Fi~zN+Fb)I9M2;93)fh$[8^96p*% N.E+_~Z[HI7t?');
define('NONCE_KEY',        'X!TJQ./c8/Y:#i<%<;# O$4jB?-60?eT9.2XS3MeA4FHwW#_imPkEt%w>3p?{3Q!');
define('AUTH_SALT',        '8n*VL~,WmM3.w`nB}ng/h8jkLv[%f~<)fDYv#l3o-6:LS:TQg~^=oSmXT&Y@LRHh');
define('SECURE_AUTH_SALT', 'HSV{B]Iuwd * Bz9gU-cB;  u{+Bdc=;;6C1%Vf1:I|A79<q*jqK~@fn=A|DoTyA');
define('LOGGED_IN_SALT',   '9W2$Wl*k(;QpPAIn|.(>0|Mi=H;3|u>fT1n60w!0AKIH(d#i:^a=iOqNo;0,qa2B');
define('NONCE_SALT',       'qgf#Cu5URydqwl?=A??jjw*S~OFh)KABr4]YZ~*uPwl+0g vKl`z! +NISupfL#0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

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

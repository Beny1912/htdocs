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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');


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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[UL:4T_eiW=D?fC{C>$X ~Q>0M6;MAh<+m$EoNn1%tMHloxT{g9yR7|yj8cF(ZPO');

define('SECURE_AUTH_KEY',  'GGEZ`TK|=8_orHFy/F#G+0@g%DZEax`SLd!kZ:[%BJe1K1KVm~+!qOcs&}A0P8di');

define('LOGGED_IN_KEY',    '+xDp,J%XrtF-ddLBKYY,O5+X/|JCH,^M__NSk(0La|{Y0#m{QE0Xd.cgnoknY}fL');

define('NONCE_KEY',        'f/RL-C.=.gY+E/L/N+S-X2#v|B<%oo1TqWnimPJZxg[A$02J&Y67B<,K+WhSn9zW');

define('AUTH_SALT',        '6lep}aq>5Qs|67_3!V.%tX;NrtI.7tnZ$&N-EH1,(l,E]Df.uu +(DB$t#Z)3@30');

define('SECURE_AUTH_SALT', 'v_>A;UAh9F$z]zwaC5Puh}iG)/->CXNYS-knm2@=9Hq 5y)p4Eg9q9FB)j=wwa5/');

define('LOGGED_IN_SALT',   ':&M}CCSFB,<-~O/5D*d-H>2.KS)+=k$G6-;ZrQZZ;WJdW;d ,=Rf-tCgT)y m+>|');

define('NONCE_SALT',       '=#|YwZ;){N1[UF1-`|Lenuxjz-jzI}kyLB~&`{8QAHM]VX+-{-1.`J-m?zkB^z,H');


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
define('WPLANG', 'es_ES');

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

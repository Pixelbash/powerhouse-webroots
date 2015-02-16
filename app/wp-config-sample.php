<?php
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');
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
define('DB_NAME', 'wp_example');

/** MySQL database username */
define('DB_USER', 'admin_example');

/** MySQL database password */
define('DB_PASSWORD', 'example');

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

define('AUTH_KEY',         '!.+@Xz>{lNtB;)7.Y+07z,`fRqj4lrv6ZF >5dRn1(NtX2zm~YQb++AK1oK07mn[');
define('SECURE_AUTH_KEY',  '|6F?qyv o-1I$K3Q`e*~.A)edsSDHiYG-?I&HI%H:f^0!dlahD7vJO6CuL|)=0V$');
define('LOGGED_IN_KEY',    '0T*`PKsw~4P>uy/xDJ1q~%jo-0>4^~~@;Ed+ rTA]2AG10Kg[H`|M[2jSWag.d|&');
define('NONCE_KEY',        '-7~0/a;.k&H{IXT-[A@[2PDcoRCbk?@>8Lb#F<<=W)/K?@t~+@YL9{yy_70q0-jH');
define('AUTH_SALT',        'L6::,>}K,OC +Tv-uyV|yYtZZhTHo5z9h%kjeV#cbhHWDr.9h&SjQyxNvEQ1x5<P');
define('SECURE_AUTH_SALT', 'n!P$i.)^<EFB+>p&BJ]=$V+J4Z+Zfd{?X^nRO+Py`(<ikr-D&z/E_#y^C};=kIr6');
define('LOGGED_IN_SALT',   'c-nKVp+8smdz$5PICdPSiu7<b<Q]K2onRz@.1SXE:c)uu0-C8#D5,yi{2cUF`+h,');
define('NONCE_SALT',       'xrt79)gT^)KdP&&@#A8k98aD.7h+mWrkP7WcHoC_Je>^|n[<}GcjCzxUyH-{n]zq');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

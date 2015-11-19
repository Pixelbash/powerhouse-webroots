<?php
define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content');
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp');

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
define('DB_NAME', 'wp_powerhouse');

/** MySQL database username */
define('DB_USER', 'admin_powerhouse');

/** MySQL database password */
define('DB_PASSWORD', '_password_');

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

define('AUTH_KEY',         '+{^8>B{BqUo:0G(w<c2l~jA5s@z -|-ja=uDs_)S78#~e3X+ ~JXkGQq,unlzK+Z');
define('SECURE_AUTH_KEY',  '6b;?$O566q-he-v(<JIC+z#Kx2o-Uh}#%j,t#4c+Td@s#4L,aj=;g~1mf6T)]DYb');
define('LOGGED_IN_KEY',    'L{o-xf_8a+8$0Q)|i$|1bmWlP=F*,?@Vz8#k5(q9Cd3,@-X$NHjUM5#2h0Erhdco');
define('NONCE_KEY',        '*5.1BR,ya#LoX*HG^1=u`4-hE3JO08/OHqkOOA`1]f8sn)l|$UWj#&!lxW2FiJ#P');
define('AUTH_SALT',        'G+AC=V&bWmM^Emuty12^%%>=7d])0O$OslmVM<I+StaF&R-(9S>/-<=.K5fbLSo7');
define('SECURE_AUTH_SALT', '1@I;fyAm--64))~tt.WZnT)|L[_~% 8-H>ZMOr}#/1/+4zC/VYIocg*18$J?6W9,');
define('LOGGED_IN_SALT',   ';VRtABl%PF)Sy.-Z}e7NTG qNYuR(|CRS+<5l(XbX+POhhZ%VR1ZzV(#ip|s@FX/');
define('NONCE_SALT',       '3BfTXDy]IgB&d.qswF=`RZ1.|?8/YaG4J&<6v_;%|Ew1?*:J_@X5hShj0xH,oYx4');

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

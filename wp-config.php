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
define('DB_NAME', 'wp_ejemplo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[N(ypenz5M%X($06}l9HOq/ArmF+pa}g2/~Bk!f4;K;hI$q.FCz>fyTR|daRWkF=');
define('SECURE_AUTH_KEY',  'qi^bCY>lrfstdaH,CE@z}&`OpRVEjcM0+8r^awDpADHAjmeo|RMzj~lXbd:c;S7W');
define('LOGGED_IN_KEY',    'e(Mv/:qI[xVcRN9jl#Gz<eXvzX65}2&S7 ;OE#{wlk%|2*;|JG-p;R Z;69Y1yAb');
define('NONCE_KEY',        '**Zftl<Sl(rwgJRqJ|5x#VY`t+ewF!W3qm/;$Z)<HMKs1w@1bkjhB6xen 2<``T8');
define('AUTH_SALT',        '>PR6BlFW)<hs[|f@J(P:wdi}_>`klKt?Rg.zg=HEn=u#lj(#qbzG/(_gOpop0;_!');
define('SECURE_AUTH_SALT', '-z@e,#tu35vkoi5d)^7a7P o]s+rMH[gF$-CIK?mM{(KPO/Gel8#-FG/VRbpP@bt');
define('LOGGED_IN_SALT',   'M_W.VDGA)L?a`i{WP da6D%fcoVGS%}>JP@_}QM^X(C^ken!m0yvfL=O(aE0y4ne');
define('NONCE_SALT',       '?qh1O]=y!I`#x@H6&TOqGD?)xH9SOdtl.lb=B?!_8RdUnyy@! Ym0)H{%nJRJ3~,');

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

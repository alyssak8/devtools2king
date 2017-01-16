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
define('DB_NAME', 'devtools2king');

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
define('AUTH_KEY',         '5+=yrpLj49WNU[(0_!X+H-mEhI7/(T-om+ Jwe_fn+g~v~TCknbMWloh`x}DUWbV');
define('SECURE_AUTH_KEY',  '?ws?PN~qUP}.FDUQ=D2&FgB2RO:ld144{:- aQ,P|^/)/v]8@*qyR3j&2.[4]..-');
define('LOGGED_IN_KEY',    '{A+}H8N9wlrFqOFMvE(k9JDjl}of9*yk^zWg.p$Udw|uRr`vvu!.e;^f<bI|4]7e');
define('NONCE_KEY',        'VHHq3`7@^OqR8=U>p2a5s07?p= uLeeG2,Dz5x{Q1BiaKth hqw#E}x`bM>< upg');
define('AUTH_SALT',        ';AN;LSoSlDx0Pv0Mp?py5C#J!GrC=<V%GYoV9|t>0-OV^xt Py.6=g*=TvRL_U#u');
define('SECURE_AUTH_SALT', 'E!rf;t_Vs}$lU/X.9@8PULCt;WQ8u!N8Pzq@W~n|M]z[m$C`nsGLB<}xD)A$ByGl');
define('LOGGED_IN_SALT',   'RRwY~tQ@O=lB|p1kAPxn]5ktl`Z):+kpJZMJ3k?!?1-bZ |cAhur^|& x$GO+mm(');
define('NONCE_SALT',       '}QIvHI^jsl^59`6,^v5z/Wa}s|H=Tw;0QD*zyB$gOaX#wiT<!J6lBn;HbM3)[1;.');

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

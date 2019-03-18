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
define('DB_NAME', 'real_home');

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
define('AUTH_KEY',         'QTKU }^)Li0Ab:bx_`Tr3AzvfXm6:AUa9hbKwcyumCpa_Onu30ID~Mr5=iX1Kd?%');
define('SECURE_AUTH_KEY',  'lHGIE.<8|9qa;@wh79qD<#=!*$~h.</xv=-a27zJ]^hIhkxO H~p/McD2IJMIBV.');
define('LOGGED_IN_KEY',    '^XYKXct~?a;ye}+T%ch,v1V;@m&ijxWw?@irKAiC-q/x~Cd2~N`p1-a*xU=l`}S[');
define('NONCE_KEY',        'GtV/sg.Kq(h.Bk*8kg@}z&8{^j40}%09Wm1(w;|>bm{CB(H;3h3WVNe?KRU1Z~*J');
define('AUTH_SALT',        ' =}sQeDO6j=CC0.=UlI:OMIb-^7NkKyce?rqtC5,E1zq S.B!$+5|o| (I,6+Ab ');
define('SECURE_AUTH_SALT', 'YnQKn+4JzWLOjo.ICLLs;]BS:#Ax<r*2BOG*D}N;QQa]Rr*M`<lBRm!%q$+]z<o3');
define('LOGGED_IN_SALT',   'gOQ8zEzeCeR6|6Rdrr]mD{DqKoO71*1Xe]z02S!T.zy_0qp{on $[Ba]#thSv-*p');
define('NONCE_SALT',       '#:*wvh_gvP&wnU9Q`f2K/gTiYz7WCpszBU$6,$k*rN zT)#WuwI|]daSXxZ-&m3k');

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

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
define('DB_NAME', 'management');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nokia8210');

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
define('AUTH_KEY',         ',quIgQV[^qpx&r:>=+BvBaIIvNMcw2}PP}I<HLyukc~N5bpd[Zd*3JsXWM) HOpf');
define('SECURE_AUTH_KEY',  '8nMY7*?!YOlNd%%?zq$RFaa#A,3ESftvV^=8T|&`_GUX f!.W$qy4Ff<fjfQkc(j');
define('LOGGED_IN_KEY',    'D%q)0N(+fpvqRfb hRNH-zTZbzRSRvKOY(Xf.;{>g7.&hOJX:@`i4Y}ATS=X[)&>');
define('NONCE_KEY',        'kLlr|FwRi%KtrVEb6zDEv5h*`#DW[gsN;GpU%]0`6Yfb[c/31gs.v_Jy;^PTDw.S');
define('AUTH_SALT',        '%NsI(,NuL=B,h|wmMib[2mpOr9{_xGX}2Af^u3eO&]|f7M/8nVf{{LEK(<F`R<}y');
define('SECURE_AUTH_SALT', 'x86g_s*8g7c4U[!GZw+g7bQlt g$!dmAG_ahL7aqgf+;uy,&e_yOlP[ifn_E`+jJ');
define('LOGGED_IN_SALT',   'A3` dulauYfaC5^ 9.xx>k4d*H9?af_8J(J:U%II<M,. d?wC#SrUg8/;+y:[peV');
define('NONCE_SALT',       'f:|p=ZWe@kL~E3l}Exx83&2UGLnjT;E?gW=a]eV|]suU:[sa~K.IR cw$phf%.`j');

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

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
define('DB_NAME', 'celestini');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_SViW /[!7V*Sl/;a2A.QyQY#H%2^`u|d,39L[m@M*! fEoYcFxO<-^T1KiE2WSA');
define('SECURE_AUTH_KEY',  '17=;X,keW_d.A_9;l*gD&ZHW U2w>tj`;W0ELw[5.VD^YcQ{< C;I=}72nny4EX!');
define('LOGGED_IN_KEY',    '9P&?Ug;e)4YgD-kf.fG9$Yt5+g3) T 2:+):;S`24y,~j)>@p1nm^|X+d,P5Qoo^');
define('NONCE_KEY',        ']u#`0uGXAUn<zSVb[g|Sqke7g7=u_Oyo0Ygyd 96fpCq<KhT?O>R8y$+TY!A+s!T');
define('AUTH_SALT',        'A%AIr8MG@s^n_.nQy:]250@GrBZWGDni?n|xj0]l@knY|Vh~h<H|YU-FyOo@7$+y');
define('SECURE_AUTH_SALT', 'u[nb>xa0s?,[N*<XR]EiVNO%4Dn/;A-*gI^{hWN5W!``?383ykMFS6,:uUBBI!3|');
define('LOGGED_IN_SALT',   './8/QmNAi1L4!ANHE29}PGu5#%HWvO^{@(!m?E5eUl~?TLpw|kw[p#|9wTzq;nZd');
define('NONCE_SALT',       'YKV9ZLW1[q, :>w(x(6lHZfZgnpH,6B%AG/5?b%Zw;04G|6T|0@,<ho770KGeIvp');

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

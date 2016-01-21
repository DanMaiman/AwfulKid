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
define('DB_NAME', 'awfulkid');

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
define('AUTH_KEY',         'Wcl_+++q7|/53}5`$7bcYy/&95Y-`1 kr.fI>#Io{),bm4:k-cOqQ`n1kL+@(Ff#');
define('SECURE_AUTH_KEY',  ':#b/U|uEHK;)L5)x+yU-;Fv}->E6)NY;sTLi[YT1#*Ms~B*%y/4bp1U2f_.fL.k*');
define('LOGGED_IN_KEY',    'qMQK3l^a-g{xp4UVL [r0]Ck*]NmZw`|kcvmb<bcV+{-Kbg h1Wj ?|Oj+3`lB5|');
define('NONCE_KEY',        '!z=j[T1[O!/$$}y{<m:,u]We7EX_~%rGEj:_|i>|z=T>o{o;CC~gt+L+f+]rFp/7');
define('AUTH_SALT',        '{*x:aN}||@}sX<J^Yl%:q+4fV:/fE/A7P_^)V)K$!rI1-TP6dfJ%]*SCrIs3<,yJ');
define('SECURE_AUTH_SALT', 'ThEa>of]*(1paloQ|%TsROdZoP[+G0-E$uF/}PEzl-%]J4$yo]QDk^sYKt+@S>pm');
define('LOGGED_IN_SALT',   '/_J4t2]kI`.3nDmJbI&f0m1wrXjvDb;+a=%(NgRaEP# X[HK{%~%b>io.a4LG-hB');
define('NONCE_SALT',       '6e5#D~p(M]5STQ<,Uzn`e|/<-jsSxpCmc]:(4/Kh8*:+]E,v8O!}F+Xeo~}=K<Z0');

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

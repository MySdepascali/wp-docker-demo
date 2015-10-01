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
define('DB_NAME', 'site');

/** MySQL database username */
define('DB_USER', 'site');

/** MySQL database password */
define('DB_PASSWORD', 'site');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '^Rk:xp4HK;h@)<q__}$xg7Y{.5{_<1,Va1[92f2Z(0u-9xdn)s,p+~KNb>A_y>:+');
define('SECURE_AUTH_KEY',  'bv._6E8~@x1]vn`~glBSv_4q+*(3+m>*y}Q;<v-TE%Bw[zOV+Sn@mjqW53Py?I>C');
define('LOGGED_IN_KEY',    'oLz@4L9|R7P{v!S5n^)c>fLjxj;a?)iAE5*M2Irjmt(F-WNeC`_Aiwo%^K8ER$B|');
define('NONCE_KEY',        'FFKBk4f--WQN%(zp|G.hSLm/sM(r:Gl:}+Q$KLS2|r]/.l$`yU,fU~.1QTmw7i9`');
define('AUTH_SALT',        'HDmG+;{qC>6>EOTl_g|mNK?w-^#X*/WSq589n5EY/ILTt?}C$zyq:9G[t8Q^K>N<');
define('SECURE_AUTH_SALT', 'u0MUDy{]+ba|iF.MCaOktY:VB6B)Kqe21^m~U|+!9vMW9}^4X%+Nx-qhQ{/E8Nr:');
define('LOGGED_IN_SALT',   ')4a3?&t/|`HsB|n]+qE]=ZbZJ2x+UQ=D#ucS,rK:BJJ+uVcF|KU#*::+0I+|3+74');
define('NONCE_SALT',       '&6z$?G  Ls%qAqU0Z;`Gne^Py>3+!38=kEQMn^|quM+u+=Q|-!Yjv67Ah@:Y?uFB');

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

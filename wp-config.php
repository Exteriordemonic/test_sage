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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         '2lTx>i)2(tb3cX:t*-mZ,R0/_?l*uUA-J1H4v@YSIuz+6)v~q):0$b(ztdHgOH$F');
define('SECURE_AUTH_KEY',  'ZT1nq<|?/[W%gr*>EhElp!a^*+em:BJg`SF#dr?S`}Av-ekoQkX:SAnZ?)F=H-Sg');
define('LOGGED_IN_KEY',    '3Rmdo;tm<p^^O|S8s[-m6MRf3M-R{$p:h+N-w}~f^1%gNY[9Hl`fiVi/26SoAp~^');
define('NONCE_KEY',        'C.rOuXipt7Yqao.G+Y:v}7fN%%@2ULOwv|K@,P=+|Zc[M%Nv#XbUCo/Io -mP1lu');
define('AUTH_SALT',        'zlRKh$V87Ol:=b]$d<Ct,G|2C/^44]udo@`T$xLK%HzeHv~jvSZs$dto.4aZhqNe');
define('SECURE_AUTH_SALT', 'OkXWl thdQOpG)D#g_2<:}nnH:#1FZ#[*U`(8wBHL60h7K8Y/NyS_#eKAnpdwN?Z');
define('LOGGED_IN_SALT',   '> |bcS9$mHbP|[Qn%v6u*M^9w>fi}NjN=WRxoJ?VZ/HhE911{EK~jRrt4i:W<}b@');
define('NONCE_SALT',       '}jU!B%m;7z(ymGW7KL!DKuDOzrI!6r6ifxP{R4.Fbr>%/[AI`gXU=[H~p_IMkX?s');

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

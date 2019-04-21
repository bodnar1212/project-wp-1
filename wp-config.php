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
define('DB_NAME', 'transnistria');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sapfir1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ENu$WODiIo3OBB+L>Y)?$o[l9K0b.uY@A`nCuWz$TyU-|+_Es<mPU_5Y;@{R>u7f');
define('SECURE_AUTH_KEY',  '(*w<?FVip7>PAx,0}4T]D8Y<C4:tnXrIJm/&c^P9(Z_XkKInZKi7J`{^a?zqo:fk');
define('LOGGED_IN_KEY',    '!)|HX4b4elI`,UM @np</8A7TnI_%8=f`MFMnO02q_bJYMhtw rQcit}?+jZcBbi');
define('NONCE_KEY',        '+/&W{Q7La3|cO]dsvCgfv)^  v1r&BD=$0[n~__AU?~cGR8F<no40Ie;$k(L%jEA');
define('AUTH_SALT',        '9,,YxLwDD$Jr8`&if ^L`^rq9<Jt=NAU%Ga``7?4BuZ,PZ4/[jK($VmZL~oP9`co');
define('SECURE_AUTH_SALT', ',BdD7znJUpsa VPo*:pN<Rdw+|_23a}J_B?(6Q^:H*!GV{z]q)U?pRMiyaPLn(-]');
define('LOGGED_IN_SALT',   '&m lsmI,uNBEF(D9]0S-&yNn[nC{Q|~qaw$idT=CxJ~DA:OFyLjwO>[Ke<X6kx<e');
define('NONCE_SALT',       'k^kiZY#gN+9?1rF^)V?W^cS/!R^U@u{uv4S~~egc4sj{ >#53J=.Sdgi ?9 +)~r');

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

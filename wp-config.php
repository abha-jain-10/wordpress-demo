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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'aks@1234');

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
define('AUTH_KEY',         'o{&hG-6E%w7Vkq;3R).?n$~]`Ll)*R|1C3{]=|{ME(M)`)1f*(:$t=0kU@B+|+.n');
define('SECURE_AUTH_KEY',  '*<ef-4` !Ax =7S7XL3Xn+];rm)V+sw(<Cx5uIP$52AVt~B2LVLT{D/J3BR>9dDm');
define('LOGGED_IN_KEY',    '*3L%sA$QfFz(.]r&a=Er>-Qn:c-bz/)>C%=:xe91x,bW7$l<VF~,yPz>W0^^D`LW');
define('NONCE_KEY',        'mbBj65d54s!{DsZH+Q<69ZgHHSB8Mba2m-5/E8`NRxJ6cG79&%Z#]GF#sJq96#0w');
define('AUTH_SALT',        '/dT9)VSmXRYoELsQ=2I5c2l}7Bkd+4Y,c$X-YfZHuaAA?Z:k}@|SS}?l4Q2izN>#');
define('SECURE_AUTH_SALT', 'Vp+.G%_STAb^dL1t;8eAVbups)Ir2LFzUHOazjqPyW1NB2E!97Jo</K1D3UGT}E[');
define('LOGGED_IN_SALT',   'ti|G!#p(o`=bZxo8N)k5k^qbLE@4R;GB:PZ0Tp87MEu|kfak}<{7cD#[E3$@+oLa');
define('NONCE_SALT',       '-7,nOEvzA-v|725Y@WJZgeM_[%B={u#(*0^Br3_~0iLFK-H!O6Q61sjka`sBPV(E');

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

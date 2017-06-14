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
define('DB_NAME', 'n260m_16685188_busclock');

/** MySQL database username */
define('DB_USER', 'n260m_16685188');

/** MySQL database password */
define('DB_PASSWORD', 'nicefood');

/** MySQL hostname */
define('DB_HOST', 'sql210.260mb.net');

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
define('AUTH_KEY',         '>yV7(>vI*5,qWj|/%]}SunB]L?jlc1]A}I_hg;{0Vc >JGFm. r.O<xPyL?CTrDq');
define('SECURE_AUTH_KEY',  'P=wXFE|N2/UgyabO.fAN-E#Y{x-ex.1.#b?}z0vw32vGB`<$DRDSM/`K4BB52 @7');
define('LOGGED_IN_KEY',    '/pTX)!n`TyUYNqel8@{tH`)k4I2?S6L?7d_b4m9aNg~m~!K}j~5bhCf2@Y;K8yoN');
define('NONCE_KEY',        'q8l68OZd}.H:[fciUXhM7|`^.i~S0hX/,TN(B=RU|jnL*7#=M~c1:@F^ a9$];]*');
define('AUTH_SALT',        '4Pu0!NjGhW&7rXw)?4OTQRsAJXBcV-0X)V>=X) .K1]=b>Q$CR=L^XK6Az47|T1x');
define('SECURE_AUTH_SALT', 'W;,d$e[P{y@>.Q5+@-Qzi:sKJ0tbw3N~2*W,q2~gOSTbg`tI?l4>7qFzNq5^z$G|');
define('LOGGED_IN_SALT',   'cJ}%5q,d/y31f#B(El>K)Ji{hC:)Mi?`;=[r~I`rb8K]v|,eLmh,G`kwEe:M1lti');
define('NONCE_SALT',       '#%K3a3^0}`wvVb&PFqKY,2$9Rbn6}0*hKimuJV/7QkOsqZ~s:.5TCOQ3?wQ85%Yv');

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

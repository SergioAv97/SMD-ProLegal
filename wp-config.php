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
define('DB_NAME', 'wpl_soluciona');

/** MySQL database username */
define('DB_USER', 'soluciona_bbdd');

/** MySQL database password */
define('DB_PASSWORD', '5122_Soluciona_-.,,@');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gzmzY#PG5jQ!IQwjcWATvZp03uue)N(6*WQbV)zf7P9v^JB@F!FbT3GNG8I)rqpX');
define('SECURE_AUTH_KEY',  '%oDK2tcuxvn8hHuxcS35fJ)aQYboN(^sDpSrN)ZyBwkEZr*UTEQ@Tvcspk(^EY(u');
define('LOGGED_IN_KEY',    'HoFlAmQEbQbYwEUW2NOz7!Y@N3geIQXYd%EOwEizOq)d!uwl#8SUiC^HUi(sja!h');
define('NONCE_KEY',        'EgPU2)m7nXjFeCxgQdRqU)@ZBQRbL652)lQvbWgDJ8cUz)v2NMP^ty^nx6kCm(hd');
define('AUTH_SALT',        'ccKqRw21e3pnDX782A3NjYLp((B6Kw3rZI@OPSuVnju%*f^3zO@aQNdSfV(uaC%!');
define('SECURE_AUTH_SALT', 'GZ(nW1wZrDr6etWTRcu1TIF#x#vgdOPaRdl!uBwqQueItKsCM2LgWjAUB8prp!iP');
define('LOGGED_IN_SALT',   'DNevB1FNCnSjk%M0!T^zIWey!)VA1c*rH&TZRgkk5H!I*L@zwKY6@jKK(v(B^bud');
define('NONCE_SALT',       'MO9^%sun083z*Yp2AeSOvEhX)4g27^aB%)CaO6XWFsj&WuDIf5HXFLH)PC!AaAo2');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'smd_wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

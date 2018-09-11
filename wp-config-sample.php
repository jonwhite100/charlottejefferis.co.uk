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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '.;Yl#Z?asoQjvEmt^q`i%o9#A)7=e>9a+&?D/NSLcF5)9>) Zn;|q &%C[Q&?|57');
define('SECURE_AUTH_KEY',  '3`[ZGjFEWy,5EM>R.!/|-81M}2GiZQ[LcU1.ok~@%NJl<%L26t@Rpg+t?bQ8NFh6');
define('LOGGED_IN_KEY',    '4zd!#)|MZze-o|LE)+Ck$(:b,#QLESpRMJZiwey~:,5j+pa-Q@AOdOPcJBBtD?fS');
define('NONCE_KEY',        '=Y(~e|cTt%o{JMy*!WRn3mxjUhGIk3o}PHeecSIUk#otPGlZZ%@=Sl[n>16|**vK');
define('AUTH_SALT',        'Z;#yNLqptH>m&&br.lFO-yC1}7].BgNfN(F=%4|}Hs}]G{%gYz0SIP<%EIZ[Mm]/');
define('SECURE_AUTH_SALT', 'K&!=EEJ[(B2YQb;YNg~B)*]^Xed<(5xLw2WJ9%}>{FsJM#ja$7:cZm|!3T3]&hYc');
define('LOGGED_IN_SALT',   '+5KLq{!o205RK]%Cw[G+4.4d+zb8ao8Kxu`H:6pVY~BS,;/Y?vIvv;c=q!E{D9!G');
define('NONCE_SALT',       '$59[}uMGh>Q-]~9d)=pmWe?6g{VO9iB:,rBw8<tv1Rl?T/f7^@gz<ehlCBq7zxY1');

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

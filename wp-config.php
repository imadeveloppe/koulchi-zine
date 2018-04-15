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
define('DB_NAME', 'cl27-koulchius');

/** MySQL database username */
define('DB_USER', 'cl27-koulchius');

/** MySQL database password */
define('DB_PASSWORD', 'Etc^Jqxrh');

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
define('AUTH_KEY',         'txjusdkd0wapojjjiqeupgzgnwztkokvwpttcgowiyxtfyoo3pwc5vj5rywoqg8g');
define('SECURE_AUTH_KEY',  'bvcjhqrhpylkredlqlx71xiflydzkr8vwyyxbk77jgdbrjn6bfmeufj4udpcmdfv');
define('LOGGED_IN_KEY',    'zvybv8lfllbdcs9dg6olknpscibjyolseyvybxihz9gab3zkebtlgmigo7dbfmfb');
define('NONCE_KEY',        'fwcnashgm8bsu0hxsy1o5q1tnnvs3cbesgqlkwbo8inhhf2bjs8hvgbqdk1yj1g5');
define('AUTH_SALT',        '0t9yavobrdyrumymhchkxg9rgpcjstzdxlwt4olog3qsfemfbkbrz8fixledbnt5');
define('SECURE_AUTH_SALT', 'm0ydojmpyfjwelve4keoeqftmsd5mcc1v0usok9hedb52831knjz7pe66svksemu');
define('LOGGED_IN_SALT',   '7avmctvn5wtgja1lxp4pneo6tvepm2fdicsrfdzdf1wpk0mgguz6hjwzzddgdfrf');
define('NONCE_SALT',       't3qgy9dvn0kgaiosh94i5rfy5vq9ltyhqqsidhniezo7hsurrykrl8clapyllpmd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpoo_';

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

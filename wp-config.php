<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_78iex');
/** MySQL database username */
define('DB_USER', 'wp_hueo9');
/** MySQL database password */
define('DB_PASSWORD', 'el8CTwUe5%8Mo$d*4D4)zJMc');
/** MySQL hostname */
define('DB_HOST', 'localhost:3306');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'J#MrEQ;s#4JJTY4md*23]6&!v7gz36NwI2IH[~_Fq7J4bua;2Y]H!s~Oq[;*4Ip#');
define('SECURE_AUTH_KEY', 'SaZU4aFiWF7bRS1PYcy]n@mlsBWH]4Do+c)o;|MY!&U8c*4AW_5k89-S(7L1]Z6X');
define('LOGGED_IN_KEY', 'C~U@~1QBotL]jhB&Z@*e6E[1W8;r7Y)83!9Z!~m3PDm0/3|4up*y2P1/%uM;K65L');
define('NONCE_KEY', 'z(e77lI(Ye/WC[a4mve+HGe+t0Ew]rn/9rm4WnWC7eT3L5acLn871ge+js76C+7%');
define('AUTH_SALT', 'l#0#h!dP54&6YPL4DZ#0:4n6[44-U9p0V]4N4z*(Y0/LV4-0enX84u30H*1b78%)');
define('SECURE_AUTH_SALT', '7:2H1IPD97I75Pmw[3no!4GcN0~V9Q/avw29t]CO]Gt1UG@24_XG#X84+k@S6+0(');
define('LOGGED_IN_SALT', ')8O237NJjM70)wS:~2mHqNmKMG6y1zj0899S6aMp38kV3#Sk~!c50:)InElfa+#-');
define('NONCE_SALT', 'B&4!nzyI9:4[adr7B93n#(DUJE3NkN29/c#v75!WdW4P61)7:4kw&~S~_Z2K11dk');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);
define('SAVEQUERIES', true);
$table_prefix = 'mUZe5_';
define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_TEMP_DIR', dirname(__FILE__) . '/wp-content/tmp');
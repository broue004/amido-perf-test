<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'amido-perf-test');

/** MySQL database username */
define('DB_USER', 'b7f01ba1b08ed4');

/** MySQL database password */
define('DB_PASSWORD', 'dafd53d0');

/** MySQL hostname */
define('DB_HOST', 'eu-cdbr-azure-north-b.cloudapp');

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
define('AUTH_KEY',         'yqSkg^x,kFDx_0|D-?=dyd#85=33G<=6WwWxQip{]:l8C9[M;,>,`<SG70Ko4hjx');
define('SECURE_AUTH_KEY',  '$|sIAt+ Mh<_z$091|CqWq=Z+71% BEj+cN0Na+9%sV?06J_^CH0DAM=dtetMFBl');
define('LOGGED_IN_KEY',    '&B|hZ@mLqcuk7DVV7cWQ`j04kkVI|SqROGeiu3#q<tDYeXV9}*;E8y%&>R4Dzn4 ');
define('NONCE_KEY',        'yHa/+>3i3#%X`gg;Va|1A-3q|a4z.qqD?0;=D:%9[O$:aXDs`43d11;*$x(xdhij');
define('AUTH_SALT',        '19ugvULd7Dl@z9Cw]>xc^2/=Q,F4e}0}qI5Gpv_AsEegP^g)8Iilo$>CL<&-v&+6');
define('SECURE_AUTH_SALT', ']@tFRG6|NYsqSw;=m1IG(EWPN6at^czSe+vsfHnR.<n@e3Che+d!vm5gF}![1|MZ');
define('LOGGED_IN_SALT',   'Tp3/A^<^?KQO}:*:* [U`z_$|tF||NV9-)VvfsT@.NKFARJr]~BlMVLFS+J 55AS');
define('NONCE_SALT',       'WBsylH!9SyF7X-&{nznwe|qxq7}L(t1|dr%csjxUS%deAoq_-75!sgU(u WI)G#Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

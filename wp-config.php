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
define('DB_NAME', 'wp-shalimar');

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
define('AUTH_KEY',         ',i5udn *EMtYp5a/|WBWGlr~9L1i;^6A s]<Qx @j3V/T9(OrguZA,>0zu3he#m:');
define('SECURE_AUTH_KEY',  'C&hi6&bY*KR%qbHhC?gOm1(|S7El7Wx^z#1X-2&pa^.A!s:?n<FO)#ah6,0)aCg[');
define('LOGGED_IN_KEY',    'n*,Ea_HyD@[L)8P6kHc#PM&>Gb.PdC$P[v(na f&!ykZoRf(sEv?f~3RX&b>bf@~');
define('NONCE_KEY',        'MDI/iXW$2v;yg-`C]C(__!l5+~0530|,a{5.RUuE4QS.9;0HZad;.<n46Z)p)PPY');
define('AUTH_SALT',        'xWMujdGSYw%q(VhWP+4.*jK*==QZPQ0%J$%O9%:nC>8<:Hu@lGpG!:zX?Y$CJE_?');
define('SECURE_AUTH_SALT', '0-yo-c0)XANr_x%{#|5]:$@%7jWNy1<5Yai+fWEH&lx:^9D2B-igVU#ShUabhRwV');
define('LOGGED_IN_SALT',   '^Bk)Te}yYb>1qO 6ALnCo3440oODCf{<(VpSQ)/h),J8.L>7(LhhrO#/}3Is%G^`');
define('NONCE_SALT',       'WhY7W7268tp,~]0vlU^wdlF;0S]iOo]+)f-7JlVH<T0;(c~qS]O|X$Sra%:.wvYK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ta_';

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


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

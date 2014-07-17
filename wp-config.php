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
define('DB_NAME', 'elocue');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'C#uYfF~reSTP?1]7%3)O*S@rIqzq*GP]-[B]$#1qnluMm;Z)U3GdM0+XiT^qm3q=');
define('SECURE_AUTH_KEY',  'gRym%M3/:_`%{c7Oljhx0|66s<<xf,u|_Xi&sL+UTrOQbq$#b][#r7e+|?VBMlqy');
define('LOGGED_IN_KEY',    '%8P9 Jm@|kRA9.6D-.u&N?Uxo|uMsP~t.:OZ.rU_xncqB!B2+U<`^@U+ViUA|[!I');
define('NONCE_KEY',        ']5LT+x>R|%k^7:EW|ws8Na?y~OO[KGM7{xZS$4/qj p&vKy!h14>1[=4_<thx,QP');
define('AUTH_SALT',        'mR(eB~8B;X{_fI+6H,pJ4?wx2+-.Y%3I)O*gnoL7H+t$i||Ds)&-0--U2H|Ag<P]');
define('SECURE_AUTH_SALT', 'B8}`.*]u(%)Q&&YZ,@$P>pt%PF=kHN?ghF9G?$pxnb5-xczim_-OXyOC40d:tl7w');
define('LOGGED_IN_SALT',   'hOR&$+|CD!wI+=qtue#M^8S.uR=isVIuw/u4{I&zTOD=i&A>ea^^>P1}~bOGnOu;');
define('NONCE_SALT',       'NA*N?PSv|CC2(Nf|7XCbrV_L`+aK>2g3^J/Sii]## c`+D-2[w%D|;ku25lfIPSD');

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

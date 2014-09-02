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
define('DB_NAME', 'magnus');
// define('DB_NAME', 'magntdnh_db');
/** MySQL database username */
define('DB_USER', 'root');
// define('DB_USER', 'magntdnh_usr');
/** MySQL database password */
define('DB_PASSWORD', '');
// define('DB_PASSWORD', 'u?4x@A*XRztb');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */




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
define('AUTH_KEY',         'PbP{Vah&S:iN-|pxsO?0?2$w?(SK0(Ub9/y>#q]5 PGanqJxApnw+R_9=I> |K([');
define('SECURE_AUTH_KEY',  'GGkZnyF3|E}N^ ?Icx|t;Wu 3Ps+b,|Q~=4O+ivN<;Rba|Q|i&q(;cK|lnUh~|+s');
define('LOGGED_IN_KEY',    '{`&8H0ZGrI1m,ZD;L2Y37p3;4C[Km.c(KE+>>gqTLK5u;|zu,|Lk0NsN%+<=[fpy');
define('NONCE_KEY',        '7kf}8o7mF5Fe<- D&dd9T!_dc[VY<izo@rvl+^1u7VLu|k@4:YVX1lY<OCOw!@#+');
define('AUTH_SALT',        's3b]V&P-?-$VSJyW|,e?X[QG2f~%89{|x[0ROa-%~yV,l)Ss|ncM%bDnU%,x*;#N');
define('SECURE_AUTH_SALT', '-:3U->,y-wo!%j%O/P@-V=R0keOdZ;[q.*<w{/N R#{y4z~PIHy6C-1*-SCqGU:s');
define('LOGGED_IN_SALT',   'D>+ESlM[Y/GrcZO>04+__NwNS(_xFKP-))ykfm*J7bZ-!+0m!#wT(V?+|^!eO/-*');
define('NONCE_SALT',       '?2Uaj0NB:^:Q%FT[ec/w2B/lJ5;O,b?{@1:1l%:2/j{HJ4Fu&XL@tLGNcq=0U !N');

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

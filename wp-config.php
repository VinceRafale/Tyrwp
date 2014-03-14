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
define('DB_NAME', 'tyrdev');

/** MySQL database username */
define('DB_USER', 'tyrdev');

/** MySQL database password */
define('DB_PASSWORD', 'OKpass99tyr');

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
define('AUTH_KEY',         '<F,kX0vvi_R:7C);=M8M)lsq2^X6]xLb_4q%H+-A,B;/l|#8{{h|9F7.TQKu;>Sn');
define('SECURE_AUTH_KEY',  'FjJ#C.9xYn;r{#}Scdnu25(Q@#TYK8ae4X^QpX`WEH]1Bf@_VyNIma0yBR=ar)5-');
define('LOGGED_IN_KEY',    'Sd-Lhn!I=(g$0DUx|peJmH|m^Y?i[sbBZd+`}1ZwtOl{.XY7gU2AJR@|.cc-w~7/');
define('NONCE_KEY',        '&{ [_jTe#.:],IhEy:/?ED!v?~c4Pr[HIU8i=NsQod|_@xN/HXFAl}wL#,bPNovk');
define('AUTH_SALT',        ' tlT{*qS- hzi]([{0 /R.?A3s~H$4Z~I|oyYx>|R=It3:%&YSj$-ZgV-jT/5(Rg');
define('SECURE_AUTH_SALT', 'pcM:9$(-t[Q$>?UMPSkOq&K qShhM({S1S+Ad${j;R`$U<i|6-/JuOL?:U#Lr6Ps');
define('LOGGED_IN_SALT',   'qz5pt[6Fys@I&6dYb{VCA4:VF&Lqj+,J@>D1JZ}bjt+hD/-Z9xO?xOyA,+mEa4TY');
define('NONCE_SALT',       '$ky+U=Yr=v5Pv-rgkJ}V}?hyT!v-9=qp2RC+8gWr|GsgZ$f`%HV+(=G1Kcq<S4Wr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tyrdev_';

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

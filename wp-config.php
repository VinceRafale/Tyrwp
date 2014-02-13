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
define('DB_NAME', 'tyr');

/** MySQL database username */
define('DB_USER', 'tyr');

/** MySQL database password */
define('DB_PASSWORD', 'okpass99tyr');

/** MySQL hostname */
define('DB_HOST', 'tyr.dev');

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
define('AUTH_KEY',         '_k(&{*4nb]T>(Af,9,N5cD89byX%WlX=`vj2[1bt3dYm?+9TR-|~T8b~|bF)N-Vy');
define('SECURE_AUTH_KEY',  'XOD?-N&%Y&[3mw9)G jFF/tN-d_>;e4 /;TVq/}f}kv@gRv~f,NFI+MjYxzw6]2_');
define('LOGGED_IN_KEY',    '|Cs@cNQ],TeI,-/>$[x{D*96GlYz/;ByEd#G#4 ;Z1>cRl&{25VaMNru@O.wc0K6');
define('NONCE_KEY',        'tL*Ia}g.SiI?TBIlg!GV8q::pT*GW)H]+l.Uu}S#%_jbEsO&D@ogM jx,-|O_iPE');
define('AUTH_SALT',        'u|Tj3h}L{XO9j2{/!4*rnZC:B+Q__&1=y`{g-b|8JJm-{V{2pHpkeBd ti$=TvvV');
define('SECURE_AUTH_SALT', 'jT<KoKfw;ON9vWaYw5%+EY^_d#R_AZck1Oude-Npq)g&B<OWy{0s~HeF|zOP93g+');
define('LOGGED_IN_SALT',   'sq/1HA<=kOpki.Cg4J|C0^]IIS:5M@]dlPABiTm&e2]9%>1KdLJg3&}-%C) 8?~B');
define('NONCE_SALT',       'X{H(he}$n7c6<@1+e?yx3zP+|[Igx^bjl2s/_46K?@Y%we+H2?@k_/,8&jkmUJ>}');

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
define('WPLANG', 'sv_SE');

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

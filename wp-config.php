<?php /**
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
define('DB_NAME', 'cbblhll');

/** MySQL database username */
define('DB_USER', 'cbblhll');

/** MySQL database password */
define('DB_PASSWORD', 'Pennyf@rthing1');

/** MySQL hostname */
define('DB_HOST', 'cbblhll.db.9136941.hostedresource.com');

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
define('AUTH_KEY',         '7+;JVg#JE[5]B1;m=G1PNmRJ,{^n|eep`*Hz(cZ-Rs$Lz%S3QKV,HBb8.c.2sxy-');
define('SECURE_AUTH_KEY',  '<tp^pWIu!a(YM?++F`,hHNUPUZam#_$9bbGOxs`:aDh9WobFB+)wZP~}zL}3YfS)');
define('LOGGED_IN_KEY',    'XfB?kv@oe**!(of{*Bj]+mrg/XM`T?yVB;xR+mnr0K6DvBml-UM}^T3C6jVeqhi`');
define('NONCE_KEY',        '{Fc[$wYqO_vw_k1~ER&/Rn%*pzi&`Cnb:Hg-%Cj1B=xA[WN!ZAf(*RrkwL,0c=WG');
define('AUTH_SALT',        'bY}<Bq|/8=#qZub%FdI&n,UdZBrfX&>sD-.11[y%N>.yCj.EsIu0@V[6[Py)Tb|U');
define('SECURE_AUTH_SALT', 'X#qwjf3`$O>Jzf*oLU6eEFX{Ub.65ji_hCm)dwY`NBr}T5%_>qQ,Zr`qEt*F Y&=');
define('LOGGED_IN_SALT',   'ob@(#s-nv1)VZ%[g+80`#[(XG+}~o*B%`GA95|jklK5*W9@3K%vYZsm!#y.=vj*|');
define('NONCE_SALT',       'X/1r_wn9l-qT,UnqXliNXm79$+P(yesL)5-vu9),V:{+YC9rO<Fgmbl*Wk-0Fg9l');

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

define('WP_POST_REVISIONS', false);
define('AUTOSAVE_INTERVAL', 8600);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

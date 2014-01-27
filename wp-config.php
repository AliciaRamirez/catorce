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
define('DB_NAME', 'catorce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'K;Q:TKIY% +tm]#RA<N)7+5&X@M`%T;]y:_fCQ^_A250sgN*T~*]fP@sDOGtM K!');
define('SECURE_AUTH_KEY',  'wX*/q0 5(mR=1..+!XHK#imf=ns54 V(SkE>,DkX7B>fnCqz1}r@[+*:F`[$A_f$');
define('LOGGED_IN_KEY',    '#F]72j1&:Gl_y{ jUu&Q~f^QR2;w?gDuu*wt&P GUQ1GP~&RyIF0hS>dKb^(Y0jI');
define('NONCE_KEY',        'mklLQ_nuuTzEsd4Jy|*0^,UAXF}:QDeqD*VuWP@gpc|y&!9v6`g&<MeE$Xg&x9N^');
define('AUTH_SALT',        '~x-xnjXKa/v:GP44#Q9W$S2-U4L(|0bp7jZ5!gT2RX6-X~wq% Ld5>6>C0T+$V-p');
define('SECURE_AUTH_SALT', '@-V6F5%mKt+A4,-HaKR`qah[+?>DNJK+Ur-|<*$(,vh$ND24WO&^l7+hFe0NwtHp');
define('LOGGED_IN_SALT',   'X8R+!}hTp$E2PciQ[_o^98ko<+;2z~xl@P4`kU*-=|hO0%dq#%1PI`j,@Y9(Z?=W');
define('NONCE_SALT',       '6Sxb<-dmly]s rIb*OfyS^ib<]_x|?P.s4%arLI5 (X G3<KJ7I[D3opp#n@0q4F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'catorce14_';

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

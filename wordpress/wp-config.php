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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'q.aZcb^f]YPv.+p-niqpzE8aRfkVr@)p66&lH<l z8iY1atUc.l0afoZ&OJF]-xd');
define('SECURE_AUTH_KEY',  '2]OofY ;one:]YYo%k^W3K*AoW)WoaKhcJkRk5Q@Dh4R|U%bqZW>T~lQ*1J=.TXm');
define('LOGGED_IN_KEY',    'AI,PF;R*o#L9)ljo<OT&u&$pj9sHJC)DD9@<,Z)b;eML$V,)D$ J;`N0tOW/c2or');
define('NONCE_KEY',        '{;3fOf?1+qG&ul=XADHQB9N2c4&6_Qw{3FgbVaI_e~b]UFyb(?=^yf+4M`WX&5j8');
define('AUTH_SALT',        '=TC2w#9:XLSg-SjBOdbmC<ASVS{.#7ub,w1Npi:7[!Fxu8N7;#M<RFyzT,18j_LM');
define('SECURE_AUTH_SALT', 'y|G&7|l:,i$DIqnICw8=E6I`~kw76A eA6|I-g?52gRP{5m:jBWR&JRvV4Fr?%3u');
define('LOGGED_IN_SALT',   'lTbjf[@PIx_YMQ8sh:[#.G1f?Y/8gZ(<`jj$U*W4ZSJ]Z[t8Esjv{&4mLq?+ac03');
define('NONCE_SALT',       'sKcDg4uNFi)90,Z<Tm7;N(VC+:e#a}x5T;XG|/ORqF?sW+*Y(6ZkKjvAfhvaQm)F');

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

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
define('DB_NAME', 'servidor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'y-[5pF~[s({KMUwaW9Wa+4FiYs-{Nf{Dr04MR)!+df7<(cll/Z6tl*N4K%yOiW_}');
define('SECURE_AUTH_KEY',  'Y&{=R3v5[+@s{6gOZe-dC98>$hO3|ckM?gdp/w1/zKu|u].8m9UIAiH+a*m3NvJG');
define('LOGGED_IN_KEY',    '{r*.k|N4*h etv7.KPWd{$8 ]9VIc*)|~mR/.g%hv$M|%~}1kS+H8R!t?4l*r5-&');
define('NONCE_KEY',        'vRDzi.jqBCV>FYv=qocrr6QP#q/CUBGz&_jQzRD,m.S@<IA$Wp&/YHnyV,#^4A&*');
define('AUTH_SALT',        'fKt%M=%v}^vAm0pCy$=MaJ|?4z3z6zSH5l`8/pm#BzlT6)Y~phuw@bcFOc,`z?w`');
define('SECURE_AUTH_SALT', 'GeQg<6S/} $q wtxL^C5}_fqr uDEL^I_6(><{!e/ia#|}ae2WZO{5cLd6or +]]');
define('LOGGED_IN_SALT',   '(:,]R_-vhdq6JlVM!_gwo^_L6?n20Y|t@C/PI2P/+o-kG/VTE0`1*:aDq4n-(!Ur');
define('NONCE_SALT',       'LOf(Lic%d(@^i$(m%@C7X;om8(-[Z/0{Hj|md?qrW0r[hrcm-hbT F3qn6Pm+9|3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ser_';

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


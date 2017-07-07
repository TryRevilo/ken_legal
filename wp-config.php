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
define('DB_NAME', 'ken_legal');

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
define('AUTH_KEY',         'zA(GPVeZUi2>4Q&.?F48udL^m%Qd)~(VqIpy^ywj,z!z*dW;))A%L0Fm!G6J0$TM');
define('SECURE_AUTH_KEY',  '!,L)xSOD+],2XqG#Cbaa@%f|{B$Ux%rXi,~8XglqUX/XJ_HfR7UP$:>i;&}pt1_<');
define('LOGGED_IN_KEY',    'J]>QcnbYB=QHj|a>W5tH]M57}Ab@<E8K&Z!XvEKB6D@UO6#lS/oH6Fg{E}EvE;4V');
define('NONCE_KEY',        'wFs5]V8g)9/*=B$ol&u{EJ)eRn_tdLMz3g51W9J2&4WBSbFtalXz-cC#>b~5Y4Y4');
define('AUTH_SALT',        '$gUq.3%*^mH_c6dC^>ZTZaKk9f]ZlhNZDC>:J!h`D=~@@U4#<mig[5b,4HkBu39p');
define('SECURE_AUTH_SALT', '-;[2Q_r553]IRFA4;2vg/%W]Wu#QE?VUP,$)Ms~F}jv6_uecU0Lv2>@4Lv$bV9ou');
define('LOGGED_IN_SALT',   'j/&YL>r/./GNlBB~_4i1;Xhdq(0d`YlQVGD{n*[W!MG{2E!w`+aE0_.V_gK%dF0=');
define('NONCE_SALT',       'ZA;Yc&m`!kdDP[|!D2K QJ;dXhRw<rbf;sh]@xb7Ly;ewNQLU {f !0BZ&LM+Xp2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

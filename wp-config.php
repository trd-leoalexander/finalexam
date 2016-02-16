<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev-caohagan');

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
define('AUTH_KEY',         './J,,v+?-d;ppAjGGOg%YX27u2>Y<fzBFWrw5)ikn18:eN=(>26k~$D@M2}J=N}d');
define('SECURE_AUTH_KEY',  '3Ftakc.)q4C,`h@nb9U~vslT]3$NAb2G)OceU=bi-l)zMnCA@)c!m5T?7a}#|tDR');
define('LOGGED_IN_KEY',    'f23Jy*>lF+ 8-/Bq,V*2fj*p?^.x#ejB9cK  00EWz*JSso?`h../a>1zzC(I!|t');
define('NONCE_KEY',        'rKx}s+Z=a~XyPG0j*-T.%O,-sXV`.NY%h7<N5wj^s 2=&fC(GPWZU2n<QW{tW_7w');
define('AUTH_SALT',        '(JgKyHo[1,z^z03yjcSV[+m.RW{;+AJNY(|#%gxH>Sht}?%-|3Ggr_w%o?YI-+r#');
define('SECURE_AUTH_SALT', 'BrPZnlRvQCHx}QzI2%`Ooy}:qkZV?t/4rU~9NrrUXoP-)rg<?+uzno`7>-D+6L0$');
define('LOGGED_IN_SALT',   ':1+e-Zr8&TKdS~n~+m#BeGf.:L^ap^<|O8xy,7bpJ*bA<?OBZi8&S+|]K}z*W1I;');
define('NONCE_SALT',       'R|bkQV0,FzRZbN%F-@4q,+p}$mc{=r@{+jGe,+ohN%I2o5|M9=#~`KJ8rb++X)|B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb_';

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

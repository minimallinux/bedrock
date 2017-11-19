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
define('DB_NAME', 'bedrock');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'amex');

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
define('AUTH_KEY',         'QZQuc2BmnQe=CE@E!EQ$}VKoOq5ZO6%#1%bMb(V9/K;<f}x:xU.<~TbxS@S7c%Na');
define('SECURE_AUTH_KEY',  '7fb+Nj4RM7 -&0TkA`$K6-}H{CG?uL_a^DC^V#4S?XNP,EYnFER8hCX}}%sgt?V>');
define('LOGGED_IN_KEY',    '[VQHC|)w0;4%0A1jL-Iq`o8^>(vHfK?{N{K9BF):`,:l}EtrAmZ@uy!M/Yr^=z})');
define('NONCE_KEY',        '#UVD<#&#5c~h?kQEizFN]m>#EAy:mt6kSB5:>@Jl: Y0/8*VDy81{ym_p@TCaBjX');
define('AUTH_SALT',        '2(N-ypVI%[eGa]M.4xbLT6w3Kp(iwoP[ObNoM31a/!3j|I}^jeXJ%k.@+5?<xf(~');
define('SECURE_AUTH_SALT', 'GtA6?N^rxAJi&FvsV.:Fu,kE)z,k85AB(eKSSLYMsT+]lsswN-fUK0F8.UDj]U^o');
define('LOGGED_IN_SALT',   '@INiB V]|.L?^eLeZB~)dB$b&A?GdrGC3k&6J,UO},FTiOX$K%z0Co6~c_%J/2 (');
define('NONCE_SALT',       ' SwGt:eg1poI:vT1!`O#|3@-R@jmzi}0rG7$<d!.B,B&)-t*Hk0^CHRwP1d95wn`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

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


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
define('DB_NAME', 'XXXXX');

/** MySQL database username */
define('DB_USER', 'XXXXX');

/** MySQL database password */
define('DB_PASSWORD', 'XXXXX');

/** MySQL hostname */
define('DB_HOST', 'XXXXX');

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
define('AUTH_KEY',         ']ElpFXZniN9@q|}I*5F{-|m[X]-qFtO6o@Zty(TXnpsMFMWf>;[N/c4eCrXr]#j<');
define('SECURE_AUTH_KEY',  '|5JQKexzm+=++KlZp8fJP,/xm:@ubHI7m)EP-W8T 4U,Rk0iXt&+?^F/y;40U ~3');
define('LOGGED_IN_KEY',    'MEhAhf Zv<ocRRn+StBR:[/mRADkKV{.Ly8)#v>Q/3B@mG>UBe?%s)xw#s5.VwoE');
define('NONCE_KEY',        'ek%+[>{Cs+YICa$^#bLLL@LX=IfD;2teT8c=B2oxgaYwF|.KtL4(MHX8Q|)Xr`0d');
define('AUTH_SALT',        'bU:(a^xd[t]u]kZMxIh@j-9!:27Jhf/@Pt*$}wGMY:uYTBV6QMj(-,7>vi#7aAI9');
define('SECURE_AUTH_SALT', 'r-n+BQwY-(-M4yCWrwaTjdIj./d3O+gi5pbkTtRy)_a6z@Mm%``!UUkvdg}[dH b');
define('LOGGED_IN_SALT',   'vj4r.~gJ_ha|,-%ge0Nteu#$ubrp[f$&L2? l]DVq|*eP}+5KYKW{aK@0nb|G<Ux');
define('NONCE_SALT',       'VA $q=^ec6l&u_Cg$zYKk{<53|+YQ-uDx^?5LeU3nft!6?h:%Lz,eb`2|CS0M{KY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

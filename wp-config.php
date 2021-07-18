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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skynet_artcode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(U /qiIAn&]Eqq(6~eEXJFyqOtb([Rwq^O_>2}l^=?R1+<g|mKzu`s[gQQ/woF!`' );
define( 'SECURE_AUTH_KEY',  'S9qZH=MV69d65cdUk)BvEjO#$Bp/ --n|?l.#^Q/? hQf07g%kY]?vM) |60unYG' );
define( 'LOGGED_IN_KEY',    '&S+0NU6{5OvMi+/X<[HP%p., }h2/#)2+Or0TY}}~4I~2Lto?v5%gem@N:d$5X=2' );
define( 'NONCE_KEY',        'I0w)?rxMWQF@EU]$5EO>ts7#f@-ELsT%**2G/?e0QO@4f(8EXU.W*FP9^pgtKI?3' );
define( 'AUTH_SALT',        ':}o]$6eK$:~ EY_!#SUf@kaOAUSd=Y]+/e;GS4k}0=Tt>[}//@X#cEC:>34d LvI' );
define( 'SECURE_AUTH_SALT', '>:J#5/,*`DbPT1-M7;L);&?%H&Jb`#)&&l>YW,$|Nup#o7d4[f5$zB3]e[<4t>cl' );
define( 'LOGGED_IN_SALT',   'Zn#Jmk#lLjrm@_Q[2-hQxtmcGM$vk4uDCRS8lIVA[45nWmJIf/2H5n0( m&zq_GV' );
define( 'NONCE_SALT',       'AmilNqd<5(0>jzx|>/c$gy]!^x2>t}gHxvW/V%27%Gsk`|7az<=rcLYbbsq1je$D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

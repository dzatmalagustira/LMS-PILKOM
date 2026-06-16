<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lms_pendidikan_komputer' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(:pV340>tTD87{37FCk>R=!;z]C{,nJ*4-O3r4S KrCN9_PFsn|2I%{c1H>&lT_v' );
define( 'SECURE_AUTH_KEY',  'LNyz<[E:8_i:Wul$:OIiqJn}(Zl1723A/JqwM%QC3E6)qS1AaIcNFPr@=-J(z^5e' );
define( 'LOGGED_IN_KEY',    'K6&q;N&j$1cQCL+G5fY9~u-N`!zsz>.1^JAZY!vLazniD8hK_Wh{r9hU8S0w&4;{' );
define( 'NONCE_KEY',        ')*^/%i-)Hn5}z0xJw9(49=3]>#Mn~4=VY/)$k`YtfI=-n129{^}5FE3MkN39UQ&9' );
define( 'AUTH_SALT',        '#I@]&j(],K9@5<jkq0gnLrwiWOii6 & aECX^LJ}M~ZFu2eZ%(XD?FIOB+rh!e[U' );
define( 'SECURE_AUTH_SALT', 'zYajd70d2?-gyOkS%CoQ_N#6 Er><Vc$1Ttu^n0>H|9[ODX~iHDC}~u|3@^vR;iX' );
define( 'LOGGED_IN_SALT',   'L6SD{)^0c6Dc,g[pz,F<=z5t58~cx<]n>q+F*g-}4+z%3Z(g7;Wp3pF%7F}M595z' );
define( 'NONCE_SALT',       '4EZ#)M*--bfdm|4!mt719J?0hMBOm*=D]EV14V2c4(%aCrJ+JDA8F,1Zttjpd~43' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

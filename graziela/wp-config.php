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
define( 'DB_NAME', 'graziela' );

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
define( 'AUTH_KEY',         '?V4bjgHi2EzQ2|2(vyA#Gw~3e)|:{obOwFFTdZDrT@W5_1E-mR:cGgKQW7jwAl.0' );
define( 'SECURE_AUTH_KEY',  '`h3=TSaf]D[ib:OxpW_Mt?:IIfoR*@oCzfO45i;NYjL&;(-_<59_[qr?Eov;2}fc' );
define( 'LOGGED_IN_KEY',    'A|?jJKCJ,65O!%-U^^$Df^WEje0?{j0z*lXn5WdzASqsD`>BN4.;5gs[kT`->[gn' );
define( 'NONCE_KEY',        'k/Z;tYqjKsNQ]8bz;qO/#IBYEzmZ6|s+`aBe~Pjx2l<>Ct,&b&6y)74I05K|{xEG' );
define( 'AUTH_SALT',        'lsFc(h=F5z7[Z5H ?:P foZBgV*-|Kb!B&TOHak`avEP/np1x O?LGw`eF{9Kb^P' );
define( 'SECURE_AUTH_SALT', 'ea*}nAG;061#b-fuA2|f8GE1WAIJH+9U)~ag#$@,JjJXfDK^3hJtU>G1#f~kK!^_' );
define( 'LOGGED_IN_SALT',   '8}m4r)T=BUy:Dk-#):L}%AMrv7u:rZX][Qxdh-kZ(R-`N:(237*u Wx$>,sjEd$3' );
define( 'NONCE_SALT',       '2H)/b3p2LCxL4|=>>T1M>0x4$~$Tu(+|XQLnWnk2><I&~L[M5>dr1B E]JC97~9@' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

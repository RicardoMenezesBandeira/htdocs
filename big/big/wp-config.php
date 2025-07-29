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
define( 'DB_NAME', 'big' );

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
define( 'AUTH_KEY',         'wWRryz~QoQoMyOub;p.u YXE ?!dju85kf*bx(^N36`i1s#^l]7Z:7}!v|%L3_:D' );
define( 'SECURE_AUTH_KEY',  '^2Z%9Wt4UUYVT%JOHDecs&,l.xSj7Z-AfkH8aX}%A:M^R<L*MX?STO^h}Hh!|dt`' );
define( 'LOGGED_IN_KEY',    'Kn0-&>S~l6#BH_3MV!+s>}rll .C_&VNQoQ(K/JvF1gIbSvfL0+I^:o 5l-ldwYZ' );
define( 'NONCE_KEY',        'oaKKpS<|T>yZ<[4Vfe~1H$6/zQOe1X9lc_%N2krDR4&mk7{-:=-gR^-YkGC% vAt' );
define( 'AUTH_SALT',        '|8SN ;yEq4&{@9AShG|bqc&r&~b<(KFLX`p]l{2WG|ZM},~&l Nubm6ixCCDb.ed' );
define( 'SECURE_AUTH_SALT', '2WE u[h3os)xpFd}S5Tc>q2M9&S<UE2i*oDUHy_0@C,=u }0]1yZkU19Zuk?#NuC' );
define( 'LOGGED_IN_SALT',   '.;=GBFV4H5.-MbF_dzR=24~{$PBpKBJDj;09-=~w%4p^,t_rpH_/k:A4VidASS2x' );
define( 'NONCE_SALT',       ';jb]L.G2;iy[)[&E$-?V}xyaSx^KH=Q3[TOgLGnU8EO8=EI{=#M5%^?[iKA$NKkL' );

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

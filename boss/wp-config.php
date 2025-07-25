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
define( 'DB_NAME', 'boss' );

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
define( 'AUTH_KEY',         '-n`iS=I_JlyDa.osbTn$=gF>lUZw7sL|1G/MX-iYL}CjRW:DTZ/i6K>Gwzv3DK:z' );
define( 'SECURE_AUTH_KEY',  '#%Y]i2KdOL9g5gNMp}j[*]TF%F[can*XI0=jsv&?E@i`8ElUe9Oi/rt@Pr9V9/Lw' );
define( 'LOGGED_IN_KEY',    'qynz08W(Zn-Qv 2)9es~AYc 1u-L=,L{ $1.[_OX~;ZUz5Zt;B*UcY@&RuLF_Gw5' );
define( 'NONCE_KEY',        '-HVJIc0aAZ5P^70J7Q-pGNL{j2/Byi}8*gs!m%Zl<bSy.C9V9a7~7&yEGP6]BWH,' );
define( 'AUTH_SALT',        '8xF:0 ?w+Bdm:0R /o]_%,y`vA%g2-[WnKuOmCOBegL&tsYK-J5{tv~;.pnV5,z`' );
define( 'SECURE_AUTH_SALT', 's=xlG*[70o5u33}6o?I&*h?PDv$Pl>E$Hf^hq>.WG*Vm5T~TF&<hN<vmp%-5<-z ' );
define( 'LOGGED_IN_SALT',   ']%_sZ)[CE6XirZ>UpyJ],;ZwW$XVx)~EFFXm:zk8=/@0kpO%G?]]JT:@$z%,9o=E' );
define( 'NONCE_SALT',       '-epQl,kYPBiZ6bEvxgw; Yw(O#!}^!p!6(S+s5.TDiRaG8/h.CGL<w*/_h`D5yP^' );

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

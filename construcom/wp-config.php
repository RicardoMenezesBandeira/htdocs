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
define( 'DB_NAME', 'construcom' );

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
define( 'AUTH_KEY',         '%+@^07(h0<!N`jU-T2F]:6RY:!`v+unT}r<M*rOQ 6(&Y*9qXl|VIUitwB~<.#`,' );
define( 'SECURE_AUTH_KEY',  '>1`&qx3$w^!>(sJOQ=&woK(]R=t-QE+hx_4p<~%<LiW=|< T;T1?6~>^0}@>DP_%' );
define( 'LOGGED_IN_KEY',    'ms e)JNc9j}^_!@-U4R^])sV#{h!02}Ee~pC}_.rxvMb)JSTL^J*3oE}KG)}!S=|' );
define( 'NONCE_KEY',        'Ms`,O})|s<TODXOQ)/6^,qak xI5+5M`x;o4Q!A!kaUc;#7*pb{ZV.gGbt$?U^li' );
define( 'AUTH_SALT',        '<I>nbMJfpcWzBg}J]*k{:F[G]9nu$FDHs{qQ7j0UURW}M_QbC%!(9qK:bi*i2ilq' );
define( 'SECURE_AUTH_SALT', 'V>c6m6cfR<{lGI9 f*>N!E1=0B>^0c&),FuNdX&g6SbJYLTP[3S(9!6@72r[lxlj' );
define( 'LOGGED_IN_SALT',   '#j}.>A;y)QDD^D-iB;tX2A}dxxXVx_Lw8{!!YVdnDX5vDzMC&ZXLiay>jd!8(oBd' );
define( 'NONCE_SALT',       '3V);I}PWsQL<MW$YvZKWL&Ffa<c#||UHv@}ib5W,!.|9wSwwG9m`1,+36? *VQ*j' );

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

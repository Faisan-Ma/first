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
 * @package first
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'first' );

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
define( 'AUTH_KEY',         '-ve{@aQ>DeB@{p6gW[bGhBII3Oh6Rxp5d0sli.!-)fY,o%+5sEEb,Tm0 0g 91>[' );
define( 'SECURE_AUTH_KEY',  '!IUEfC994.!W)IF;pS.WL;`P49: Wf!_{PE.*IO8K}j1xem*!p=VPAeJd*WrYgF#' );
define( 'LOGGED_IN_KEY',    '~:V;Ohg4$a^*bh0>u<q%P|hWj~a:ag.+)*!~z?;#LwQc#dPzA;W3-!BX{nC<F=VO' );
define( 'NONCE_KEY',        'F;U/DEYjst`tfC[bZ&_WA7yfLn+qM3/GpAD<LqHTG1-4^f9;(QV.c(6&5j7N.k[R' );
define( 'AUTH_SALT',        ').#IVb*A40L,iYyZB02rMCcAN!R$JrCt*Xu;FPO9vGv=+J422n7 FI#OHhbgW*&|' );
define( 'SECURE_AUTH_SALT', '|Lnlr3x}4!QmtNwN8qSv/0se|%u[Hj]6CW;c7B@Lm6A6;G.r,LSDp#ZaqEP.({9u' );
define( 'LOGGED_IN_SALT',   'j4<DlM#p@LGfiovWpiHprSvmT2^>e}l^5dc {YJl4_T8P5*5Ry+i0m8Qvk/H~aos' );
define( 'NONCE_SALT',       'IsXRiNx3[b&tZ/Sfw^,Y`0(svbr@*4>m8m=qO==Qa 2a)IT>PNDd^WTM9uo&Bx{P' );

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

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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         ',w`IQ`>6 / h%g0b{-_B.L%HgWlKq.^)<.Pj<*1L+Rqw8_nA;i@*.[B+qvV/xjAp' );
define( 'SECURE_AUTH_KEY',  'yVuR5+:fH?{mI<2_tTtrba/-*1Vori%JaQsEkkk5f98{v5bTG{P6*w,:5_eWDi#H' );
define( 'LOGGED_IN_KEY',    '/sLsc)?p!/Dj?`{U<N?7bag*#W2za&h45M_$-}Np6(*Dn^V:VrxM0?+R|T ;JkUC' );
define( 'NONCE_KEY',        '6QqWI]30M>I&B8]Vx2B#&l;X1%b]q{dVRNQ$:07t4]~wheChtlo|_CH{*OD3{v4o' );
define( 'AUTH_SALT',        '4UPB4q(|M]C.|76JaGXH)*7PA$:|)vxR[n<),x.14>n1@m,}|+:Y4EMeO;5mPBUp' );
define( 'SECURE_AUTH_SALT', '%0^z[cK<farS01/W`mK/5S({A6:86P4;ow3|Xp3M7^x(lY&%pF6H:l]RAJ(.CM9c' );
define( 'LOGGED_IN_SALT',   'U]9<${=Nn9N6AE}e^Ht)!ZXuZV(42hZCW9^g!|S`>QH<8}:xc3g.b)}Iar*3gqFn' );
define( 'NONCE_SALT',       'T<iW^n!p~gT/g0<~f3>Vm7aF=J0!3YaDY]W)LUxJ:lAR,@^Wa?l!S/i1!K87Xj?I' );

/**#@-*/

/**
 * WordPress database table prefix.
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

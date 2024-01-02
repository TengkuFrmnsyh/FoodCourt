<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foodcourt' );

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
define( 'AUTH_KEY',         'X<^>J(J@pdK][t6{4ar=C9[;$$pXp@R rP]D3JOq3FlDAdtNfz2:H4mu)vq8O~Lf' );
define( 'SECURE_AUTH_KEY',  't!yq|dxy}`WW8_,-ZU8t0u1U_2#C5IAdsBq.bGa+N2[tNeaIu*:JCP#G?BfH>v7 ' );
define( 'LOGGED_IN_KEY',    'jzNV]nl^1mB8D=]yUXD)*J<PaSpsL@ b}WMcD^b!Q6NSMfl*U`U%/&q&s[@DNIh5' );
define( 'NONCE_KEY',        'j`!X2IK$`Kfd,2/!LEB@Cc.oSj+i5}sO%eMVK.4rMJ@^a9BzJj3s:ERZ]},/u~0W' );
define( 'AUTH_SALT',        '2tlGEZ}<hRK QGxC^Fl9|SMs@biwoVC$%{b(G:mW1K=3#}OA,S:r0>nZt4F4Rwdt' );
define( 'SECURE_AUTH_SALT', 'm<PeC7$G/t|v+ Y8K-DcS9/s~qZI;~)UMb $VE8C>/OsT4b,cp(y^``--4]Lm`ze' );
define( 'LOGGED_IN_SALT',   'p&svk&*mVk^P,I],:pePPpOl_XIU^prFIP:3/J.Ak-qi(%x^|6:yFOKW=vZ,mL({' );
define( 'NONCE_SALT',       '[Gfz{A)d.e18)Z(e-~ZVfz>E(?`nOii; ,6DP {]ucc(slHv~t8.v*bH1|FOBUMk' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

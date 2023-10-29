<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'project2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'SrhgZ3`Cf#%MG|3UEb-.)z:j.D8/08;V#E.#V&Fn4<R0p3qR[b(1.0o*I<syw ]0' );
define( 'SECURE_AUTH_KEY',  'BWT=KGsX$W2~+zWrL <A6x}O[Q18FT&V./4!1/8*VdZ6CjI%mJd(kzN!bj^_*zh?' );
define( 'LOGGED_IN_KEY',    'w6A6I%J*rpl>d24(3QHeL5)xzjjuI|v.KTXKzT@^>i+1}-9}Cd`?e{(xHaU(pWW+' );
define( 'NONCE_KEY',        ' ~TV=5LF*&k:5q^y4g!B0|P|x^{?3vRoO]SU2y%eVSR0A{r)8IPv*Y28$ppa_yxp' );
define( 'AUTH_SALT',        '0C[|*G;za%C0=k5WAh<y;DX g*#vJZ~hD ifT.zPD;r<4d,CmEy8rPLM,M3nahs{' );
define( 'SECURE_AUTH_SALT', 'Lr(%;pIMp^0RD)zI;`Q(UV[,,Mt,2|0#R`S)98</P`][gN(E`0z.g66Zc{k0{Sc5' );
define( 'LOGGED_IN_SALT',   '`yX2$O;n-*DR$&lw7+l[=s24_|Y_Rj*(f<~Ql<9}82c_ti/<g1:2UK?z,*a<?jS_' );
define( 'NONCE_SALT',       '*w?K>OErBZaaVV`K|$TX&LHn:Zfwky2H/ydV=< +n~Pv=oUH:VgBEqRK*]2R0_:/' );

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

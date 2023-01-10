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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'm3/<wPTEYB{OjPAc(0a.4j4[i5E,f9V(|tY9XZt.jJ/a4gvwb-t(Z58kgG>qdky9' );
define( 'SECURE_AUTH_KEY',  'E56L,+=9n?;Hxd`A2TV!^2_#7Bqjd<!gFZ=#BA$i;,)8C:efYrPS7)lRl#-I3r $' );
define( 'LOGGED_IN_KEY',    'n[Mk=WUfat f7x_tZcLU?KQEMP{+92u;c;wGs9qHt_:MfmZ_s8%_x[Pe}2z(RusN' );
define( 'NONCE_KEY',        '>e*tNe;bW*kEzCZ8 OKcgz=/2Fa;6uFiOA+9g,,SO.QEXaAD45}(IXvQM~/RlzGZ' );
define( 'AUTH_SALT',        '/;WNpEOd>,-$RPA7gBiF0<U/XA-.%:uxY3Y|(_Y8Lst^Y}}om%C2T^ZJK6k4%x^9' );
define( 'SECURE_AUTH_SALT', '&Z0?t]99iUy?,4<2B&k$ksQBx|g8ME+>lMs#sj1;bW=nn[ZIo&p1Qk{YWby@n`o!' );
define( 'LOGGED_IN_SALT',   'v#@Vhdc9,`ktU*Htn^q,+c_+m Shy:YhF0;k[F&VzGldOgc4e(r)OLB#gk6cro$Q' );
define( 'NONCE_SALT',       'Ms@;g,4guj&dxVo%{<3aYh);A3n gdK/B]/b_d>(XJ$!a{%{M(.)vib6nu^6_,Al' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

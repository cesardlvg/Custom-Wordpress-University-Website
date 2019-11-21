<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Fictional_University_DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.VLe(2O(R2U2%y>h,]!Ey039e4Ziaf95X)qzA7SdcoOHGn1q[1%inI3:UdQ6Q1l@' );
define( 'SECURE_AUTH_KEY',  '3^KV^5wY(8QWt[6UREq#jkHN>Z#$D:_1K7}zuYF#lX2INv)_0bu?Izfdi@^<3X1+' );
define( 'LOGGED_IN_KEY',    '~{DG!r-yM5N#f&cZS<_b{3iD]HlEaEE#&Z*wfj)cqF|Jz*;Pe;(eb93><p;^P,[p' );
define( 'NONCE_KEY',        'S,rj!f}^;ZzFG>wx>`9?N}X14Pc$k&J&9DF0uEU&b,Jf5#Q3(m[9P&aSqBca5m&V' );
define( 'AUTH_SALT',        '=Ni$U/}pR2=K6B[D]czCLbh6PJ~#}u?.t(4H`w(wrriwTQm[k]<f-:b4C9/r3L?<' );
define( 'SECURE_AUTH_SALT', 'Uv<e]|Avb#vsje&?qm$ng?awPP*bpqslZ`&c/?dD>?uzD8i~8p]:4wCyk3 yJn;X' );
define( 'LOGGED_IN_SALT',   'JA$-b0(r@92;NjzGaD[nz_#>V;^47jm`/$Yz[8zbMw[!ngC6x>v]0~Q2g5#jNKz/' );
define( 'NONCE_SALT',       ')}az /Uk?7s{k7YX*UR#k2dmfakH~30ZtGgy,C2+V#9W;P5u[*;,CfF7sWMwo,FJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

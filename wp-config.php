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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'courses' );

/** MySQL database username */
define( 'DB_USER', 'dbcourses' );

/** MySQL database password */
define( 'DB_PASSWORD', 'coursespassword' );

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
define( 'AUTH_KEY',         'Z^$5SLB< Ko(gr T+k{*+@PUK$POLf*=jLJk[qRW,g6&B9Amn>eC5q{9 RUV$Prq' );
define( 'SECURE_AUTH_KEY',  'fhmsy=U[HzeRd$)A,c*Hr|ZV .udt@c_}:)uH%aU#c7xMUZYIsu}jLnd<J):h1=y' );
define( 'LOGGED_IN_KEY',    '7dtOX+E;y|[58^[^9wTX%0K!p#9Lrqo@O+yWRqodzi0[a&Y0/0G&?N7UIl{H;5X=' );
define( 'NONCE_KEY',        'g >rstb 8[zY++4M :z{3Kp(HB7L[bUPkP+{*#pP~kLyx Wcq^u-%{JH~fGX9-CX' );
define( 'AUTH_SALT',        'E}c&K%Q|$/ZTIY/N0Tzbt6cKul=Tk=RsZn_z;p0-Zrp_ei/~m`puGU=cs)Oo^C]9' );
define( 'SECURE_AUTH_SALT', 'Y+o#~7f)byK%|?0}c-T-/+)vaB/z3Cbfj.GF#N?+!$QExF6X&v|q_0h^%bdMGTr2' );
define( 'LOGGED_IN_SALT',   '0atAP)%-X#<IBDvv( Loi}=vLk2lZzC=/0E6V7KW^szudQO>y|Oi/)dWeus)@3KB' );
define( 'NONCE_SALT',       '8:pzqRt@vIfHq#& +yXVVp(|KOVU9;K0$6Ptv99HdUO@fT2_xQ*MBqm.]8(P+h q' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

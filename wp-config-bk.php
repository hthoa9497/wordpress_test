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
define( 'DB_NAME', 'wordpress_wordpress_dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8_unicode_ci' );

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
define( 'AUTH_KEY',         'a;Eg0 ~v$g:|9It&BlrPOi.x)|]Z>;{PrP_6L]n$!_tbWPhcSt1Hw@ktDbv|MZ4W' );
define( 'SECURE_AUTH_KEY',  'dy;X>KGhIOL^1}>s?D_~;s ;]]`tj/a3:A&YUl(<3u6`p_l6l_YT|6]UfTm4_B1_' );
define( 'LOGGED_IN_KEY',    '!tSRkj)y$P0s9z10!fwf_-,:k-Z#8C_Gm>:@H}<Q=P@9<hua8ZIRE;3fGr0>d&i7' );
define( 'NONCE_KEY',        'Oq][=-{YA/= o}Pr`:YdQ;H2!hZ?[|quAZ)Bq>Gi~/6`ff :Yz|is^fU!>)u-Wyx' );
define( 'AUTH_SALT',        '2T,>~Q:~14j]x[iS0 DSAv@KwQcGSJ8YbEaI:bkk+O4l4fE87=^A]ZSp|7R!j4.c' );
define( 'SECURE_AUTH_SALT', 'p[#H1N9(m&ZD_n?Ej0FE?C=J|T`F]<1!-Z^I7~aF82<U1(XRG`N`5sS7Qi|=!ds/' );
define( 'LOGGED_IN_SALT',   'FFrW_nj:5dV{{1%9cRfHo9A=fU(SM%=kPjAq!7gU2<o#5D3T}tf3cI3@1NjJqmXv' );
define( 'NONCE_SALT',       '=oTCIIeCHLysuwC nuuN_);[:/-!AJ7,t<42wGDCeF7ci|37_BYSe;Z^&F5Prk<L' );
define( 'FS_METHOD',        'direct');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

@ini_set('upload_max_size' , '256M' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

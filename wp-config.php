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
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Install themes and plugins without ftp */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&6x?YT1QFk6QBJ%/[}h?@zGyLDRMO~q.1oh4,(IAqbyPm(^ppJcD,A^]+Z3kl?.)' );
define( 'SECURE_AUTH_KEY',  ';!K/_~Wj];tS@c}YG.QqK YuE}#aU2G<4HLH<&tgv^S@3CI_}jE^3VXK7yOL)(i*' );
define( 'LOGGED_IN_KEY',    ';Ik9NGC8x?%>v$YZ<NJn!D|+k$|6Ci2[<_M6%C:ZmDAb60M0;$+SAf68ld8;RI%0' );
define( 'NONCE_KEY',        'ewGGhZZ.CKg01D#dt}u_0U@5M{0^b3DyFH5p@_>*1t7&6qK9O9RcN37~bGcu;IK>' );
define( 'AUTH_SALT',        'T:uqblt;!-d`T@0FCN8J^ h8;KIOt3xwk$OGg%s]X;nV]~zbYQuN*dTRz]G0YR,>' );
define( 'SECURE_AUTH_SALT', '[Xty2EBO:/ql=9w:mCgE1=z!u(S#W}aR9K|sqUFxi=Uh^lBflXA/9(<ZvV?X] WW' );
define( 'LOGGED_IN_SALT',   '1:f0&y.RPlY!D4+5f#wMGYV/RUzF?u3FW-fS<xNx2M(mHxyD Q.1W0,1: +;m&c#' );
define( 'NONCE_SALT',       'X nl<ctT-t1qsrUoKQIRp3]K3>q;Zh,{s!g]#;H:w_IaA1m2FM0[k+vNSkRb>$*S' );

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
define( 'WP_DEBUG', true);
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_DEBUG_LOG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

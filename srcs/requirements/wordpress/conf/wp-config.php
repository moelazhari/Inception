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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '3piJ&26PowWX08 g>4{Qy(0oYTi~X?{@:Y9:{I|k8|^3NF*3~TxX7n`(-#YhXj.*' );
define( 'SECURE_AUTH_KEY',  'K2o^~RE/q4~|zMVFs:zZr82Ctg~l:Z>+<]Qdp rq!wv@L5Rv(@5Jc}_PwU$;%}:2' );
define( 'LOGGED_IN_KEY',    'ZHNS cCErcC{X(63hWIc>]:bJ)Y$*hj_BKf$`@ZN/KXKI>fH^%ecI0|FvZfBRu3o' );
define( 'NONCE_KEY',        'p@XH$9.Yz.w=V|L@J@>?9t-Y3vl$5J3YGe7GEcV4/h?Ct}{GJtM+TeV {2flyJ^C' );
define( 'AUTH_SALT',        '}P2+%Dp|.9wX_2|D73pVgk]2}Ue:j:<7IV)WQJm}TTJh-PzGL(tF)-9P-~VF6F$1' );
define( 'SECURE_AUTH_SALT', 'oas`%]EnUjhUwOqTE7~$Z#61([.3jZX`|:RI,kfgkzTp5[]Gi7yph04. a5F<Add' );
define( 'LOGGED_IN_SALT',   '?PXk.{N8f;-uUUXTMWc9&qP4p-[^ pcf5 v8eoXE YR4`z@}C%FE>]wl9,*Fz>$T' );
define( 'NONCE_SALT',       'HCn*jO K475^--w2?nlV%xmrDFe8L5$b$$7JD}OQ_h|%JJ!5R>%Rh$o{GC9_gvg/' );

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

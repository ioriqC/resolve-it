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
define( 'DB_NAME', 'resolve-it' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'uhJxOvy+V 3DR3CI._$vU3#MIX@)xrDnJC)|>9S|,RH-x:)j8jiVZ*1KJDa:dI|s' );
define( 'SECURE_AUTH_KEY',  'M0p2zXD_d/(G)Zu1D`dvTIG0hF/T}zB~Tq>YLz ZPQMk_`x-swe8DqR;fu/^vO_=' );
define( 'LOGGED_IN_KEY',    '}@;CDiSrO[jMTlhw;Hg*^Ws[$;zI;=MX.~7-TgJ(No>rRpVqP;<gvb}+Vxe^sqNo' );
define( 'NONCE_KEY',        'HN}uwl(~nx_2^0ZO%RY(7Ff8I?E%8yj:zO?9gbK<Dlp.bgPs}_I,zc&|J>_3/(l{' );
define( 'AUTH_SALT',        'b.j@@Ry_15o/rs%*A%t5w* {9[|x.)fOA2fD+;pPu{Rn^jDm1^q3_d5JY*^Q|[R?' );
define( 'SECURE_AUTH_SALT', '{>5lWu;J:3#bLy$(8v@6td4)=_AdD* m<M1w/J:,r_I7v8r-~T}t-$Gi+9@dTu2?' );
define( 'LOGGED_IN_SALT',   'P(]<n:mH r>@lQ35,k:*4cx1Zu#?8+:x5h$U/@pHS39vzLJNObY#q{`WTMjpUs5Q' );
define( 'NONCE_SALT',       'aCE=B?,~5XHrlDC(OVSy%=&TlXy~|RNpbb@@ ^|S*R)gfk}R6.8(W3}*V3U)C1m3' );

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

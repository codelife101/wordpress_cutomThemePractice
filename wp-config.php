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
define( 'DB_NAME', 'wordpressFormative' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '9<-?QHya~KZZurL*]WfjaTS`9lH4P>xhQW$QsBirdrftpB$K=DrV]Mx+W+G*^[e=' );
define( 'SECURE_AUTH_KEY',  'ORpF3T3kL&KH#*qwF,=6;n[5+^6I?2L?j(oggA^MKy|Sn7>SXf4|iYFp <ySz&m-' );
define( 'LOGGED_IN_KEY',    'suQkN[^2hUlCF3+5Y|enmG7@X3Un[+uIUZ+z-ci2)[,haZhzcJepa(!zjCV6-^C@' );
define( 'NONCE_KEY',        '+fb+Uf:4t<4p?pVu|K T#:Pe1DruYT@2(5QX1.GkCVW&Jpg}2G|IiyrLV-g[#N+J' );
define( 'AUTH_SALT',        '&NDQ88.SAy)Nc#iS?1&ee:c,M/`RaR.NZeO5`-o8ey}&LQ=j{dd{J/!)2u&@5uDa' );
define( 'SECURE_AUTH_SALT', 'BE/x|E<4{5I,R}AV@<Q[$+;HH-Ae[%,<QDp(NX_m~.lJV#^@7s53|]`6-cGhr`SY' );
define( 'LOGGED_IN_SALT',   'G,Nd**mLGIE{x4z[3.s6#O1?m5_#6l1N2.gO@K|B0mtIsfm_mbE9T):IO`!{E~q+' );
define( 'NONCE_SALT',       '9Ax{|M$}V]mwbNd?]xv7S#Hn|Eg:}qGwWfn:q`hFWXk8&[cjc8e>tM2oYf!h.qzt' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

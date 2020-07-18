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
define( 'DB_NAME', 'sundersalescorporation_db' );

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
define( 'AUTH_KEY',         '`9,=&u^U>Z_.~ANPSN<j=|vc_R&2zCf:qhJhQbTRs!e8lhi,KC|JwW~XJ2#D]$uF' );
define( 'SECURE_AUTH_KEY',  '&b~/Krfbj4{v8/P}`ygRQ6KiV1)mdN1EtKB6f_u6?:.l,O0HCkfD%-rRg)qgE_(L' );
define( 'LOGGED_IN_KEY',    'X59gl81-Y&JoNpQS.fcL}(xkk_P9|h*H:05#KAQ^W*EOQXif!S&:|3~M<,P:*i;G' );
define( 'NONCE_KEY',        'qWwE>rAm;SjWrvl(^+>`WP+}+=)k=EO}e;l3bl~z<EKdQfItWNNd3u2w>DyQ.ln0' );
define( 'AUTH_SALT',        'b0Gbvl7V9Zu2?K:4UG}=:_ *wbuD32#M8p}yH&+&2,9!s~b{=mB2^M1`-RG^iyx0' );
define( 'SECURE_AUTH_SALT', 'y8Z:%xuE<,9C&n$C$42Aegb4}l]z}6l?mb-/Br{laW)PyM&CY$>iH72F.2nHLZlo' );
define( 'LOGGED_IN_SALT',   '`MXE5{R^j{9=*f(DsZ1(m=R|s1&$i>F2x9%JexP@vTw<X%5hj08:*ND[ E!=EhC-' );
define( 'NONCE_SALT',       '4(^rL7FI([JV_?Wk2t(-!D2G1Qj9m*@pq=6n?>w9alKJ{Y2c%8J`/cn0w8[NYpAM' );

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

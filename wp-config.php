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
define( 'DB_NAME', 'NajibLabs' );

/** MySQL database username */
define( 'DB_USER', 'Najib' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Najib' );

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
define( 'AUTH_KEY',         ',osS#hI([ay0T3Qq)V/n4Oy^_^dwzl)~s1Xn`VXl $o+o(IG?MSZ o[pr|Jsm/2/' );
define( 'SECURE_AUTH_KEY',  '<Y/>kM{iFzZ*rolo_|,5NnL..|^{StHX?ZP1..9TlziXq1tGYdaGI^1*JC$pE#aw' );
define( 'LOGGED_IN_KEY',    '!MFX]gkc#`ShXPLrF]~($SD Wz^/3>_4:__L,1w8*NsHzo4nz{:~>zSx2g:HorE5' );
define( 'NONCE_KEY',        '6ID$+Ub8Pt8*P:ZHFRA}5?ZBUK2Lk8^3Px2({8tvW=1KrgIVDu4l2]E(io5W;](=' );
define( 'AUTH_SALT',        'n9(G^o+8k3l~KxIwM(G-s9v<bsJ5(;@5jn1DAbxtp8~?m0V+#BdM1B1Ik:?wt6CV' );
define( 'SECURE_AUTH_SALT', '{l(Z}5h{n#98!Kc$n?FDVX|/ZYueU!$3fVG%sv3(C)J0zYGN]k:v?$3$ANWm$`L ' );
define( 'LOGGED_IN_SALT',   'Ck>ql`L+te$P#CJWGYhNAK{m9iM9X,F3F8=oK@SDlH*IQ_/mixHqoA@v3FKd +}x' );
define( 'NONCE_SALT',       '5@cQ[0Rt% =GDX[!QI&7ZW0}gHfE%fbUX$Ka:#p,?rli$3}GB&+4;aQn{dy0AMB{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mg_';

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

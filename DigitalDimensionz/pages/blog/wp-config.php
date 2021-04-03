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
define( 'DB_NAME', 'dd_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
define('CONCATENATE_SCRIPTS', false);  //fixes admin widgets not opening
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
define( 'AUTH_KEY',         'AXpQ]j. K=XQx+rNu{dHL%B_n@7E{ihXCk4@Bqi:OL= R6N#5{HxgX$ibT/b^g~u' );
define( 'SECURE_AUTH_KEY',  ' 2OMQt&Y#d[ei-!CzHWw$o{#@%#&r9wL]oul9.6.g19hYL(lhnqVj_`i RM8q|#l' );
define( 'LOGGED_IN_KEY',    'SGMJ{4& 8!04MFm@o6f pNx>Jjvlz/=[U:@la8u6ZYN#93s:6m{W;GZ{y_@{ovj!' );
define( 'NONCE_KEY',        '[D1tN7),zgWSfDGp6sB5:KtA~l679QEMa%+ovD0Kgq$8c5pwh5 :kB6qd/9JujFM' );
define( 'AUTH_SALT',        'G.Ykz`co+{af72 Q$w9[#g(?Ah<ZxjE`Sa;MBIvZ0QK(1p908!PQ?IRPsu%4gAo ' );
define( 'SECURE_AUTH_SALT', 'Cml0?j8-/]9MiVj0Q4|R,Y]So{4of&0&0?U=)KG0T91daEiG}KKcmxE0J<x0fgq*' );
define( 'LOGGED_IN_SALT',   'TW]It3,Y`TqA`OSlM5J{qf`GFc:Y;%!nZn1p(}lLc!o}NGiN5.Ski;iqF#3XrOCO' );
define( 'NONCE_SALT',       'z9F~vO2]c,@A8<5yE:l~1zFA%9f2:RV)A-R*tV OVEC$hS+k-yzC<n|lfP1(6$e;' );

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

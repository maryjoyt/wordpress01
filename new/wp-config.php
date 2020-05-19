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
define( 'DB_NAME', 'wp_01' );

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
define( 'AUTH_KEY',         '1Gl-HpTzwmiq2GIf?u6->==1j-.4G!WD,f:t[u_qw|3J]~E,i~~m<Yu?YS*LXH(6' );
define( 'SECURE_AUTH_KEY',  ')^ c]^1C=ie/XKS6+fry|@.SN#W&i}I@Bq|pT+x7AG<:jS*6a/h$fP@HX4}a5i>J' );
define( 'LOGGED_IN_KEY',    '-,tR3DB$EVO|D5tY)TVm$[}e**2zE?#!TLjH{P,bzk&pNeq&y ;vv. *j[47?-[*' );
define( 'NONCE_KEY',        'aM+36!!E8uZ,:NAM6=g}[gpY=e~<y]lL9.Ii_OPFv_EKR y,4^sZdQUq:7/cH$Tl' );
define( 'AUTH_SALT',        't<E2` s.ky2f+?1QHXn((/@3b]Kv~q^.V:l*J.C&oqv!dq75<m|taJ G;Ux&>#_B' );
define( 'SECURE_AUTH_SALT', '$Zi:_n4Kmldwqar-F7@TPddHsA-a|C_ adJ8eDTAJ:[LI5N%`d$21Y6q#rI4`~Q*' );
define( 'LOGGED_IN_SALT',   '^/1$$0{YN.?h+;lMp[JSzJ?r?&r,g(MBt@bc;#Rx7lt10<Uf0Wp]OP{*?)1<ihs0' );
define( 'NONCE_SALT',       'YJveWKUg~T|pj|4#M,~j3U<VI>Y>%:yLP_,lsG1&Cd<j5#LY+2l$x(r$`OJ$cR,k' );

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

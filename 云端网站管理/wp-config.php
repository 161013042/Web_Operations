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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ce21e0c3043bcbd83d7906c56e4359e66ed55bb063d02edc' );

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
define( 'AUTH_KEY',         'q<G2h!({v-57P|F!b/D(HOXmV5m63/nRp^_wLbuK=_mQ2ED^]m7(d)y.:6<o]iN.' );
define( 'SECURE_AUTH_KEY',  'LDH#0Y`iRK,W=oX<~`YIJssy5tM%I@Eq>n%(^CV}BU>9,g>V-BCFp:4K8pnON~&O' );
define( 'LOGGED_IN_KEY',    '_M$$qybEqBVr%nD9`?~hW5]d>jH$%H:RBBW_T)0Dd0=:;v@-0 =Ub$f3OR+>h(t0' );
define( 'NONCE_KEY',        '?AL]Y[+8{RLl>3t.,~iyX^Xm#~lG`v2nx&ik=i35 Bx LwBoF*hZ?t0OL{mD#$4@' );
define( 'AUTH_SALT',        '?X0?>XH>6T?uU@c#yk|/%4~zsiTTc5Q`[1{-%k`yE(~k;Wr6_?j5 (x+*_?:+$Sa' );
define( 'SECURE_AUTH_SALT', 'v~Xr$]:qcf}V3}GU*cDv5i~:(MYF~MTO{5zMlc,&nicf*Z7;gp8#srfZ!_$)#n-_' );
define( 'LOGGED_IN_SALT',   'Ycju8r8XHG.E?p4Y1q$HOW2.DMLI> DO*aIA`Hf*N|ww6{6k3NX>o+qDOc=+L$(P' );
define( 'NONCE_SALT',       '`eim{dRyPMWN)l^![O%Q4`VslR8<F{7?ujCNmY/9(aSdA;RKZr)DniFvR(s`w[X/' );

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
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wunianliu.xyz');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

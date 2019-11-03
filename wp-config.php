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
define( 'DB_NAME', 'wp-blog-2019-2' );

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
define( 'AUTH_KEY',         '#5x@|(cjh<HoFaQ9eTVEH^ckUrcjcJysi|$Ef?RFVx!crl9bo^3Up,TgV5|EdaDH' );
define( 'SECURE_AUTH_KEY',  '`wd,1d{g+#%2blkb^PI|x#%j*inDbxX,&}~ulP$<<7FZLxs=Pc.5+fQ0a#w>}OxY' );
define( 'LOGGED_IN_KEY',    '<aV`Ox8|S(tbV(e::{k Q (WJt&65n[6+4@T:Sz_S8&^!:1+Wy>K;%|%i|(Tozv$' );
define( 'NONCE_KEY',        'MJo I~G)0uZ&bj+j=M8`3d--s64Ne=0_?IW~p%o-y]WDSOIf,,@<b|xw(umMf>0S' );
define( 'AUTH_SALT',        '=7?uV3{`;+ UeC. Yl|F/e<CE/vF^`0>yx$FcMQ,jLK;2`RQOg^Gk:*ch(chYi4?' );
define( 'SECURE_AUTH_SALT', '($2kk?&n2u8Jm=C/@;OPm;rO3AXx?K AqZwv3guzj4B/=y]_ga=@12vravhJVT[*' );
define( 'LOGGED_IN_SALT',   'urpCYJBMD%wgbLb?({fU%<:QDhic>Mam(VlK@NcABN@s8M{S*wUG:(AANxVK;bx2' );
define( 'NONCE_SALT',       'H3v|8~Rzc3iTY`yT!dN]2$0,S#e*JZ1M4knv!V1jGFs]o,a{O=0sk-xzQo#lp4>9' );

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

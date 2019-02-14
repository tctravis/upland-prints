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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'localhost_uplandpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ';4fcB~gkkYq1hgw= :DGOl9yMTN^]UcCA@&{_vD`(l=koT3e+kc4tuHz&8`j$^Si' );
define( 'SECURE_AUTH_KEY',   'dC54)@~UQn(x;fHUR(45K8KKUKOmX$GTK`.X<_}5rw3hMns}T:e]]k7q8Sig,-/X' );
define( 'LOGGED_IN_KEY',     'vDu}/^Ff;HuVz0L-!Mm`iXcsO(2K0rO @cot (vc-I4|`t9hMV/}3;}@~ms)eVL3' );
define( 'NONCE_KEY',         ',h}rcCC)k >ce]m/mfQ$8!=$m[nBg|Ka3B ENUQK_?Wt/[o->Qk|b$,Qi>lwUORp' );
define( 'AUTH_SALT',         'S|Tradu0rL{#wcjM8(WklV#=hAM%B=PvM?|vX} 5o[cUv:]#m3 z& =0dC<j9]3/' );
define( 'SECURE_AUTH_SALT',  'xA2N,`%M5[^=aMl]-BIWm-3jZ$6/h_1[<FdugqW]%sCo|0{sM:|$A}k_+}.[I%_N' );
define( 'LOGGED_IN_SALT',    'VHan6<IX-zD!_nAE=_r!+rgdc)6SxBCN*,+r>LSHpO1|xja+v~vDvS4^i^e2I)ho' );
define( 'NONCE_SALT',        '};PHO9Lwn:QuCij;v-2jD(pQ2_0w/hn[ztwh;e+LR1<q`6<Pa(t</MOx=23ppu+M' );
define( 'WP_CACHE_KEY_SALT', '>[o)PO~#X_it{MKz;ImHwy1G/dhmo6g;TFVv[iqy-b_Vly_~L-jycDp~(s*7O%kD' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

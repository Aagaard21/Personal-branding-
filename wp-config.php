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
define( 'DB_NAME', 'rasmusmueller_com' );

/** MySQL database username */
define( 'DB_USER', 'rasmusmueller_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qCRWK5JUbRhE3LuCmEVSSZrL' );

/** MySQL hostname */
define( 'DB_HOST', 'rasmusmueller.com.mysql' );

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
define( 'AUTH_KEY',         'Rv_L~.DO@1sffeB,##`|%(>grHr0!CqrKhojbd#550<]:/6N/W2PPv zYxJ2+c2x' );
define( 'SECURE_AUTH_KEY',  'N)w|h#pev2pxdR6[mT1&Xk|FwXYg$8K6+2H Ep;pc]^AeZ2FZ{j6JP~`@ABf)tJ7' );
define( 'LOGGED_IN_KEY',    'Sxf|JGhKZ2i|CcHs?~41:m~ANV@-@cMi!ma76O16C46))?k*)-d%Hn;VJ3CB&PUB' );
define( 'NONCE_KEY',        'hjM}T#@28{Tb*Rs6oh<AjZy:6JHe*ttSN|E|u8M QPM_xAH%Z&=1D11+Ls`C~K4,' );
define( 'AUTH_SALT',        '4nYM5pv}q!M.2b`2NY9ZP~C?skCzY-Z^LurwLJr)9.5bwXa]^;%GCvtc)sv:!y W' );
define( 'SECURE_AUTH_SALT', '*MKNK:[_7v__#<8fh3(v_<_i9}}z<cWV^a<+J|q0/ZyN>|/xpx$vD]KP^pHVM @X' );
define( 'LOGGED_IN_SALT',   '|P@I1fO03v=wt%b>lFjf]iwZrVoDv9-[`?:/@%>yW0uJ{H7;f,#_OQ`^4hkjfiA)' );
define( 'NONCE_SALT',       '2(LCN{n8nKR;0(FIU;jV3I_]zf/QU<5uy?=^V&L!BaNPwphuQA!k9fe`[lATbs&0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'basicwp_';

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

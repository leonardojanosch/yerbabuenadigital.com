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
define( 'DB_NAME', 'u957504831_xelyp' );

/** MySQL database username */
define( 'DB_USER', 'u957504831_naxam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qupeMedate' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define('AUTH_KEY',         'iz)vHH-O@Usz*WGKVVb[Fs/,#XISc.~t0)RF|v7b-$L=m{[(*@Fz[3R?vwL%?u6d');
define('SECURE_AUTH_KEY',  'Vg+wwKxT+GS_n2%rd=Q|lLA?vyf:`as&pB|QQLC2+OW-~/7Tk7Ls/e1]gbSs_BRx');
define('LOGGED_IN_KEY',    ' GoQ_hqrBt?6VzU7&B*w#w$-!w[L-S2e.@U`gL:7C~mXM|8k1#&RAaM[.eKPcfq)');
define('NONCE_KEY',        'Hl,64J0j0OPvy{9[,nDZ`|,JLXn+]{eTrB913kKj??l]Y<=-}!Hlz?l@N-%xE4z+');
define('AUTH_SALT',        '29m<1$=5g7@RmeZIW9$o~7J$3+A`)d3Gb(WpCt.J#G8hSOm#{wo$,,$s)v8;1GN{');
define('SECURE_AUTH_SALT', 'O0mF:c/abzOv|LlB/cc?Ng>JRp[ea ~P&N}Jm#05X#~naw+>k*e5qyT7Ub,8o*gT');
define('LOGGED_IN_SALT',   'JW|fS(*1%g`6*1=AT+t%3]!rI|H8[eN[R7pm%lf+y2HU`-2+.auHs$^8#mm:s(1=');
define('NONCE_SALT',       '*;sX_&XH]S-[67utK/X;91rf gr%$=28rfMOSU@b2][b(9R[l79es3J#~dp>*wnN');


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

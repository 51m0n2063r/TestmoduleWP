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
define( 'DB_NAME', 'wordpress' );

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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'X++;rGv78vg$NSvj1fH{A!8Nf)vQm5]A~+wW{EU8Ej$ZP8FX|!31UGca^sJBKd4X' );
define( 'SECURE_AUTH_KEY',   '_=Ap`!x9g_/uJs:S{f8AktKRb!2tb~idKK;2a8<&mjbN6^=hZWJLi8H-K7h!%jDc' );
define( 'LOGGED_IN_KEY',     'HBx9.C*clz|7 Q.@!]b%@MF#}7!Wu(`T20 %,RqfU5ZZ^^;4TPRSr&6(F-[9N6i`' );
define( 'NONCE_KEY',         '1l>uwye</DRJ>HAFH=y$aKq$t5|4#Z~h7>s3T|BP3}}ebAAj8~t_j>%Q2vo8.kFi' );
define( 'AUTH_SALT',         'D|`/]T`@ZS~fR{J(I@*q/;4>+InvaoSc6Rq.#J4F@rsG~__BlkFssYE$[qq6.Lzc' );
define( 'SECURE_AUTH_SALT',  '<nRN;Hupz1&xZ&/b8/qs8 tC:ElcZi+T`0_}IOW(QLk[Md((FN.7tTWA/R)7ST;4' );
define( 'LOGGED_IN_SALT',    'Q{3:i!K*#Wq9R3khmL_G=myR/2X6Qh|9g8T(;|$4$6R8c-i#eK.pI0hL/@K-Pra:' );
define( 'NONCE_SALT',        'M,q0?t%R*6v.M?g=q95]?g2|k2}8XU.CR:g#c,]:-A8bI7l3T}F.7saQ8,8ZUpMn' );
define( 'WP_CACHE_KEY_SALT', 'VIs Jr0Em^7u5qm:@5<9j2I=F3,[oQCP2&N1(Y|a#j8 >7xk rU Ts|`N&W7:p<V' );

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

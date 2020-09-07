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
define( 'DB_NAME', 'immo' );

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
define( 'AUTH_KEY',         '<gE6S&e>}avIVoD2?t7YFuz.!L.dBo#0,s/]t-,}<0@}i|5NeK1_xU$ET?S002QP' );
define( 'SECURE_AUTH_KEY',  '%G:tEHpAblJjQf+^a&}{~Fu{t$1xXbukkH7]}ueZ OE K2_<#IJ?G^L pU(A>8XH' );
define( 'LOGGED_IN_KEY',    '0k-rq)!(C{f){9!4X*-=(i{~H+F+k&(l;!cA7@*S=~GnQO/ERV$o^qxn`=!%.X+_' );
define( 'NONCE_KEY',        'rDajL!{e FXL;pg9Xy;bc!:cD6WB66D@[f8.39crDtOY9ghQ=k2j_g}8t,cp%RFR' );
define( 'AUTH_SALT',        '_y;2Hp:*7<@$xht7FC]pJGxC7m6hNt:wzCOf=}nP)!)x21]TZP?&G+^tRfmDl)z-' );
define( 'SECURE_AUTH_SALT', '+hyP3@P_6knAV4ku-=bDlD8i7KpFFV?-r86X5HFG%6<t1-[wPy4~<U4sxyPN>sFQ' );
define( 'LOGGED_IN_SALT',   '}<Ko~u9{!aFBm)J_nR4u-z|;5@Uk/HBkC2{QNFqfGHZzrC=vjm]Tz2.pUn/J!qCB' );
define( 'NONCE_SALT',       '>7q:uX{,]&@]D=6Hb|UwY+iO:FG(>@G8Y68g?T+`r,(1OPT*,`@_q1`H^PeonTG)' );

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
set_time_limit(600);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

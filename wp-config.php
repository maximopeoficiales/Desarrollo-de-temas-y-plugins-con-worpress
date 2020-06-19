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
define( 'DB_NAME', 'gimnasio_worpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '`vsFIlzJyK:`gGe7)r`$L|A1Jptv,phW^<<6y]5o z{RXS>1khycLq)*c@V^B$c]' );
define( 'SECURE_AUTH_KEY',  '}+WTT^Eho0mY=r-:4zV`nW;g|kKE WO8jt}$ttX26#F.TQHb,8e7UiI*]W&DGamn' );
define( 'LOGGED_IN_KEY',    'cev#Vp1sa5}mYhf[4J*oH]10fu]<aXP$J2DTNhEv&H;a)C+orB1cOQ|A:*BzEcER' );
define( 'NONCE_KEY',        '[^I]/Hfeg.dH[Kp40ay<fH/f(R=%L:AGl7|L5Z$ 8^#d_OvEN|:Y9Q.O}qfNZ^DJ' );
define( 'AUTH_SALT',        'R<jt1t>TeF{F@T.p?AVSEo(FMi@yJJ<zYEIMh]Ek=$&zcLz!Q.LB/$xK{9CXFYga' );
define( 'SECURE_AUTH_SALT', 'yNE2jji{BaYkWd&*!]u&]w`Lhw/9,#T+lF:]jCnJT9dD^[8^+D7:#DW/px+RvTdr' );
define( 'LOGGED_IN_SALT',   'N6_J.xcTAyk7dAlJ41.Z`*<8T{vG%61COzj*>Fd!o`CZ#,?] }Nxb=Xr@vfmL?+G' );
define( 'NONCE_SALT',       '+,9HH}VOt),n6Ct~nk5R@88-{azz~Dm<<.[e{@|5{4KJ`qa5Octs{<ZXe?N87X2{' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

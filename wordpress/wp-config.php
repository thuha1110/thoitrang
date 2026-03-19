<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'your_db_name' );

/** Database username */
define( 'DB_USER', 'your_db_user' );

/** Database password */
define( 'DB_PASSWORD', 'your_db_password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'aL,,TYY]5l-VDy4%sDjC+-EyFrGL.z b.~5XrQjlDgO!97|@GrQ=%t26 bh/03gw' );
define( 'SECURE_AUTH_KEY',   'o8yv?@(:{ _Iplw`$vTW-8nX/#q0{M~^M.$[!q*FF# X]f36OnO]=8+lk.C9lEa5' );
define( 'LOGGED_IN_KEY',     ':myrdNhx(!0J@@,TGbwqIfC*4.F^1rvK7`nzyakmMB-S>9QXqr{>)1rbXkKPG2>k' );
define( 'NONCE_KEY',         'wtL$KPS@wi0G@;$Y8}w?)5^qsV@b<~axL`Dn/u2niD5R}4Eqdk/YOb$ev6L%?.5/' );
define( 'AUTH_SALT',         'L04f0#dzh.|9x=9Tbx zf[H79~6nK4#6p}33XJX|0)rW->aI5)5,`k)?jM$.aUa8' );
define( 'SECURE_AUTH_SALT',  'Z))ZdJ1H@m}AsyAttiSC<nz! ->;y;u3npXaU5m2{ul8BV6UfA~|vZ*WYhUv8FC9' );
define( 'LOGGED_IN_SALT',    'VXSW-s{q&7Gq5tVAOi?:=Z>jN&<$zCqx&cJ-MZMyf _nYP{H[58<f7qPd:4i9)I!' );
define( 'NONCE_SALT',        'wTF6nuHJ#b<4=81`hmDE0UXh<Lq{rpwBVw5.!EA/ Q]:5`oMUI2|ef5pa |K[Rpl' );
define( 'WP_CACHE_KEY_SALT', 'UO(`)hS#~C(/@ARoP#yn&VR_I~Rw:!++woTmg0DJ+#7SQNtxRi,8eXdAZ(yI5!oR' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

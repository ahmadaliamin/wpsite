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
define( 'DB_NAME', 'wpsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Z[PUeM|rvieV(b!i.a>qF8&+RCS:{,`Kf)dVsPZ3E~[uY,;o!1@`zk8$~>8wNB^p' );
define( 'SECURE_AUTH_KEY',  '^a%&j(*UhDYvkB?DN^Y~i!R+r^t(&}@Q|p]Sp00U.>fwb@,{RH71A<3Sk[|Hs86e' );
define( 'LOGGED_IN_KEY',    '?g8,1BopoxnT~{GTPZjBQ,@KEi0m]4lvbn)7DnDMP,Q0k3B9xm}i!A<~rG1)Y&w.' );
define( 'NONCE_KEY',        'AFVXzm]m-n#k>8/1<LVJ%|K1p/.fj?Bk4%P^S5%|-zf}a[OewjHDV<HdjRu{oC.T' );
define( 'AUTH_SALT',        '!rL!YgA8Xy95+-%aC.H)&@KWP;8dOP $a4FZc%W>rw4Z6`7U6 F.{xVrgPe4l=*J' );
define( 'SECURE_AUTH_SALT', 'R_37Y2{zP]d*!WT!0F0cyaB!&al}0}Jp/ftaPq;@,Svv/ 2/x$54iN<lvWp N}Zl' );
define( 'LOGGED_IN_SALT',   'JM{c@zWM}Oyu7cZ$}o!B:IqN-!p0<}YRs`(^[:%4O(rgE[I[^=l}JX>N=OdMNwaJ' );
define( 'NONCE_SALT',       '>T*L;_`OwSo~4>a5)?%!$2{yG}aP~;IKux}jwG-CruPO:4n2:<rS9vRGvcO?J=j/' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

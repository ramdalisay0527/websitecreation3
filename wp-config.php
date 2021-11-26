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
define( 'DB_NAME', 'fashion' );

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
define( 'AUTH_KEY',         '@o=N+<|S.5><!u=jliC~sCD$Y$UJ 9C7PkY?3wFcxK4|#2%obHr4|2}soq[dpA:g' );
define( 'SECURE_AUTH_KEY',  'DyW5>qkHoi8whU@y,yHGrU.IeZegVs3zT2h;|O6WgjVPd0*nDbI7=%2,]^1.$z;p' );
define( 'LOGGED_IN_KEY',    '>F`+KHbtbi~X/yIeM#N=ichU=Cx0&zs/[6Be2xF$I[vm?3rOOaIqJ?C$]f4h(DY:' );
define( 'NONCE_KEY',        ')i|r&v)|M`7| I32x<`nK#cG%U#K*?<2H4-[)JFdz;fQsEzZdfvI6)R&^DUZ:Vnb' );
define( 'AUTH_SALT',        'LxlB^oPeo7F7!RA|Em+)3[dy0dt4p(Ov+%-axZ3RkMImf)FTRQp.8P_,jfB&oWMj' );
define( 'SECURE_AUTH_SALT', 'Y?OKM >:w)/>`&-AO8frzp=u?zRJv?IvclF=JYs2B%$Rx2)Z}E09Utu ~Am4E=cz' );
define( 'LOGGED_IN_SALT',   '267cXR7#--DM,46b(`:KhQ#Yh1G)74B5$wm(G+?Xu(#>DU;$N+d;/X<(%nPaws8T' );
define( 'NONCE_SALT',       '0J11J]jsqoqZOKz`DZVJDMQ~31X4/7EG;sD/T;2RnK2G)3%_9U$;RbPW&`7gM(B;' );

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

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ciro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'HmX6v L!OM-k4D<P1$FZ.v,yPV~@rV135cnx*zZ=SA|jB%X+aK><nIby7+b+xZhx' );
define( 'SECURE_AUTH_KEY',  '8;cG gj)pw<idFz~x]Ff*Jz[1R7,_$vkM3kJd +GnE4/Rf]C=ypi0=I2/G9ssN5^' );
define( 'LOGGED_IN_KEY',    '5fGb)wk$D=_2p])|[O1,?MBO]:YsVLJVOWP7Jpt]v`luv!`io!NZtyf6Pj#?p?D0' );
define( 'NONCE_KEY',        'FJlT5JT-yWzR-(P,A_KG=#}6= TLYlKuADz9^l8{G{++j,[e^,,4uq~/0*FV4LA(' );
define( 'AUTH_SALT',        'h~Nh4A}dy}<eG,/QUeSbzgnY4&jAhXd=Uanj_Z{k) *j.Abwm@M;^rg%+DmDwLY>' );
define( 'SECURE_AUTH_SALT', '63Ug={jYgr}y.TYrYBtl<nc`HC;8i<UfR-8A@;AYykI!9avupvqpb`,?*bGH.=bx' );
define( 'LOGGED_IN_SALT',   ' ygKh:mfVsEc|d-}LdIyUO6ZLWEou].Q|NwF+8:`PFIZ8N5H6U&fh?&E~l`A~5D9' );
define( 'NONCE_SALT',       'jj@grzN7J,VJ0.zolGlB[aE,ueZqt6*.[@D|!gB=R~R uM]`l9:O=o!N4%t`z5~+' );

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

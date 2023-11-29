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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ajay' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.c5neec7nyond.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'UC<yU+dRDj!9s0?6x%[-`=Rh_Mou0v+6I+D|]T}e3n~_`fjYQ,/4cNf_tN=~zXrT');
define('SECURE_AUTH_KEY',  'nn=uFXq+-9{hT;X>.cxtV`ccw9y|W-V]!6p$M#$6r!~u$G<|Txhzd1lX,H!?A6wV');
define('LOGGED_IN_KEY',    '>H8N9~U4=)tTZ)=K|tp6NQnwr@>=ZNK 5=cT6^Z4_8S}P>&ot wf27>TRp--74e$');
define('NONCE_KEY',        'uc)YsD4JD+[7@o~Yq:++~=+6vgc~xHo:f`&#[Q!j!]YX!:?v h;h8t<D[|k4|/U.');
define('AUTH_SALT',        'NgdKrTKyv_sM,S&%?Feq:oS?c{e~](RYK0~$VO2p]z$loMi%u7gOsKo4D6sBn+_u');
define('SECURE_AUTH_SALT', 'o<dFZ*z$Z=&G^r]W-KsgywYL6z][vv!{k<yHXdMI6ahe3a`U,bPZ1c;eLj;f&XP$');
define('LOGGED_IN_SALT',   '/^5O&-8_.I2&Czm :|yr=R<nT{]N0}{7FDz%%7<pb ;t@Gyj$^+I}!>,VEBhq<s>');
define('NONCE_SALT',       'kU,Wgtah~VdbBIO?6?ok;I-t7+U&HN`l#(Dp 6t&C!yM#ejwbj;7SFMA@Gb~`uy<');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

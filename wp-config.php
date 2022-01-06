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
define( 'DB_NAME', 'contact_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         ';0TZxS-e&ZDW`<|a2F={,tQQG(K.}=do>E{D8t8iJifC3$([xiWf`F*y!O/GrQ+U' );
define( 'SECURE_AUTH_KEY',  'h0.A;D<-F!#_sodN~e`%Jk TVYBa{*LtkLa5z>mbbz5GT_/}Wy)Zf uyI> Z)5][' );
define( 'LOGGED_IN_KEY',    'zvGH{0jx!gvoSA}RJv7p}k~z+gGkoYVU6y%LZR3$-wsyu:[+r/>.UB8DJAwV%.d~' );
define( 'NONCE_KEY',        '5!i%,ZlQ[zDcA7a~zTw7|v>nGLT|SoAAPQxN+P?-)#<o&`nV)X:Drtn)3.-:iMMK' );
define( 'AUTH_SALT',        '`Z*YdSC;?s.n-mFDJ{5dvzq(sYGsnUW_}G%Os RTN{7-g8,|@8beZVAA[tFo=$bE' );
define( 'SECURE_AUTH_SALT', '}tJ^}uP6~6)|[F<CoaNp#3Ocpd{Uo X1TL)|^n%IL22Nu]K{j[USbqcF7GoBK;,;' );
define( 'LOGGED_IN_SALT',   ')-jeH-q>x:mk x1Xc.-aT1F)rF|,Ri}/c7BZPVyt?`O!)RZb7@JsgO=qWt6GaM@i' );
define( 'NONCE_SALT',       '2Q+RDl~&iO+=WN.UkNa/T}SOG=o0#L_7b);ZIl6rm)8f.-fn(0xePw3l9{>WV0/z' );

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

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
define( 'DB_NAME', 'vakil' );

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
define( 'AUTH_KEY',         'b@5.d :Z1d~}3>VMVOa4.gJ4f<VVzL>)EJo4J >Zu?cd]1AlfZH0AX%1 !dGq<PN' );
define( 'SECURE_AUTH_KEY',  '>oB?{)3-#7Q.x ayhh(|Yg9@aHV#ttoVN@~:p)%|/v}.+QrF`;)[MeD7GP+JJuP5' );
define( 'LOGGED_IN_KEY',    ',o6yw@p;M5Who?uw{QZ>;m@|IJa--) u#W&80hQ3!bt~s}<f#X/>K9IYo`3y%+Zl' );
define( 'NONCE_KEY',        'V[/0YHpF0|z;(D%uIcYY>f8/kaFxcP070q@q*;Ju`dZC&Re-#Ktx{_8+qzCt[{Mf' );
define( 'AUTH_SALT',        '!r,Y4DS#]cR^b+ qetZDAp>4aWCp|2W#d(1!V w~%,kl9T<HByf4On)*nZ]6}yHQ' );
define( 'SECURE_AUTH_SALT', '/8OZKcq]bsjYiy9+;@4},< xR8_WH#G7p+K{b{Wf?E[FTV~A==a3(+-9#$)`pAW3' );
define( 'LOGGED_IN_SALT',   'GLY4w7 a:.,mr{i>R_F>=@&d]S.^za[V[03c>=~]9xpV7Mn<S;Fhu:_(Cpe2XxSn' );
define( 'NONCE_SALT',       'orSZSoY1T}YBSBM7Z_HWsPwz^R$lYf&ax9-75z!|kNd>HF]A^e!)V2Ab3nnD/4dW' );

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

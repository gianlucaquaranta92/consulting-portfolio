<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define('AUTH_KEY',         'YH:;i.eMNE]Q]&wPimSMpn]b988./ok[GY7q~FBfNyE9I]t]-+,CJAO+qa,I7e s');
define('SECURE_AUTH_KEY',  'Tp+X*L|Rq_-U0D$`/WOx2X;X=c;/dqt.5D_a$e>W1.KWwki]36GolT31o{+EO!CD');
define('LOGGED_IN_KEY',    'Iq>X_U#d96!(}nX/kHu0@+9Z ]y,5.W7Le-O@E6+Sc+Z%R0d`Z;Y[nX4p*6PVZk-');
define('NONCE_KEY',        'V )jy`10U+t|0X>Evn2+^u{ :MJeE@#}YR`9o`5oyt]8i;VRvpB /xZv3u8<LXH7');
define('AUTH_SALT',        'kR`+b)pBE{{b`P^_g?EQ1@3[Q~X&`BaLHN  74s7hw-/D>A%gj_3Xms9ZcBAU-4A');
define('SECURE_AUTH_SALT', 'FO!|i*mC;d8d(Pr>t>p:)<M&e K&WWLaazdS1iw#g-NkO2]y+gEHgg%-~0.P7loj');
define('LOGGED_IN_SALT',   ']mwMg527k_,#/h/]w<QCAnlL8|NL]D|9. :FT?K}7D;=MeS(]-Aqz:fnD6}<N>7P');
define('NONCE_SALT',       '*-Bad?-NLU$QG2#Z=5fi?^qaOB{7+?}H|s-F_0vL2~gurG%-DL7hyQVoU) C6rhh');
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

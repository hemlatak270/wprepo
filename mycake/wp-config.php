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
define( 'DB_NAME', 'mycake' );

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
define( 'AUTH_KEY',         'F.`4fQ`lGA,?gx3]_4N0N<XFIqPh|t vQ(joovXk{o[hh.(q 2MU$h3,Ixqa#t_5' );
define( 'SECURE_AUTH_KEY',  'R#aB34b]$AYvdt~AR>4C&UEAt#4&lkF nKog#97Pd-ghzOqbI9H.j7btl3)$])%$' );
define( 'LOGGED_IN_KEY',    'DaDbPyFKSz=JP/2)xbxW#D>+;/P& XJGJOVW$Gf9cJ9N:?n9=vR]|M^|XGGXBNXw' );
define( 'NONCE_KEY',        '0*8IzVYzD Ju?w$?ft;7TyAeP5s2Jo~1Y|Fds157q5r_z@<ya$d@.VxyWQ:2pE0^' );
define( 'AUTH_SALT',        'bVcCHktdopg4X  @lGc0F*@3:_g#C%8WS*gN^&S!tciA_Up!vg_AQzryJTz3,JDg' );
define( 'SECURE_AUTH_SALT', 'bH,BB)*thxxH>m-<h*Q1DYjYm6[`O<o%Kqjw<HIk|F6vtw-mxpO#X%qDsoqT oYA' );
define( 'LOGGED_IN_SALT',   '1T}oI?O-~=zqytyK/R,j=sXzN]>:CnK`-N=)}_wXUb^NLA;<]8wr)yoT!P,[&2*H' );
define( 'NONCE_SALT',       '0SDIMiJhJnw:**hz<6t`IgTSB?-QrEfj6JUNU1CfDrkWR/io@1`s5V-Hu{*0{GJk' );

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

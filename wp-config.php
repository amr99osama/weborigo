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
define( 'DB_NAME', 'weborigo' );

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
define( 'AUTH_KEY',         '@gfwbYKw,B[Z Ie3n *a~V&TX%kf~pmaA!u6K}oBg=834/*VA|RrGWKQAgnB.Kfv' );
define( 'SECURE_AUTH_KEY',  '9X*#R!0l2Y~f?k/Ob+B9FoVjx&o}gsVw!g8Vqt~Qq$((!V=rG(,jk:x]N|X~~Tp,' );
define( 'LOGGED_IN_KEY',    '/<,10,S+;YH=em<luF9!E#f+=K3-<~qXL:<$hPu6tBO`Z,JC=uh:f(791Vs[b/}&' );
define( 'NONCE_KEY',        'zA@{c.=sg8Zr/X,<}4{ZD,V_&qG}k0P4wHdQ|*cp57bAY,QLsG/4j:NN`8rQOa5W' );
define( 'AUTH_SALT',        'b@B>r:.zc9:9e2i/=2Ra,d6G`*/k7T&n|Oit:Bb1TEkU-QU<:(%sW@~F^tS{ wQk' );
define( 'SECURE_AUTH_SALT', '4@lGFE##h]PgUU`5hx4%5B%>04L6cENjI2EhY1,E/r*}@E$U0GkT.{xT_:o}D_F&' );
define( 'LOGGED_IN_SALT',   '50?OjtBB{z` uo,1~|beKg`oJ 6VI1?=R#~csUr(MzcPUByqgxiln-&Kd]D~@<o+' );
define( 'NONCE_SALT',       'S@BSY,PFO>W4DurSs&TKUsK$n-57TS1lA!0zr/,#)w|c?&>8{CV|Mh1p{|iAVD_q' );

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

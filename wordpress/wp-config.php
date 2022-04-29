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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=>rSL14]K*-]*0ld{&jwWe%8_V[V6Z@P/ur^.?<i<HXi>7:s1b^zOk$~*0LIy$fT' );
define( 'SECURE_AUTH_KEY',  'jY@,b&(sTT-N$_1L2|g002ySPPbx~A=?VrzZZmQV/~ybVE+quUl1noni,1.I3b4G' );
define( 'LOGGED_IN_KEY',    'L`lD(A pXu7{bQcDck-}V^asMZVxdAJ >EcAb@7f)r<vN.{aq<4&XJApE]bA#ZSF' );
define( 'NONCE_KEY',        'IB2olF~=exHo}@fH/g-d&6s(7+~n@4Q<!:(%+_Q>|mtV.PKb,cUbJSo$flnR^gmf' );
define( 'AUTH_SALT',        '3x(Nrw65YE3a]W(MZ:!nQ9nC }MjpJKSsrsNVZ5*u%n9u,slJeE2SRS@e;>:X)o6' );
define( 'SECURE_AUTH_SALT', '/ `2.LWf{V2= *r63$5sCP.=1j^WtB]s;k/P*q iz8spa^-U=B[k50PLW/]LG9Y4' );
define( 'LOGGED_IN_SALT',   'AY%R>5Wv?mSpvvlZRN7{xoZM7Q{b_ke0$qOU,`4Aqs+94_^UPsq9b]RYq4wTiP+9' );
define( 'NONCE_SALT',       'GL+EUddIdD&ho3aOT^WYAzSrS!ZhXuU3ICY/T&&0(*.F9 /MGgnr`U|1H&M4@fhW' );

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

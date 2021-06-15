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
define( 'DB_NAME', 'e cart' );

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
define( 'AUTH_KEY',         '|4V)!fvfMRMK*+@#vh4<8i2R_<@af1uqNp63RJa5gkZUJ%{CS#Z)zoJpv@~Oe7T)' );
define( 'SECURE_AUTH_KEY',  'q6a2h44Z1Z K%JL>g^2<0g.4O-{Cl,`Fx.k>vT;SY qv`!tiSkT`(BYsf6m`kM>#' );
define( 'LOGGED_IN_KEY',    'oX?vg2s sC?%KzF=<,@t51<X(G[JZ@C|9=6kt{H;9HqQ@io4hn7I&9N,BakkX-4e' );
define( 'NONCE_KEY',        '_)l%M?axmYNKc;)1w{[P|)c#EeB%Q0[GrFt%m=][|$aca+5h7.[6u@Qo7g$/Q)e(' );
define( 'AUTH_SALT',        '55D1e zw?wUaO3QX&?rKN)oYpo=-XmX.u=*mcMb,.{KHtg? f$P}5qbUkcpuoQij' );
define( 'SECURE_AUTH_SALT', 'i1P]@J:&ew5N0M!)5`v`nZXn4nl5YrJGSI!u<cB7hC=qY4LKf&eMGYRMz.X~P/&X' );
define( 'LOGGED_IN_SALT',   '4}hI;!H.#ir!jNHEs~1-4!SiWg`X;/s-a`3O}sI,14md1MWBkSD?C!rulLMM6>Oy' );
define( 'NONCE_SALT',       '*aM)s/6Sr-:PQ~%YakIJ1vG9b5{3^9$;y}gXcG&_:c*76$mr}aruo#((8HV$Or?j' );

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

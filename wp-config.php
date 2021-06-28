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
define( 'DB_NAME', 'brief_8' );

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
define( 'AUTH_KEY',         'XLnp$[?mY@d?/Fge#BMkus%Y!(0$My,jQ|X(^DW^uwOd*O1l!k$93fMizK5^#6_?' );
define( 'SECURE_AUTH_KEY',  ' Q31D)vyg@6RPK<J+zsA_I3;)g(e?L%N>CXmCrX%]VS-HfQ4jr7)/#ZO8&nk<!3<' );
define( 'LOGGED_IN_KEY',    'wAWPW3!~Em9F)S`MG ij$eASrEh+1@PI0>rqe?0%Ujy;J S$16*jN{-?ZwW[pS[b' );
define( 'NONCE_KEY',        'cP%v?>ks;7t:)F(uu+{o.uIeQT9l:hQSdm#$Xv_S2[ttYU(LfBz>`RxA9B$}#&z/' );
define( 'AUTH_SALT',        '/<|> N)uu&&(yrBM(D~|XwOv%I4=~W&Mb(|gD#pV6k%]myN_/lqY4sQ[.Y<><Cq?' );
define( 'SECURE_AUTH_SALT', 'cB,LE{Pt$a|o@:YRFpm6EK1&|K/Iy!X|$HTw:*bdK2gC+W`p$Q%L:kW!rCX0uOTQ' );
define( 'LOGGED_IN_SALT',   '%_fzX! /F2 w<$}a0v@xF>D7V`Df%TYJgwFyofg*iE845-h-zMDQ{Znn&0Y:A+m#' );
define( 'NONCE_SALT',       'mTuvm{*c$t}gljK<m#uQS+&&_5tCWD+$Q/Sm*H*uPI>rX.O2mcLNt?SREx:W-C.M' );

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

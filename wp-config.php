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
define( 'DB_NAME', 'venkatdb' );

/** Database username */
define( 'DB_USER', 'venkatuser' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@12345' );

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
define( 'AUTH_KEY',         'Zji<3YV&{fPN/Kt6_F&=06K9me:s?%cfNno^jBrE1(?aN~aUO-%T([kOQTc:L`!,' );
define( 'SECURE_AUTH_KEY',  'ag{vlV!Y3X[<hT4a~2}a1aFLq#~sExg43MnA)H}.Rh+>W<&$~{fB!ex|WVW3BU y' );
define( 'LOGGED_IN_KEY',    's2J+^%rr&U3G-yA7v2WNSFB0{=)$:b:@VrEsXgYdv.S^|M;p,:9f1>5eY+~l=4(G' );
define( 'NONCE_KEY',        'jJpETV[9lq.O2(Qq>A%$f&U{}iI=]*68.*rk?cj=pEzkTSO#.W0&]s})6u-SG<CA' );
define( 'AUTH_SALT',        'jko/g#%ta&dBp~q/|LaD8}.1k-&c*8+5w7B@VNShgad<`8006wBQ`!Z{.t*vudC}' );
define( 'SECURE_AUTH_SALT', '@,=+k26s+e%k_AV`:o=e*axS|D(CM2`H2Z1V]&bLmq2_r0k;-8+$ht^.3{Ey.ki_' );
define( 'LOGGED_IN_SALT',   'K KsnzV?Cbl>2yO*GPG`GZ_%;/F6wB>JG%(KKv8av@`(k 4zrdV6Mu3p5Y}Leu<I' );
define( 'NONCE_SALT',       'FZ9D#=S=Y?V3FL Yob+6P*]sqR4[(p:b{(ApjkKOe~7] ZB#f3,loK;f.|!seHBh' );

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


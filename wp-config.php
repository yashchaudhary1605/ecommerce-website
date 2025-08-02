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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

/** Database username */
define( 'DB_USER', 'yash' );

/** Database password */
define( 'DB_PASSWORD', '@Y16b10p09' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '];yr9IG2Hnb2;c|LgN0**9M7)N/6uM|aI54*2PyC3hV3cJ[/o+i*+6u]o8T(_O1*');
define('SECURE_AUTH_KEY', 'S12-I/87b2|!aF(w9jXX22/oA+K3!41KNdz(C64R1Z4c:yL:0c/J/WH|vWUk1GJP');
define('LOGGED_IN_KEY', 'ghS-%PE#(z:0EKwCu5W~_@5d%Le-qKFAMH9~@98dv*4ow_3L59ce+gs-[#jA37Si');
define('NONCE_KEY', '1l70004B3F/N#:w(jlY#g--)lB04P]~(|G]hL3[vHuV8*h8A5Y]6RBmd)lFh1]KB');
define('AUTH_SALT', 'uT8nG1C:%nx7#v|+F%_zZ--h:!~F(U32_B52ka@iNngg@S9Cer0(+JT&O3&u%8@0');
define('SECURE_AUTH_SALT', '0063qHHsy5O)csXU7CE4MGf_44fiz7!l4KGrQ2qT%46XK0%mB4~/8(!4fR81K5U/');
define('LOGGED_IN_SALT', '-q0#f2Qt:3VW;0E-L958Rh~E6Y3ZcRkS@J_%-_D95W];(9iC)23|a[h(yXVKh18A');
define('NONCE_SALT', 'U3!0_74EQ(~TNQ79x]9In(|tu43U0[S8A6IU8ZG6uJXlQ|:~Z|E19-~8P+U5~9_-');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zpRhN_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

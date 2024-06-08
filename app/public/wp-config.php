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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'T=WL<JFwVqN_Q6<$g0w]fWL*euPN*3e;T9zlYGwgRx]!l xx&XXST:i)Eg+zOdO@' );
define( 'SECURE_AUTH_KEY',   '1PXmaYaJ|5QjI@,`3*zQp;0]!@x8;Y0FNCwNL3LTFF5.fZ7JP^ea@DscPKHo00h#' );
define( 'LOGGED_IN_KEY',     'rnVVsLsUHXfSLOSRH(-N1~(c^?E#;:K=iH;V^DmlJJ;/+6=&`TKM_sELm_c+E JB' );
define( 'NONCE_KEY',         'iq9C=Ai])JWc Xi}b<JEev%7a4=*F.%H=bU*0GmmodFqsw`wV7B1NcWqx5[8Eabr' );
define( 'AUTH_SALT',         'T<_hTN2Fnbs7`K<7c=Q49[w&5DlDR+PD[JarD|!FVvJsim]:#9 #+bo)[P WA$][' );
define( 'SECURE_AUTH_SALT',  '#BX@}J(j1P2bU`rJ94K$bww]b:;`6AA<-8mz&eeshkJaYgA=yhF/Lw]>0C]hf}uG' );
define( 'LOGGED_IN_SALT',    'p;,j,1F@[L9Hz{@mUTa0x*VJYV$S=gq7PU&s;[kzT+@v${HY<se6hSN{zlD@5oi|' );
define( 'NONCE_SALT',        'Vc?VB)GP8lkXxw_n_2d(/6lh#[x@VPBqkwTa&UpLJZik;.]:zMo/&l4gHVmUAGnx' );
define( 'WP_CACHE_KEY_SALT', 'h3k},HqOeNOA>rqp)#sEmvVgn:tYmn+IV~IUu,S*Ns5?y?+w`ZKXY|@vC1dALQkw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

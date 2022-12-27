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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'dK!n2$AL>|hB|-,VNMY+|qJ->0^=t@7?8mH~FVCkLq<Cxi|U*@8V<[fa>m];)&2v' );
define( 'SECURE_AUTH_KEY',  'GMe+#%RWhi4[>{c({0;(q O`w&ed=$ e6vXMz8!QvcCwy}<#n[1DS@NX+g-Z8n_-' );
define( 'LOGGED_IN_KEY',    'MF:~Un6#NDU{Ca2mGt&?we*@l-gvR,gGd{5l]}*g&hWlQm)Hxm,7GC+kOr^tm[72' );
define( 'NONCE_KEY',        '.V;;m9C*eYK_#y~9_@n=]N0s1(5N8gRQRgKMg4^)niu}MC+h#qM|f-uNPa:W8&^e' );
define( 'AUTH_SALT',        't%8*gl @]8LzZ8J,J1QQ(]Z3d8S3Ok!z( y`&:KVF8{T[,(Qo>Zf/^U-b.d$w_&[' );
define( 'SECURE_AUTH_SALT', 'HS$hgbB X7u#+w%vgp5O4|Tlo%MLHdHYc.z5RUv9H_RXj&tmL7wtVeZ^,@NLDiTS' );
define( 'LOGGED_IN_SALT',   'xSJG1zJ])`%Cv$:YCGZoB^r5C91WK6e*<_|?7jz%P$4b|}icg^TOwovN0*u`e;=M' );
define( 'NONCE_SALT',       'xP`F.e}u<l,C_gNP(.k;CwumI3lrhdh{sHv[9sw(=,)_{8z &B2yRL1Or=4?|epK' );

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

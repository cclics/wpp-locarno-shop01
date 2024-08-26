<?php
define( 'WP_CACHE', true );






















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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'locazvwl_wp6457' );

/** Database username */
define( 'DB_USER', 'locazvwl_wp6457' );

/** Database password */
define( 'DB_PASSWORD', 'S[pw4-.656j-S)2u' );

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
define( 'AUTH_KEY',         'xxsc1qm6rhokdzekx4abkzemco8ei0yyzbnnufznifelmgwtyfkx556oryjw0snw' );
define( 'SECURE_AUTH_KEY',  'd8anplkuzprke7jxggs7cdkftn65ikhwhjx4sjljebjsxgoa9qeigarggs967xcp' );
define( 'LOGGED_IN_KEY',    'xquujavwgmvmb80f5z8ylhhczklc7gob6fqrrujhjfdri2u3s6jrehhzg6ky5b1o' );
define( 'NONCE_KEY',        'mwwyoknmindly2aas3g7bfgeetycwfhec5ptxc7sswam3stulvzmzhvuvwuxxxbi' );
define( 'AUTH_SALT',        'qldelv7jxiwugrd9zdekvvydah1kbdky1rmju9szutshlf1lsp9abowefxnxuhsw' );
define( 'SECURE_AUTH_SALT', 'nfr5skbrvmpnmpvrc1bev8ofebdai3fyiopn9z5ocggwpg5twooevgda6cuqzubg' );
define( 'LOGGED_IN_SALT',   'q4bhtpgsluzolctczfzpp0glypm4tlltnfn74gapf7ez8dealwecf8ocxqlez8my' );
define( 'NONCE_SALT',       'nqwsjmnor58xmlskcg2lv9df1tpic3o6ct44fll2b91upbe7tryjzeppls4a3ybb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdf_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

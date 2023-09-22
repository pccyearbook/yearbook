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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pccweb' );

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
define( 'AUTH_KEY',         'd|7.re$vi`aE]ULJ=VnsqZs_;|0QS5CEvg!)^ krnSXmW{9mGeuxJX``LDInRyr>' );
define( 'SECURE_AUTH_KEY',  '}_`;]|>b1zSP5CppqEJ@`uw*c{kxBZ+5PO;8@u3cNe%rP,0&T!*@!5lu#y1PVPEI' );
define( 'LOGGED_IN_KEY',    'ix-iT%;h}29,8,bj6jI(bS?[O-0r7]=3]<3y8eE?^8 >`^gX#F0x8%hv/`~4fHpL' );
define( 'NONCE_KEY',        'wMb@1P?ZC:zIe)qhH*0E@i|SQ|#^h4N8IDjmC:{[?-f{ MZv!>n+jv$:W,.Ua$Oh' );
define( 'AUTH_SALT',        'w[tI(tm<_S@Lay9[GM/?(EAQ1I:w< }y!nP7qes9xNjKWk1C3~m3LlOxSy)LE=!z' );
define( 'SECURE_AUTH_SALT', 'N.^0fK L1x6yDZDIC}ln=VE%fc!Fv~p>gH1[sf?.O#{]CUs25I8T{Sx2X~XA9eNL' );
define( 'LOGGED_IN_SALT',   '^KttSaJVjJ3V#BLmWm1 pNO6owH}=P-AK-V!8)nkmah4@JznN%sa60l%tg^t#7BW' );
define( 'NONCE_SALT',       'T}}6<]wALW^9qv6z2lH*)PyJ|N&TacH(N85UB+ar(VO]Q7dxvN9~})`y(vk>=`uY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

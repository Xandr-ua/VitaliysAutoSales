<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'auto_db' );

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
define( 'AUTH_KEY',         '$T+UfhI:L*/k^s6qiy[{_8a<R2mLU8riV<jrw5Yphrltl7tEhK UOOzYDPR#7:I4' );
define( 'SECURE_AUTH_KEY',  '{h8eS@K5_C9Nj}@0*2FtQ 6b3/D#Mvv/ XC3/k/>-1*4V$`!Zm8etaG[s.Surm9&' );
define( 'LOGGED_IN_KEY',    'j^`-q!|KL;!:^.LPGHpDPY.n:5<3(Mh!|1n)i!m4.|iAw>h5pky1%K$>eV/2=h$R' );
define( 'NONCE_KEY',        'Am7MB1:/JXV?T5QVcA{hX[GGL-r%6N=h:`Q5}@$k~j(sb1P12r`](*X?Rc?*!LeR' );
define( 'AUTH_SALT',        'vk<`wQg$8P#>).H/tOK65|ht5e5urcAwmzSe0`j kKjVIMe&+^&3,oNisWcF7[/D' );
define( 'SECURE_AUTH_SALT', 'i|q(mY*Kzz `QrPvlrcfzHfh[N*OJbzNHsIXRrA_$po#DtEhXqw x!yGr!4{$$te' );
define( 'LOGGED_IN_SALT',   '6vR9w[<l68.~0;m)@3mm#g3]>+!1B[1v?%`YZL|_&o4{lB4dl82/mq99S-[MGCS[' );
define( 'NONCE_SALT',       'MFC~7&]/}xm. xYJ_ {<HtpE*j^rw4U,h|2f/O.*a}q{VX)P$CqyBOdo$hdtcv20' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_auto';

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

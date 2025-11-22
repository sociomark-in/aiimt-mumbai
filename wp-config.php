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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aiimt_main' );

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
define( 'AUTH_KEY',         'Jaf4OX~JI$Qm%-/yqdBr3D.RA0ww<STd;~e./IHq]5nfHjtm._TMI0jddDvyo$~H' );
define( 'SECURE_AUTH_KEY',  '5w;!RyPg_1pY/+HEa(}[3kCg_bHw[|j$tb!IsVPUj8WV$5DntD<?hj;5NRg)ML!k' );
define( 'LOGGED_IN_KEY',    'u3]/T_}1MH>]s87~uiqpoXt#uw00`b4]t+UAt+`_>Tzl2cosK9?P4B5,bl-cOM#.' );
define( 'NONCE_KEY',        'Fug&7.bS(sHK?+01ZkT%{Bk%/%@+q/Hw]0&XlO#0,<.Iom)08~:@y3#Jr(yJS+4[' );
define( 'AUTH_SALT',        'ajs+#Nz+^k#{]}[4yt,Ms,dm;IDK EqXc{R07MF6iDcj8:v/yH8OeG?!N@k}k()=' );
define( 'SECURE_AUTH_SALT', 'YnA?LZIaH)QpYKGEjGx#DL-nT9|Y1|~qGQ4`DWH/![ @ek-;WM6R;n,^XIy9~TZI' );
define( 'LOGGED_IN_SALT',   'q+HiqdOfe6N#w~$fIE?;qj@7q>Pg,CrUreZ !7fs,wi|-vN%HiYGV~)M}a67QHlQ' );
define( 'NONCE_SALT',       '5ROk~(_Wd55Sfsg2z }T]iwrgnRz,q ^U|;q0f-rLNS|QfHI+<kvbYGI6+hX|gS<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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
define( 'DB_NAME', 'smartupco_invitation_db' );

/** MySQL database username */
define( 'DB_USER', 'smartupco_invitation_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'smartupco_invitation_password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9Nj4iB2UztSX;$}iR))yQ}y1T3G?H8}$;hPz[|NGWU.kn=|-qXATXbXv4eh&NPyW' );
define( 'SECURE_AUTH_KEY',  'G,9eAS9sY*FX?LTER}>?(w*%4RBe:sKaB[p)SLItpS0ou]M:en(N hKyi(fY650(' );
define( 'LOGGED_IN_KEY',    't.Et](GN65;(G/6mT7<}[WK,)}_Tch;z&9vKAlw#Y#c-K7UAL26R[B{<(B*/6W=`' );
define( 'NONCE_KEY',        'G2W>EzR$]$[?W8!C(onTJfEN]<7%>H|kqmK.8!r=0Q_B.fw$6n$7OiG6K/p)rpkX' );
define( 'AUTH_SALT',        'R{j&~[WYM`Aoc%wC{SU}/N@ckv;k{<)?cPin:%+e#MQ*G)x}AnnPtw$a5^976Mkm' );
define( 'SECURE_AUTH_SALT', 't/qcu+0UwcXCJ BB$O3AkYrw;,1b#W_!}Zb@k^IdU|5}7i7a:8[PT~v4f#,~esyM' );
define( 'LOGGED_IN_SALT',   'yc!z1<P_H2vp)H2edD3,1l$;-7lxQQWk_0k%I]Kz^2?v#U45wT&UPp8 ^!4 OSsq' );
define( 'NONCE_SALT',       'jc@4yHFrvA yD}.wfI!V^7Z|_yYuMg>HOW]rsu;`NdP=M>MT`ytMcVMSkcLAJ2yl' );

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

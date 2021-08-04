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
define( 'DB_NAME', 'wp_db4' );

/** MySQL database username */
define( 'DB_USER', 'kuba' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kuba123' );

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
define( 'AUTH_KEY',         'Poy%ah?HrURo_`_h]qmQLZLLiY2D0X9/&Ymn#urGRv-d`A4G29r2E4EOr7n_U*7i' );
define( 'SECURE_AUTH_KEY',  'py|&1|/1~JQ[sk=fFFqew2K$6EpC-`fQ5DX6Plg_}jOJKq{wJf?0eSf(uW@{tZc~' );
define( 'LOGGED_IN_KEY',    'kF#^P/.=F)3O6VJ}HFhK);V76?JuNXjXnA}[B(,lczG{d+^Z7w_3sD(6VG>|:JOq' );
define( 'NONCE_KEY',        'O&T~HKmKur8sIA6,fx&=Zit5%nNXuU4c]<9xq`i>d_5/2AM:>(D})oLO*n43jze)' );
define( 'AUTH_SALT',        'UJ;=PwCzHS m52IQ}puA+ZF?x{(MD(l!u3M_v|.H#;O%ZDV8&]Pw)~ k&8%)eI^9' );
define( 'SECURE_AUTH_SALT', '+F0v1V5cBjtz5eXPF/DT;X0G@NX$y-vK-4OmAgo=]TZ3*=BI7]3W_HmL1H9J:20k' );
define( 'LOGGED_IN_SALT',   '<>6Cg:pb!meG{$H!^>&j0h{|iqT;`_>)or`qQINHnz>b= |rdup@bDr:{kHLPJjd' );
define( 'NONCE_SALT',       '1iniG<1! F0IEoR!$yI[EV6;O*sc((!8sGXn+*OGO0XX?dgWot#x:)kVZk>-7{c-' );

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

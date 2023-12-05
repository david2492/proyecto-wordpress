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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'fQJdWr)aK[KK>IR /tw-Fdl>de`_|&J$8D{$Jr[cPtq+W^wB1e89%FdE/0P0|aGB' );
define( 'SECURE_AUTH_KEY',  '{3E@XL| /-p8>qE7^2>#>EI9kho|r]UN?D*zH7ZU?H1*%j<]/#CqJ`yER:A~cjTd' );
define( 'LOGGED_IN_KEY',    'R;rF01vJU}o?~wcgo~y#}T(bbrH%Um-,$#?4[tRB2J.:kzWX9y`{n2wB>,8[#7,K' );
define( 'NONCE_KEY',        '!{_,2%k6viX2>sKp2*#eYa$<utqsCR4K-p2J1jExiv:k!c8K+mgXGr^-|P>)8%<0' );
define( 'AUTH_SALT',        ',XSoXpS/z]8+cXyxi1oMvyVMWG)}$a|GZ^vv.v=j-:_`T} RQZH;<pcOF&DV+/[?' );
define( 'SECURE_AUTH_SALT', '=@-]zkU$D}H/VAx>VG]?0DW77.~H|r$nPJ]#Ysxi>=KohQYmq[Jyky~*/hgB-kEs' );
define( 'LOGGED_IN_SALT',   'm~^x,lk6zqV,]ZigR($&%dWwN*XW(bHszpq%89TB7Vc.?Q<}N:j)^Oc_Yi[r-AQR' );
define( 'NONCE_SALT',       '6}VchQtW!iSix9m{;03%B~4g@b+(cBx2G}~3wQTTGVBhQEW*wN0)]{H&BNj~!CsN' );

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

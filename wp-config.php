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
define( 'DB_NAME', 'wpudemy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Z7@veGczE3S5=*ifGkh+[oUO&DcQSLve::CERJylW!_Dq@DfrG`[&R4a+G Q/~~!' );
define( 'SECURE_AUTH_KEY',  ';vy`uxU%eI`Hk{1q=;Sa:nKzD2[<B_Qs-Ecg0PAYjwcNf&OR@ZJq6}n b3[q;D>t' );
define( 'LOGGED_IN_KEY',    'i(uA[>KL WKtR,My|B-WNC-E yGv%y+YpQZ#,(c[DHvCrZFh( {=3Q`e3Sd){xh[' );
define( 'NONCE_KEY',        'Ya-N>Asb3$kux5`n?Vv,LmeJ9}nTMe/2b%pWToFkdVLx!)O>d[3()>1c3bS:NDn+' );
define( 'AUTH_SALT',        'oGd-Owfl2{/n&y(G@;Bki6HE~x?[RYOLnJv:2-NPV,XRG7yUo>|i98<^V4/q{rA5' );
define( 'SECURE_AUTH_SALT', 'H;?t1 * 0b2z[p0r&M_(}eW~,tS?q^<.<fCs7}]j$?U;yitcHI6MMP8jejevpR{k' );
define( 'LOGGED_IN_SALT',   '~7zO(Q[O@B}*)pUTjKQhj%x[fge*y<^K9Ru1x^9G `)H#ckuln)jp$EsPs.TC97}' );
define( 'NONCE_SALT',       'U=hGz<p[1MDa7FHNun=<JXY9wO@8(v(.?.7M$&+E]=V=j%mb$aK=aZbL5!;4XJ~_' );

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

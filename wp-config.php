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
define( 'DB_USER', 'cecilion' );

/** Database password */
define( 'DB_PASSWORD', 'Cecilion123' );

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
define( 'AUTH_KEY',         'X 3,SCGJdWNst)%O>3lfjq;I6$rBI%?llNO**7Q#TgZJoe$f7WU?)qIG~{sh`1XL' );
define( 'SECURE_AUTH_KEY',  '(&)9&P;o~6YQWA.UsoZDHx:Pvk1K w}}?<X.6H/MC)]Hs3H[<`BMiDI8/2NK9CKM' );
define( 'LOGGED_IN_KEY',    'ykFc_DSRf]3Q_nDMN9UTQ/s9EXj#ic_=j(5@%IFw9|Vt7.7S;IJ)zQMLbl.LKCZX' );
define( 'NONCE_KEY',        'zbD1c%}BP+fpY*1U+qs(8 GoZS&iSPr<)zO5|cHXkGc[qBBS]OaXREnn)+m#CVqb' );
define( 'AUTH_SALT',        'rQ(1{,vIk`-(|Ssz]1(5HuG&gpt_L$:.c&8B[L]eM_HFlaN)MBKdYiL~5t !nD;<' );
define( 'SECURE_AUTH_SALT', 'o=/ivQ^<.N?_~JZR*->INe ;Jwh O>{o8WKboq}ND[LI44yi.F*XC{<!5qal`u(_' );
define( 'LOGGED_IN_SALT',   'H<.Nl&1,tPy;(@QPKr{u7iBDZ%{<50@~T9]?3g8/!o$bLU-4A$@@G9.o=mGce+DO' );
define( 'NONCE_SALT',       'Yfc6<aKjB4 W[6fqIoDpnM_ec|bfrb{J%0Pt>5kMHdnlM:d*7p&I^jx=W2J&][(C' );

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

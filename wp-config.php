<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wp-limit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h>b_eE[]h_=m<z|)JUz&^5Vqe)^>Ss6f^UpDt9S[dZ7&W*N&T80V&g@dB:8N$g[o' );
define( 'SECURE_AUTH_KEY',  'j+H&PpCGeWUG?GZZE9V,W/GUz)&gy|5HpHPfF8%Af97kh%vn;K&y,-()Lr67RCt1' );
define( 'LOGGED_IN_KEY',    'pm,IA$U{40,J^TxGeTiodUw!u@8y5u#xi-50^.IT}|eFs;wQtJq^.o$owVUK7I62' );
define( 'NONCE_KEY',        '=WY;wqd g8TqxXORe1=9H6!3uV-$[FA4r#%0FEW9F6O^q!KD@xw`Ep(q*APe:Tvd' );
define( 'AUTH_SALT',        'h8!umoX5Kq+Q8Y1AV?W@lU0))=*P$FFKdUg.`?b&GTmWsj[#H>P6cup++km~u}Vu' );
define( 'SECURE_AUTH_SALT', 'T%M{eiwQiSL:n|kbmo0{ch$tGohiz*KGaJ;W&.^.mh@%9IJcG6.PgbsAeo#^j/~d' );
define( 'LOGGED_IN_SALT',   'f!ryME+riC](/6 [![8FP+^<-NqI#ji}I3apDc23T4]*sE=.m*9?^{ZeG{K>=`Ho' );
define( 'NONCE_SALT',       'a=Z*yx4W&l ?@$U=i5;h.lY=BwJ*cx`xVzgCT</)`ANFKxqzu_BB/{KD2nm>O;9o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'sAZP8G#[HAA^BiZxT+`N4Ku.v5tG@Nt-5]cpp+2awJou;gjg~ZOZ3<Ukf+G0R82F' );
define( 'SECURE_AUTH_KEY',  'lXb+pTe-w>RmnW,>GarCeOfVt6w1ll.Gifb/;lNFAo~aT{#HBWlTN8J>~XvOR&%1' );
define( 'LOGGED_IN_KEY',    '1qW60Xgx[F2W]pq9KRaz?4H;I8?QN_/hGz80G}[Bky|W!=~rD[8VNn7mB)BNm3>I' );
define( 'NONCE_KEY',        'ph(D$y=e1wa`t-m7b*9;S}@K^:4A3n,vP~7d ?mlb_~]CUfazceo{*KNgssE{$%G' );
define( 'AUTH_SALT',        'dNN46j/7soOE;pCyX1GXqTPIIW+3}Ndb)@lE!2D>%}y8O&Wr.r>)1d1#=~{wsgRo' );
define( 'SECURE_AUTH_SALT', 'Dmmh8H2x| 8E%Mkn~}PT;e5[7JluP V+@B~nUQT3H|P+#x4Sn(CqrMwH>oqlV?I7' );
define( 'LOGGED_IN_SALT',   'C97(*0Yj{V*=Ho6.EmlU0g<nbdw`:ey=a%G}mq.h+PB$P[D.QNq1M@w=#U50;2?3' );
define( 'NONCE_SALT',       'CLVi=C303:f[AkZ^z(m8-THN;6Tw$LS}ieA<wU.N=4jHS^3hZ^IcmVcWq-iU1wL_' );

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

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
define( 'DB_NAME', 'tmeee' );

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
define( 'AUTH_KEY',         'LpCg19=mi|dz_dN+WMAjoAT|AZH.J31@CqI,xs$M)7D dqv][f1GM%|au6(Ea*E|' );
define( 'SECURE_AUTH_KEY',  'wnMp=vgDG@e=Es%>~736+gxT,|Sy),pJN|9vUY5P&HK{uE$~$=&k-4+{.S~gP<bT' );
define( 'LOGGED_IN_KEY',    'M`v5cvZM0AN;5o^JV1LA9%*myZ@ycjxh#or,}> [@y:|y6Q/NahmS&GR;E#L}skA' );
define( 'NONCE_KEY',        'o&F[!~Wr_bz.W%5U2.hD?bItv8s.^Z;WSO}qFu|~M!)KH .myaNf@&M_chRXg0f7' );
define( 'AUTH_SALT',        'LLG_]{z.SP;f=){[r$RL6;1b:-5HEE/<b8X,[)XLw`Ph^^yQLXrn^z(4u{uPxqVE' );
define( 'SECURE_AUTH_SALT', 'HUsn,&^*~#K!OA+-eaWmsbAdW7LON944WF}yX3OAxI]vxA>^*5c2ABl!FI@H.Eb%' );
define( 'LOGGED_IN_SALT',   '}b/Njo)Q>VCO|MFB1e3%W.FZKVui<[$~B3RoGq5@~`_Xw1SsVHw[iz}+.J[+`T]v' );
define( 'NONCE_SALT',       '$wU0?tWNm7N9+sh93gbNaVFsFSdt$Iq)jA85xhI=^T{SSWV > DRx&NKC[jR-G4g' );

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

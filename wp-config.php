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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpres_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Zq~pk&q8S/C$?b:!eef{8@Fj.<G#@F,_}`S0-)4{BjN7aBMsS5]*D}.._D)vTS?%' );
define( 'SECURE_AUTH_KEY',  ' d}[JS &b-L{P/<@p(nltCD5eR:jY1H@2Rx8RXz)L 2Z@0^Dl=*jQ{krUwkkR7HP' );
define( 'LOGGED_IN_KEY',    'pHy&m(Z;GdFGmcOX_o*YXI4NwM4dN~kaP3RkMpE3yM JB!bY%[TVR$fxz?[7@ljA' );
define( 'NONCE_KEY',        '|AsIun7DS8(V:?y[F/[l>}!8WlvHw3_PnlCiw6on>$f@h.u3V7!SYSH[9dK:Px%q' );
define( 'AUTH_SALT',        '0-f;8AB x]Gw*ww)pq8GGa/mRnV{;T+{XE~EQsXTsz*zLXlyptFxP1m6!r>:T}fv' );
define( 'SECURE_AUTH_SALT', 'z>_x!xe8wypL9co0 lFZNh:~-WoJ]]*^zdf6wvKuVFb pqT,[/vdgjxy*o_eVaD^' );
define( 'LOGGED_IN_SALT',   'VMI?;3WsqO2W$e6,E4&$=`xYWO:>P}K&<JB h{C(U=%JqCpCYw8&z=FR2DrF96L[' );
define( 'NONCE_SALT',       'd-#+$s}*=]n;&7uYI9@W94%<Bbd^;VYZV7`M h<NA/mhX8$v: &G{S)XXRA>C0= ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

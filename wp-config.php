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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inamarizaje' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'inamarizaje_dev_wp_2026' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '_Px1we.lY%T~y}Nze=h;`19&uXoP7=)gz!R.zEZ5=P@CT3Io5en/L`s4.U37[}U_' );
define( 'SECURE_AUTH_KEY',   'T>iG*HRrG*!,J:K+?V M1_yLEr3#[IpL]lU&~O_(M]_h]ve1i34)4tiWhC.+)zfM' );
define( 'LOGGED_IN_KEY',     'M9FHjLrgOXI1,sXp:t?k#<8`Dv1wtt&5mGGskzIyUYW2=%emn1RacHN~iSI+A0U0' );
define( 'NONCE_KEY',         '#L,>YwOj.u0;U.dKkwxlo];U&3Q7A/e.o( b;lP{S:6*ftWLdv&6Mz,>vd04AV :' );
define( 'AUTH_SALT',         'e QpbRoP0{cu=e_1[W>Ty|(K} [,%SB+tV*sI|W$<`(>`o]{3L59?[>qt5bIY$<(' );
define( 'SECURE_AUTH_SALT',  'r_F|zSJloL1 {bw4Sny}+j;5-Qz%#(q:;:hSzrf9u]I*YlTq=VOmH9x|;e#jKR)H' );
define( 'LOGGED_IN_SALT',    'PWvHx)9vPy`}rU8-nQ_F%@3QL)HKF&5~650ZO3>Te.)] g$o@ <.1i>H)U;cPjnr' );
define( 'NONCE_SALT',        'UbkSR!T/C)ZCtJrBW7I->D0DPkp<07W3srzPg?AZ>EV3y/LomY($_`g1Bs:Cfn]&' );
define( 'WP_CACHE_KEY_SALT', 'S]{8cZ*TXgMR[p1c>0RU;CWm+2sGFwiz*Nve9_|QpZP4]&e]n/.({T/l/tz6A,Xb' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_ENVIRONMENT_TYPE', getenv( 'WP_ENVIRONMENT_TYPE' ) ?: 'development' );
define( 'WP_HOME', getenv( 'WP_HOME' ) ?: 'http://localhost:8088' );
define( 'WP_SITEURL', getenv( 'WP_SITEURL' ) ?: 'http://localhost:8088' );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define('DB_NAME', 'sugoelit_sugo');

/** MySQL database username */
define('DB_USER', 'sugoelit_gomez');

/** MySQL database password */
define('DB_PASSWORD', 'f!ghtLif3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lKMEsJitOrU| vA1Wc0-v%Ar/X+9hO*OdJlSw{lFm*lN+}A)D6)]HpqBkj2}Y_9W');
define('SECURE_AUTH_KEY',  'VI^]6wVm_+>?jqwTQVL`GR,DqQU7y<T[wTa|7}>[nHZ+ZJHNMjPc.6/R(MasC^$0');
define('LOGGED_IN_KEY',    'Y*LMhIT!AN-adH**}:ai L-!q6[EHZFuO[IWeOOb(gi|%L;1i/wU;qCxZ?Nm@j/>');
define('NONCE_KEY',        '!mGP-S>Q!ohC0S:Y%S*ol8r1Jts!YhI}6K&2BB~@eOMU.G^+RH~1Gxmv>ZumG6G*');
define('AUTH_SALT',        '<xF&Ck_31$`B3Futg+TtxMs7@#WiKp?rSB:Hxma:R6*m>%032G*S37.{e4?xEd*Y');
define('SECURE_AUTH_SALT', '4APdfhp26:zj=j>yu{{TnjT{GiXVnc&N+RJ<[mw!LLNU?xn,bDVlpj5~`C5^8ofo');
define('LOGGED_IN_SALT',   'zKrL$,XW=0sFn:51Ak2i%p*MrJ< %Vs~(UrdVa{cll_smT2xSs*->>=>bR.1,S6v');
define('NONCE_SALT',       's~OhBdO>mc9otQm=JhJiGz)hCpWnF`W8RXGmT^O~,x/ ]n<zaEt]Z)1M8W}M{SN<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

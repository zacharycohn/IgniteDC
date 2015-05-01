<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ignitesydney');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3.F9dK5t7-Xc`6:_TN:In(Xn+fU!NijVZi=w-#gIveq$Lh_C>x$SfsSnt{b8-qzM');
define('SECURE_AUTH_KEY',  'od5%WU%+N3[9IN0+qBY#-e1^+#%KQ Tt;SnA(,[>s9XQ2u9-[j ^GIXEu)}$&@^D');
define('LOGGED_IN_KEY',    'flC^[(EFWfvvkwA6l1Hdc]h(O7m+L+F{s+(ByQ){ e+dMZ)x6?X>S<J1OR9nrjM{');
define('NONCE_KEY',        '`X-=_.;yML62!}|QpOXy+rt=_|*=jRc|Vw^e^Xt.[nK|B:8Ar<wECwp@}3I[|pH/');
define('AUTH_SALT',        ',vkR;!jv4J|[$Vw`-x d4RwL!.NtlRTJ&NDf}t&>G79w,L{N7y343(@r1f-rfzUM');
define('SECURE_AUTH_SALT', 'PK%jpX[Tq-` -(m%DP,t)lef+}uz.xm|f8B?)T6/*lp02FddjpdjkROox,HIUrIP');
define('LOGGED_IN_SALT',   '{n^yFGl(/ J@u!k*pn-p>7#Yq:;(*-kUHz.)Dk$|=/aB{Y<oG>$|cm=2:=sGRM,5');
define('NONCE_SALT',       '.1w`HW{G@C|*H#PaSPWjmm~~+->C$~Ed9s5bFCOg`e8=mTR?&#6QC5<?5;SZ?l#g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

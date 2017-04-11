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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Bv=oS N1[fIk}F1K]PX (J6]*]}_W;Hs}!,yH7Y.3-W0J]8:5KfECi(lL]Q>EFe4');
define('SECURE_AUTH_KEY',  '?^?9]R]%VN!peL@UkoB((#aAOkG-(B[Xs=+&)ljF^ ?h{cjA+%>f39.scz gKGm>');
define('LOGGED_IN_KEY',    'SBTFqi>4sz3>`5>yV|NX<Thqc|9L1Dr]8311b7b(z,q:54V_r=O7~}TUsm199@lr');
define('NONCE_KEY',        'eqF0;XSzHLv4ymWc&3L,ebeUe8AW-%Wb=7rL-*JwaGS/^#Eig1*lw` O0jZRD):K');
define('AUTH_SALT',        'wiNN|~FmI&YavC`PlTRP|=e&c%9#SW#*{&%n#==BqgL!pwdm&b@1_/M#g[a~Ltjp');
define('SECURE_AUTH_SALT', 'v=.$*Q;)51f1(LeM;bKFCvJn.VO}LqWB;,!w$NViX%ALP}qL<:<,Ms.D`b4KY_!U');
define('LOGGED_IN_SALT',   '@!uOM@Qb=1sD*l3^u|BqHsRqFLyW97`!?,]X,Je5w5i-?`NSC7IVfpWVWStd!*7-');
define('NONCE_SALT',       'W$Q,?}th-f.4}|2@7Z:~w_-{3tfu2 d<hyA3C+pZf4f+StF:Qw!3SAr+SwXA&sa@');

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

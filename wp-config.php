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
define('DB_PASSWORD', 'morin163');

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
define('AUTH_KEY',         '#jqW*(m=0D=]XczcHccGH9m9-ij_uA@IyXLk[r>1LSd_OIs}H}uhk$o%6~GO-seA');
define('SECURE_AUTH_KEY',  'OBUG5@TJmViAV;{k>pWM5XJ>Mcpu^C:!Gr/~~M?I&+*_kA{*{SB !i+<%[}b H^f');
define('LOGGED_IN_KEY',    'h9KB[3=Ytzn*QZgM~L!#L}975iOXK$S2h)OLv3@wSG(W7|M6~%?)SftC[&k*vbG)');
define('NONCE_KEY',        'a%DKkC+puBRjav0SD5/c`w5%W(c(ma?POolam${Ab!IoQ8f*V)R4J8b5<|hsK8CW');
define('AUTH_SALT',        '^IZgKG[#?,LT.?~zn!|8c32$]h4=< ?#p`yD!:WJ~NnheIONnb>RtRKsI=W5cGrK');
define('SECURE_AUTH_SALT', '>]N4oY/9`]UCp):>$$~jE1Go^H-/6H,DCrxJOm%qMhB:^f]}Ha,<08o<;t5*6N!M');
define('LOGGED_IN_SALT',   '^%:v#knt9NS+F5Te#]WC3._~%f0a_/@*$lUqP3tr904,?OZz`X`PAO$V!gUg>?~)');
define('NONCE_SALT',       '6A_@gC!VDjY 9aAbP2/([0Z-Y_l]Hpc@fL.@5ctn,4myp+1;>P`?ABVF9*wwx`hP');

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

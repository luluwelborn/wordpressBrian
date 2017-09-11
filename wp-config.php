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
define('DB_NAME', 'briansite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q5M.=M-%O#(GKBFM1s5 %hLJw4jVoM3Mf(`BB-$L>YPS[ _FqUl(cpS_a058u`1#');
define('SECURE_AUTH_KEY',  'NA8s7VsAF^=F=k.HX0:^U2n5G`q4?M$<475H>*8^d:#N*MQ=Se;-fb$fg<>I{t$Z');
define('LOGGED_IN_KEY',    'nrLY+zo~z6LTxx/=b|$}zxBXz|We]jK=ffhlDR;eeD_4m#[|+nXCx:g<M<@MSJbR');
define('NONCE_KEY',        'U8!u;7_5aga7%S89(; gP4DLD6obj(00JI(|-y(wcMAWD.)c4zlAJ+-J YJ}]!Pf');
define('AUTH_SALT',        '}c]|a&P@JmxRDS@o+z.Z,fl(q?]-2OMnkq$y^<@1;tGH]>`?W=`=[e`Sv5I-BO]z');
define('SECURE_AUTH_SALT', 'cCu#i=*iu8L@*6(s.)sd=.%ya-=-!ihQQHz`T@H?D2a&QwS=kS~&/%j!_+XHr[03');
define('LOGGED_IN_SALT',   'r*M;EmNbRz)fe>cJO$YHqs$x!N$LKMz`6IyvY]S%bqg|T,:~vCY(|fs7px8tv!uv');
define('NONCE_SALT',       'B:[/F[S9aGazyd#;[:]#o!XvQYD4GX_@+MZJa6?HCc,tiY^g8;fznew08#u~nA!;');

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

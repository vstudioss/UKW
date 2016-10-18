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
define('DB_NAME', 'TheArtOfPassion');

/** MySQL database username */
define('DB_USER', 'phpMyAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'phpMyAdmin');

/** MySQL hostname */
define('DB_HOST', 'phpmyadmin.cw637ad2cjeo.us-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '9MRRG&CoXo)cNsI) NQxJ;s1[TcZoy:_JPs~J$#K)bCw8^?pri!^0e9/Q0n6`;[b');
define('SECURE_AUTH_KEY',  'b1IXxdA83{U6uPJ@Uy)a1%*YpP/Od-:Hbn&*y V*?F{.flx:s`kGwEBWE9B6&;oW');
define('LOGGED_IN_KEY',    'Wt5z? i- zLRl}u)F^3c1pV=liZc OM%|oc2;[7#h@Ci)/p]:iNB3V}Qml]) @&-');
define('NONCE_KEY',        '!+qC=pKr_7I~M<:[rW>*NqpN%a%_$nmU-K;t^.qdn1pTD:[Gs&@zp+k!ua##B[}D');
define('AUTH_SALT',        'Ti!hiXhs9r3ehW6;N?CDoiPSAC2PKXAmn_.sH2)x/OzRU}k]W<HZ@iOK&oDmF&%z');
define('SECURE_AUTH_SALT', '5;},/X/:Skzc2GLb3*sbkfT{~S0oL5X*odcBs>%J#Bydy7zhcITn||dz>S582kL|');
define('LOGGED_IN_SALT',   'JZG-BGCWi3DA@I71}<&QrD?9nG%D4BNMJL,xvJUJMM>nwx1VdR=k-OkJTCg^28x>');
define('NONCE_SALT',       '4r$s0G6R.J#mp`{w-pr+RU+i((f@vw9)qHX*2m@9xI$k~dHJkW<.WX<J7jvIUd>,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'DreamsComeTrue_';

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

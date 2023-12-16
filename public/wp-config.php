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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('WORDPRESS_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));

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
define('AUTH_KEY',         'FrGee2F!L-SJ7kZ@oIF)w~QF!3kHq7n978$n+!$Nq2Ht8pNE>47LAan]Bre|AtJv');
define('SECURE_AUTH_KEY',  'nD,^$;RmL<p*_pxZ`l^Y]J8N?x^Gi,T2M<ey6PG|WHA0]<y]sfTEX|}@^0t>Nu>/');
define('LOGGED_IN_KEY',    'r n;t7?K&y-hDfJd8]*+jyVnSUF[qCWv{pO}x=ma9]A^Ib~sBk6:Owh)@tE hzRE');
define('NONCE_KEY',        'r%S:CmU:w-U,y{+G:nl5fR`9k0#AfbBs%{KHvxfmE$May-{}(Q+~#dOR!#/A,zhg');
define('AUTH_SALT',        'UBDH`d{|)<-|L90ix7N4X}OC8D.-w>ijlv2u+CV~y-9b#mguFth[|ra9)G:w9k]V');
define('SECURE_AUTH_SALT', 'H[(B%V|zBCz;i$L7`,YB]-dnm61i<cG]oF-v{Y|| [Z{v+M/,bRgVoFW*l$F8-z`');
define('LOGGED_IN_SALT',   ';XkN8O[mGC4|R(|)t{m6QUp2jjxG7y|J_6;x IvrJ>))z lO^_|2|9I/(xm7IgqP');
define('NONCE_SALT',       '`$84-0O $y&1NB`@=yRoQ,lQ/pB!9{{i%YFJ2`@mlR}>+oPK;9wRn|JJ+})U`j<f');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// WORDPRESS_CONFIG_EXTRA
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_ENVIRONMENT_TYPE', getenv('WP_ENVIRONMENT_TYPE'));
if (WP_ENVIRONMENT_TYPE !== 'local') {
    define('DISALLOW_FILE_MODS', true);
    define('DISALLOW_FILE_EDIT', true);
    define('FORCE_SSL_ADMIN', true);
    define('SCRIPT_DEBUG', false);
    define('WP_DEBUG_LOG', false);
    define('WP_DEBUG_DISPLAY', false);
} else {
    define('WP_DEBUG', true);
    define('SCRIPT_DEBUG', false);
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', false);
}
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));
define('AUTOMATIC_UPDATER_DISABLED', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

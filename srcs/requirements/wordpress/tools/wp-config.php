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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'WP_CACHE', true );
define( 'WP_MEMORY_LIMIT', '256M' );

define( 'DB_NAME', 'env_MYSQL_DATABASE' );

/** Database username */
define( 'DB_USER', 'env_WORDPRESS_DB_USER' );

/** Database password */
define( 'DB_PASSWORD', 'env_WORDPRESS_DB_PASSWORD' );

/** Database hostname */
define( 'DB_HOST', 'env_WORDPRESS_DB_HOST' );

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

define('WP_CACHE_KEY_SALT', 'env_DOMAIN_NAME');
define('AUTH_KEY',         '/Bui&[l]u2P8jhM$s6f+?wz]ET*sFQ%e_u=ow!UnPZq=}g|K(,LT^0DS%|@cM[W!');
define('SECURE_AUTH_KEY',  'MlA}SRd{d?+0~NcOJ-6XY.H& B5J1,+JOGQ4Y`;U@9O(g~1,w|}Z1rKO&@JZ8Lb6');
define('LOGGED_IN_KEY',    '=In#zZP`&pe8:?;zr+z2j<jB0WZJr3pEc 9MC^!lNNFUq,WC+P_it/<5*n&Ye%9X');
define('NONCE_KEY',        'm,D# {rB[2n0+-mX:q0,|NV(1KD Cp%TxrB-~(-D[*N]F56jFa-we2L:}WT9+?]R');
define('AUTH_SALT',        'ws5|p=#BQd*mnys_K}D&^+r9#yi%J=4wc?PBQJLqS4Y<=xnrC^yo|<[}#h!;hRbq');
define('SECURE_AUTH_SALT', '~ /23fr?{T/7FdE/|D0~P#[3a2-WHHT7CF~$8N+MY}=LE{p|}6zxFN8s-9cKFb2/');
define('LOGGED_IN_SALT',   'u+zYj-+rKi0*V:h@U/W#4a D744W28X)E_+o=y>|H`ZVs|K}=u)%rgk!o+s.c>3+');
define('NONCE_SALT',       'h,uPV_jKq.3C jvWV[j%IG+ND^]Czy28O^ >i%[r%eO6UMLNzQ+|i[[qYN-QobA)');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_REDIS_HOST', 'redis' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
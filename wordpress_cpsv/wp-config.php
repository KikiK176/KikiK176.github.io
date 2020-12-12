<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'crm_cpsv' );

/** MySQL database username */
define( 'DB_USER', 'crm_cpsv' );

/** MySQL database password */
define( 'DB_PASSWORD', '!Auv~e_sA_NQ' );

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
define( 'AUTH_KEY',         'Xgxm!AVKDsqd{(`|0v36?k]!fDp3Q%x[1Gn%_/RGn?i@kT;ye,@$,xhjP/v5>@zk' );
define( 'SECURE_AUTH_KEY',  'G|DwZjQ8s3J+nhr$HxEs+M?x?!(wSA:,vDF3VV;O?N2``cVXi C>0yw7Uf`w^H`[' );
define( 'LOGGED_IN_KEY',    'HF?J>7s!Y6]RS=8,~j ?/|sBlbF)[&YhNT,V;`Er^zfSkSpS#=pu0lN/CD-]E3G#' );
define( 'NONCE_KEY',        ')~+RN7`[_C^c+]2GsJY>3f`Lh5{{Bcu&NO!r@bC7~OD0P|$dZK!O.U)zpXgx$#r*' );
define( 'AUTH_SALT',        '_oB=E=CXLDQ 3]wona/zZj5W{%X^( n@vRUW;To&pZ)9~/`gBd]}oqf,?Ee]V{T(' );
define( 'SECURE_AUTH_SALT', '7O(,uh%_]lYV[GdJ.mg&*#q[&Pz?z6/2?6<M^yQp|cFDb`CyGwiWHVTgjNWJfwN%' );
define( 'LOGGED_IN_SALT',   '0n_SwDnd?*0[BQ{hDW/&?:odG?H+w@2=5py]XM|v+QjTb4L3I0z5oZuw@_ESg*Z7' );
define( 'NONCE_SALT',       '#eZYhK2?GBW^*gAz1yMWp]o2[.[A[~&@8GKqS.6{~kTJWZ[42~(;_23wK%Q?[Q+J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cp_';

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

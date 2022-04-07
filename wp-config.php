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
define( 'DB_NAME', 'elrichma_wp320' );

/** MySQL database username */
define( 'DB_USER', 'elrichma_wp320' );

/** MySQL database password */
define( 'DB_PASSWORD', '4S0@42N@pe' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'bl7wr1hvlezu9nlwvgaio2jhhicodbybgvogsfnq0thnazm7l8inrykapovffts2' );
define( 'SECURE_AUTH_KEY',  'ue2ed6xq7hiztjvc5c6m4050gvvfhjonjcq4icoh6ieudqd0lmqaiwxbiwmsylot' );
define( 'LOGGED_IN_KEY',    'uekondtofusunbvlwm4soleuhl8cdpfpz0fuk6gchlcimuu4zyo0dvu7lmcwp95g' );
define( 'NONCE_KEY',        'evwmo1rp15hct0uvfeqrfaohadkbrani8qb5mb9lldhav9r2fhrq4rpztxcqzecn' );
define( 'AUTH_SALT',        'tahymmvxra6fswuywst6nlhunxqmgpicggl6v42l0mmvy9xqluoz5xp1rlslvkj5' );
define( 'SECURE_AUTH_SALT', 'djypmd9oxyfpo1qwppyifqbltigykgfbqpll3ay0peqthmwbjmpwczvwkwwedsah' );
define( 'LOGGED_IN_SALT',   'tb32wqhkxaitk0doeftt5imfrnqwb5igwdj7wo6ct6jqhbvvitlzb5yybbxdmqyf' );
define( 'NONCE_SALT',       '6clx0jcrw9gnpohtavt6nfg5vgtzeuemmjpuifscitdig6m2c2rahsc92zc52mnc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp9f_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

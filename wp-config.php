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
define( 'DB_NAME', 'OscarVoyage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '49zsgk9ZTSley2N16JpLYTQdvbWQik0CG2tb6Vu1Ao8jdKCQEBLNbdanASoON4S5' );
define( 'SECURE_AUTH_KEY',  'DhBpo6fDB4h6NMZgnPyc2k456zZuA9qc5aEBZyIzuek7ZXV5C356D2g89qZo6PsU' );
define( 'LOGGED_IN_KEY',    'KZvjx9H9wpkZtgF0TOp6TEr70Tkt5TGUg2LiY53kmIIkvI6uxJDgon3x2uj96Kfj' );
define( 'NONCE_KEY',        '7k9LTmUjR1wEjue325HWVYxXyjV5biipKKv878V3f5g8mAgRXdpesEjOR2zbzs9K' );
define( 'AUTH_SALT',        'Ssd0p15eU8O5azO31BaAREiX9vFdcjzlCNTDnmik04AlCoPOzJBnmCwFS0TvZz3m' );
define( 'SECURE_AUTH_SALT', 'PylWkwipgbs4EXOLGzXtFzz6Iw6OVyRCWLvg3gQk6b3ZoNFsNmGnKMTFnTWzw2fJ' );
define( 'LOGGED_IN_SALT',   '58xnPR7u7aEp4jT8qdJFNm0VNLxDJD0q16WwfB8q3xbMU5nctCCEkbrQ6wyKdYXL' );
define( 'NONCE_SALT',       'GEPE8Y36A1xUIiNYAJ0jHDM2SElpY9sW1fQZcdIY3azqqxAmo6jCRXghKlBpaBhk' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

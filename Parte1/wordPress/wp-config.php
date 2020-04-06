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
define( 'DB_NAME', 'wordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0[:zc3~:+J=*MP:7b$^t#=w5G$d6LG=1VNb/`-|%MgV>3zUk:#!Zn>a,^TFSiO*x' );
define( 'SECURE_AUTH_KEY',  'fA3gvu^2|R-mwr]g@6O. FJs<C2{h98;;NBp}l|<<s0zDb,iJ_-Fk%%#v<a@2rg4' );
define( 'LOGGED_IN_KEY',    'uZa6|TPZ-A/PSYQm&Ky6l6-{VzEep-%hE#~BO@dU7[14aS7<.W6N,E4wY}_9WKr$' );
define( 'NONCE_KEY',        '/pY:5CxvOx35gz.|SE;O{%>2CHVi>;zk^/<<ZJER1<K@N,(Q5$R`#MZY-KWO6-VM' );
define( 'AUTH_SALT',        'y}KS*G)hYnEUi/|bxm~h#C%H~/R|Uw>gK4..Z}-#HTO!JBF7Sxc}j&-{SgMx18Ta' );
define( 'SECURE_AUTH_SALT', 'z2]],RE3wV7-i>`ukv{IkZIh^mluo6y>Os#QpQn#jL|fw8jCHnnc3+;|#35Ew.-I' );
define( 'LOGGED_IN_SALT',   'mcf3v,}`TOY3m_E0}s]>|8tw[>e/dh RhLuuUMo75NZl(JIftGTQT5U]hXt%VQWT' );
define( 'NONCE_SALT',       ']E4f(T:a43iTM9{CznWbdk^69I|JrIY<.1z&r1zn-FGa2!gdE#{N^Nm2/CDHdb A' );

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

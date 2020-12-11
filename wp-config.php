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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e9Jza1sjTI+vxUF0M1iRu/1sgvIlaYkiaJghcrufOE3X4fkeLIVlpMPtG+/cIuHbcsYxxhCCaoFBA5QakQw96A==');
define('SECURE_AUTH_KEY',  'JYvPcqZG0ohDGcpx+k8/edE7h6T45T6lohmxcdOGxKVUn+dCVbfmGGmDiGvRM8h2+DZnLMJmPqxCCsvKdIecDw==');
define('LOGGED_IN_KEY',    'WvHQ/TK+Vuol8WyQRTgjDax7jtL/ciIwvDcIbY8YK8okttPKF+HWM9w8XBvVCQeNUfllcEUbStiUL6YrwTP3MA==');
define('NONCE_KEY',        '/mW/NzPfVmfxv7KIN1ZKXnQe9EYmHGuBKbV5ND9S4Uz0IO5K/sdWE5nYEpqBYHMHtUUwe8VZeL3WxOtgyMHerQ==');
define('AUTH_SALT',        'hsTrJYvpNcgN/ioBoUDuJMOyqQVdlFAfQa6Tz2qNdVsUQIQATCzZ2Pln2jVjTEh1AmrFSRSvagXmTSNuT/RCwA==');
define('SECURE_AUTH_SALT', 'lIuK7NtQUib9XEluotpaAaGn1OZHNxidKRH4OwhPkLyY5i32wJ1Ixh0YL6Mz2b4KJpmnQ7G3mSmaDpGIcHO9jw==');
define('LOGGED_IN_SALT',   'cECOmKaVqmQkc9AOTW3rI1MD+mRJLjhZKnoOnagcvSfK1KRL4X4f3dtZHptEpYMFSltmQ1gOUTatp4Or8QjleQ==');
define('NONCE_SALT',       '0w4+AD2GQRTjr1cQcYSMfaAf+AEEQbP2x3f4nDlYC+aMfBf2UeQ+l+WdRx03jU/YvEWJALHSK9l9jXID++UbqQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

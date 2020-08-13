<?php
define('DISABLE_WP_CRON', true);
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mag83947_db' );

/** MySQL database username */
define( 'DB_USER', 'mag83_wp_n0fm3' );

/** MySQL database password */
define( 'DB_PASSWORD', '6lMkX$yO95' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'r[snX1]_Gst]1+jgUP4Tj7GY4O4Zo312mA6tH7#G_86[ODTq_*Lqhlq0+A])2l6w');
define('SECURE_AUTH_KEY', '[2[:OybbLbKe~9_3bgXveJ~*0a[[UxDk%0/GbB9_Sd6P)V14_65FT;maj7!6I-1n');
define('LOGGED_IN_KEY', '20nR3kj+D5kuWQ#aD)AMp!+]U6MP)l7+&A~1ZAJoo|1CW9Pksvs2FavVA]ho-)_t');
define('NONCE_KEY', '82n:70~Z+3Q(wox92O3Nxc-nSWmg&YnVf0:013:L/AK1Gf~SV)_yuZ%+[Rc2/_)+');
define('AUTH_SALT', 'U@%m;h8DH)rAGL3qs;j;)6!MU|V&63A-cAo-ft&;u6#D2g%50i|86J75XCi6ea~3');
define('SECURE_AUTH_SALT', '@-INiL2t3Vm!]r5G[O2Z85VpM;GDi7@_h772I&~bo8b2UfJ96T2L*9rnI7Z7hVt[');
define('LOGGED_IN_SALT', 'fGk~lE73X/D+a2;ADr02J7J/!0tWoU]dHB)(%_I0#M*y_n9t01NS[fEi3961s49:');
define('NONCE_SALT', '|+(|I:X5BQ%U6KHGyPTE6j(6s92!v!OF2H)%-8t0(a682[/-XhMz12MJaKgpc8*8');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QsNlx8XO_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '1;l>(]t+B_=?Y?3E.~&?3hJdLwo}c.VS:(80?(EcV}n;gDX0~B[i=4@}c+,e;BML');
define('SECURE_AUTH_KEY',  '.<Z4DO]r>c5Kg7%#qr~<E3vqtWQcoKmyr~^Da7|u]HG|@)<k*1K%5!ubmOQXhai#');
define('LOGGED_IN_KEY',    ':Je9hY4C!dAFxwyr%{~0OVqnh0H*daL%nW5:R?7:[i8r4IG8_4kPvr/<UX?J8%~1');
define('NONCE_KEY',        '>Ao+km;7B~0btX)!aG{{pEz?^uVdjl[xiaH0ijCsQ@n^ cw]C5:w/:<l5v$:IG ]');
define('AUTH_SALT',        '?IHU93JLlBR2$f$}n32<u1yGEB_+w>1|,7 12ac>:Ds^0~S3=hg^=L(7`P*mc9m.');
define('SECURE_AUTH_SALT', 'K-9pQF%d/R>Cgz`ylBE^mlJ<LO%h$~unM-aN]C]pZF6/&B-jtx.f{xX6|ISj2MB4');
define('LOGGED_IN_SALT',   '#3jxe]~OP [pF@7^-E3CKh0>cwsG;vMfzGFaKSQ|ICy!zpn.(A}My|7LR<[OSNr{');
define('NONCE_SALT',       'wjqkQ3Sqmq9Eet~NJLI~36WaITc=nbhR2Oi.*&U)?mk9 PO+[D/|!>N*rewev#1B');

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

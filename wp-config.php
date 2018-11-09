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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'Y1%_ r_eQXz%Ku&+y|n0&@vFUT&lTbPyIh=K6]$8@{%4,@EE,Peh7/*Y`+g %Tr/');
define('SECURE_AUTH_KEY',  '7tBWZ=>8/4y?H,$w^B;=^r!Si,7YKV[6sIX99x}VAe4F`nV{R~svaO@a^Ot=p_$+');
define('LOGGED_IN_KEY',    'w}1qllTwWEU89vD2Kmzw7qxPBZ%cDd#Br|?bivV6yNbs j&^*]8FG,{4;4L0Ao+r');
define('NONCE_KEY',        '[MD6sH&V!#box8gKNbai5yT=+<3Ng^/dDEFKj<aqgN4hn?=oUvW6I%*K=UjG(0Z*');
define('AUTH_SALT',        '@E$l2qXdPA7t&&`~DGvc}1TDaj:1)</9E?C1/4?rAaNmCb6Opc|IQu)~[*&Uzz;N');
define('SECURE_AUTH_SALT', ',la|`ajP(evh@t&{)TjZ[0{S9T|SxOY!Auk2u-VlP^S@i1ntW&4j,BGPKo|^ol6M');
define('LOGGED_IN_SALT',   'XlD)|NJk(Uv)[,f(Z}cf-p++ca0yJM+A~+sR}qsH~f_VR(7D%nqrH76}A)&fUG1n');
define('NONCE_SALT',       ')X^+i:M%rI!96Gb*Lf~dbBij*O3ghT>V@zrCxW~=d/hxxW>JJ >H&A49}{ixQx0l');

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

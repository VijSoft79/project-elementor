<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
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

//define('DB_NAME', 'nigsysDB2');

define('DB_NAME', 'vijs_vijsoftdb');

/** MySQL database username */

define('DB_USER', 'vijs_vijsoftUser');

//define('DB_USER', 'root');

/** MySQL database password */

define('DB_PASSWORD', 'Rajsus@1513#0428%7785');

//define('DB_PASSWORD', '');


/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');

/** Daily download limit for any paid account */
define( 'DAILY_DOWNLOAD', '10' );

/** Daily download limit text */
define( 'DAILY_DOWNLOAD_TXT', 'Daily Download Limit' );

/** Today download text */
define( 'TODAY_TXT', 'Today\'s Download' );

/** Daily download limit for any paid account */
define( 'EXCEED_MSG', 'Today\'s download limit reached. Retry tomorrow.' );

/** Download text message */
define( 'DOWNLOAD_TEXT', 'Please wait download in progress....' );

/** Access message */
define( 'ACCESS_MSG', 'To access our premium plugin and theme, please log in or register here');


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'Yua5uOZKJIbyViSiG4RCnoiHexGTOiqcoTjchKOPShFg9MtmyX6pCxC8xE78t6nf');

define('SECURE_AUTH_KEY',  'IfY1VbSmOxIzvKQzjpdztKH00v0mkUO7bOYju16svcJIjjPbmjdxgA6fIZGrqn7H');

define('LOGGED_IN_KEY',    'TySx4kfiAJdgZX6Zi1fSOEvlY2c7iapdcFGKZFh5GL0axT0qfRuyTyx4TpSaOYBh');

define('NONCE_KEY',        '1LBntAUjsGLS5ZCRzDWLIsCuc2nZCL7mF0xXwpVCldwCRiIx12oO2uAccA0B8KKm');

define('AUTH_SALT',        'Sc5YAZjT1XHxVmDajnenT58TtFeCYSXiwMOPyIGX5C1mWfLqidb9WWsQ5eivrOGo');

define('SECURE_AUTH_SALT', 'tCl3lsiKpOmFWZBbgubylY7ox7xTKdnLSlsu6dQPR5IhS8PjNanQInjyF3V8sZnz');

define('LOGGED_IN_SALT',   'b7rOWngDZqJTqdhoMzdCbWSdW6JxznDCrFkmC5mKDy3XxQlFgHZK7B8DcgureDcO');

define('NONCE_SALT',       'Nw6NhD9P3UBNLNlY9CyBnPtOc8s2OjV1TuRRmgReIi2Wc3XKtkQJCZOLo7xofevi');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





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
define('WP_MEMORY_LIMIT', '512M');



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');


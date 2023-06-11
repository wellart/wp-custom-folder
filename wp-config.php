<?php

#define( 'WP_CACHE', true );

define('DB_NAME', 'dbname');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'dbpass');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Always generate new salt https://api.wordpress.org/secret-key/1.1/salt/

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix = 'wp_';


define('WP_CONTENT_DIR', dirname(__FILE__) . '/app');
define('WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/app');
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/app/modules'); // plugin folder
define('WP_PLUGIN_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/app/modules');
define('UPLOADS', 'app/assets'); // image folder

define('WP_DEBUG', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/system/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

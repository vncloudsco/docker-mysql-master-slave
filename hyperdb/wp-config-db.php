<?php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'mydb_user' );

/** Database password */
define( 'DB_PASSWORD', 'mydb_pwd' );

/** Database hostname */
define( 'DB_HOST', 'mysql_master' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Include HyperDB configuration
if ( file_exists( __DIR__ . '/db-config.php' ) ) {
    require_once __DIR__ . '/db-config.php';
}
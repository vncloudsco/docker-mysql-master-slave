<?php
$wpdb->save_queries = true;
// $wpdb->persistent = true;
// $wpdb->check_tcp_responsiveness = true;
$wpdb->add_database(array(
    'host'     => getenv_docker('WORDPRESS_DB_HOST_MASTER', 'mysql_master'),
    'user'     => getenv_docker('WORDPRESS_DB_USER', 'root'),
    'password' => getenv_docker('WORDPRESS_DB_PASSWORD', '111'),
    'name'     => getenv_docker('WORDPRESS_DB_NAME', 'mydb'),
    'write'    => 1,
    'read'     => 1000,
));
$wpdb->add_database(array(
    'host'     => getenv_docker('WORDPRESS_DB_HOST_SLAVE', 'mysql_slave'),
    'user'     => getenv_docker('WORDPRESS_DB_USER', 'root'),
    'password' => getenv_docker('WORDPRESS_DB_PASSWORD', '111'),
    'name'     => getenv_docker('WORDPRESS_DB_NAME', 'mydb'),
    'write'    => 0,
    'read'     => 1,
));
<?php
$wpdb->save_queries = true;
// $wpdb->persistent = true;
// $wpdb->check_tcp_responsiveness = true;
$wpdb->add_database(array(
    'host'     => 'mysql_master',
    'user'     => 'root',
    'password' => '111',
    'name'     => 'mydb',
    'write'    => 1,
    'read'     => 1000,
));
$wpdb->add_database(array(
    'host'     => 'mysql_slave',
    'user'     => 'root',
    'password' => '111',
    'name'     => 'mydb',
    'write'    => 0,
    'read'     => 1,
));
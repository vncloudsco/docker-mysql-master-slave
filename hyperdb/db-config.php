<?php
$wpdb->add_database(array(
    'host'     => 'mysql_master',
    'user'     => 'root',
    'password' => '111',
    'name'     => 'mydb',
    'write'    => 1,
    'read'     => 0,
));
$wpdb->add_database(array(
    'host'     => 'mysql_slave',
    'user'     => 'root',
    'password' => '111',
    'name'     => 'mydb',
    'write'    => 0,
    'read'     => 1,
));
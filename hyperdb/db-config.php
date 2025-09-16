<?php
$wpdb->add_database(array(
    'host'     => 'mysql_master',
    'user'     => 'mydb_user',
    'password' => 'mydb_pwd',
    'name'     => 'mydb',
    'write'    => 1,
    'read'     => 0,
));
$wpdb->add_database(array(
    'host'     => 'mysql_slave',
    'user'     => 'mydb_user',
    'password' => 'mydb_pwd',
    'name'     => 'mydb',
    'write'    => 0,
    'read'     => 1,
));
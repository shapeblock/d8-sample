<?php
$databases['default']['default'] = array (
   'database' => getenv('MYSQL_DATABASE_NAME'),
   'username' => getenv('MYSQL_USER'),
   'password' => getenv('MYSQL_PASSWORD'),
   'host' => getenv('MYSQL_HOST'),
   'port' => '3306',
   'driver' => 'mysql',
   'prefix' => '',
   'collation' => 'utf8mb4_general_ci',
);

$settings['hash_salt'] = json_encode($databases);
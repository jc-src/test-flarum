<?php

if (getenv('DEBUG') == 'true') {
  $debug = true;
} else {
  $debug = false;
}

$mysqlWriteHost = getenv('MYSQL_HOST');
$mysqlReadHost = getenv('MYSQL_HOST_READONLY');

if ($mysqlReadHost === false) {
  $mysqlReadHost = $mysqlWriteHost;
}

$base = 'http://localhost';

return [
  'debug' => $debug,
  'offline' => false,
  'database' => [
    'write' => [
      'host' => $mysqlWriteHost
    ],
    'read' => [
      'host' => $mysqlReadHost
    ],
    'sticky' => true,
    'driver' => getenv('DB_DRIVER'),
    'database' => getenv('MYSQL_DATABASE'),
    'port' => getenv('MYSQL_PORT'),
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
  ],
  'url' => $base,
  'paths' => [
    'api' => 'api',
    'admin' => 'admin',
  ],
  'session' => [
    'lifetime' => 0,
  ],
];

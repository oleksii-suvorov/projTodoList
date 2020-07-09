<?php
require_once('vendor/autoload.php');
\Dotenv\Dotenv::createImmutable(__DIR__)->load();

return [
  "host" => $_ENV["MYSQLDB_HOST"],
    "dbname" => $_ENV["MYSQLDB_DBNAME"],
    "username" => $_ENV["MYSQLDB_USERNAME"],
    "password" => $_ENV["MYSQLDB_PWD"],
    "port" => $_ENV["MYSQLDB_PORT"]
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];

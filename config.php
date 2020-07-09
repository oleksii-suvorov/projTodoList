<?php
require_once('vendor/autoload.php');
\Dotenv\Dotenv::createImmutable(__DIR__)->load();

return [
  "host" => $_ENV["REMOTE_MYSQLDB_HOST"],
    "dbname" => $_ENV["REMOTE_MYSQLDB_DBNAME"],
    "username" => $_ENV["REMOTE_MYSQLDB_USERNAME"],
    "password" => $_ENV["REMOTE_MYSQLDB_PWD"],
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];
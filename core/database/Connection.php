<?php

class Connection
{
    static function connect($config) {
        try {
            return $pdo = new PDO(
                $config["host"] . ";port=" .
                $config["port"] ? $config["port"] : 3306 . ";dbname=".
                $config["dbname"],
                $config["username"],
                $config["password"]
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

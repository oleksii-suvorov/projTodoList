<?php

namespace App\Core;

class App
{
    protected static $keys = [];

    public static function bind($key, $value) {
        static::$keys[$key] = $value;
    }

    public static function get($key) {
        if(!array_key_exists($key, static::$keys)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$keys[$key];
    }
}
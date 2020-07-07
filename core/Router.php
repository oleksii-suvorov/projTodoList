<?php

namespace App\Core;

class Router
{
    public $routes = [
        "GET" => [],
        "POST" => [],
        "DELETE" => []
    ];

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }
    public function delete($uri, $controller) {
        $this->routes['DELETE'][$uri] = $controller;
    }
    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }
    public function direct($uri, $requestType) {
        $todoId = null;
        if($requestType == "DELETE" && explode("=", $uri)[0] == "todos/removeId") {
            $deleteUrl = explode("=", $uri)[0];
            $todoId = explode("=", $uri)[1];
            $uri = $deleteUrl;
        }

        if(explode("=", $uri)[0] == "todos/changeStatus") {
            $setStatusUrl = explode("=", $uri)[0];
            $todoId = explode("=", $uri)[1];
            $uri = $setStatusUrl;
        }

        if(key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                $todoId, ...explode("@", $this->routes[$requestType][$uri])
            );
        } else {
            throw new Exception("Sorry. Page doesn't exist...");
        }
    }

    public function callAction($todoId, $controller, $action) {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if(! method_exists($controller, $action)) {
            throw new Exception("Page not found.");
        }
        return $controller->$action($todoId);
    }
}
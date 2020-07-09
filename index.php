<?php
use App\Core\{Router, Request};
require "vendor/autoload.php";
require 'core/bootstrap.php';
require 'core/Todo.php';

$router = Router::load('app/routes.php');

$router->direct(Request::uri(), Request::method());
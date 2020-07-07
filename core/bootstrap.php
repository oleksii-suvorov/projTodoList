<?php

use App\Core\App;

App::bind("config", require "config.php");

App::bind("database", new Queries(Connection::connect(App::get("config"))));

function view($name) {
    return "app/views/{$name}.view.php";
}
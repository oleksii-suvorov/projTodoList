<?php


$router->get("", "PagesController@main");
$router->get("todos", "PagesController@todos");
$router->post("todos", "PagesController@store");
$router->delete("todos/removeId", "PagesController@delete");
$router->post("todos/done", "PagesController@setDone");
$router->post("todos/changeStatus", "PagesController@changeStatus");
<?php

namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function main() {
        require view("greet");
    }

    public function todos() {
        $fetchedTodos = App::get("database")->getAllTodos("Todo");
        require view("todos");
    }

    public function store() {
        App::get("database")->addTodo([
            "todo" => $_POST["todo"]
        ]);

        header("Location: /todos");
    }

    public function delete($todoId) {
        App::get("database")->deleteTodo($todoId);
    }

    public function changeStatus($todoId) {
        App::get("database")->changeStatus($todoId);
    }
}
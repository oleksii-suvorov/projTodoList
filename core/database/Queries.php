<?php

class Queries

{
    protected $pdo;

    /**
     * Queries constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllTodos($intoClass) {
        $statement = $this->pdo->prepare('SELECT * FROM todo_list');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    public function addTodo($todo) {
        $query = sprintf(
            "INSERT INTO todo_list(title) VALUES (%s)",
            ":" . implode(array_keys($todo))
        );

        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute($todo);
        } catch (Exception $e) {
            die("Ooops. Something went wrong.");
        }
    }



    public function deleteTodo($id) {
        $query = sprintf(
            "DELETE FROM todo_list WHERE id=(%s)",
            $id
        );
        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute();
        } catch (Exception $e) {
            die("Ooops. Something went wrong.");
        }
    }

    public function changeStatus($id) {
        $statement = $this->pdo->prepare("SELECT * FROM todo_list WHERE id={$id}");

        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        if($result[0]->isCompleted) {
            $query = sprintf(
                "UPDATE todo_list SET isCompleted=false WHERE id=%s",
                $id
            );
        } else {
            $query = sprintf(
                "UPDATE todo_list SET isCompleted=true WHERE id=%s",
                $id
            );
        }

        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute();
        } catch (Exception $e) {
            die("Ooops. Something went wrong.");
        }
    }
}
<?php

class Task
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function sendPost(string $text)
    {

        $stmt = $this->pdo->prepare("INSERT INTO messages(describtion) VALUES(:text);");
        $stmt->bindParam(":text", $text);
        $stmt->execute();

        header("Location: /");
    }
}

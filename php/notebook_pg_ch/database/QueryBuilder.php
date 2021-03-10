<?php

class QueryBuilder {
    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost; dbname=notebook', 'root','root');
    }

    public function all($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function store($table, $data)
    {
        $keys = array_keys($data);
        $stringOfKeys = implode(',', $keys);
        $placeHolders = ':' . implode(', :', $keys);

        $sql = "INSERT INTO $table ($stringOfKeys) VALUES ($placeHolders)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($_POST);
    }

    public function getOne($table, $id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update($table, $data)
    {
        $fields = '';
        foreach($data as $key => $value) {
            $fields .= $key . '=:' . $key . ',';
        }
        $field = rtrim($fields, ',');

        $sql = "UPDATE $table SET $field WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    public function delete($table, $id)
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM $table WHERE id=$id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

    public function checkAdmin()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM log_admin WHERE login = :login AND password = :password";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();

        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($res)) {
            header('Location: /notebook/listForAdmin');exit();
        } else {
            header('Location: /notebook/login');exit();
        }
    }
}
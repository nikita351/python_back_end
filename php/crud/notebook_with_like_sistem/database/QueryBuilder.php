<?php

class QueryBuilder {
    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost; dbname=users', 'root','root');
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

    public function get_likes($id)
    {
        if ($id) {
            $query = $this->pdo->prepare("UPDATE tasks SET count_like = count_like+1  WHERE id = :id");
            $query->execute(array(':id'=>$id));
            $query = $this->pdo->prepare("SELECT count_like FROM tasks WHERE id = :id");
            $query->execute(array(':id'=>$id));
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $count = isset($result['count_like']) ? $result['count_like']  : 0;
            $error = false;
        } else {
            $error = true;
            $message = 'not found';
        }

        $out = array(
            'error' => $error,
            'message' => $message,
            'count' => $count,
        );
        header('Content-Type: text/json; charset=utf-8');
        echo json_encode($out);
    }
}
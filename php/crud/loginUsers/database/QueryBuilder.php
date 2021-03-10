<?php


class QueryBuilder
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost; dbname=users; charset=utf8;',  'root','polina351');
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
}
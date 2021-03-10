<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();
$id = $_GET['id'];
$task = $db->getOne('tasks', $id);
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $task['title']; ?></h1>
            <p><?= $task['meta_description']; ?></p>
            <p><?= $task['content']; ?></p>
            <a href="/notebook/tasks" class="btn btn-info">Go back</a>
        </div>
    </div>
</div>
</body>
</html>
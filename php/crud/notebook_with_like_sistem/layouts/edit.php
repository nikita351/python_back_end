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
            <h1>Edit Task</h1>
            <form action="../crud/update.php?id=<?= $task['id']; ?>" method="post">
                <div class="form-group">
                    <input type="text" name="title" placeholder="title" class="form-control" value="<?= $task['title']; ?>">
                </div>

                <div class="form-group">
                    <textarea name="meta_description" placeholder="meta_description" class="form-control"><?= $task['meta_description']; ?></textarea>
                </div>

                <div class="form-group">
                    <textarea name="content" placeholder="content" class="form-control"><?= $task['content']; ?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
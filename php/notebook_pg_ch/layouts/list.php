<?php
require('../functional/pagination.php');
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="container">
    <div class="row">
        <a class="col-md-12">
            <h1>All Tasks</h1>
            <div id="top">
                <a href="/notebook/create" class="btn btn-success">Add Task</a>
            </div>
            <div id="top">
                <a href="/notebook/login" id="btn_login" class="btn btn-info">Login</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>User name</th>
                    <th>User email</th>
                    <th>Content task</th>
                    <th>Check</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($data as $dataByOne): ?>
                    <tr>
                        <td><?= $dataByOne['user_name']; ?></td>
                        <td><?= $dataByOne['user_email']; ?></td>
                        <td><?= $dataByOne['content_task']; ?></td>
                        <td><?php 
                        if ($dataByOne['check_admin'] ==1 )
                        {
                            echo 'performed';
                        } else {
                            echo 'not performed';
                        }
                        ?></td>
                        <td>
                            <a href="show.php?id=<?= $dataByOne['id']; ?>" class="btn btn-info">
                                Show
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php
                for ($i = 1; $i <= $pagesCount; $i++) {
                    echo "<a style='margin: 2px 2px 2px 2px' class=\"btn btn-dark\" href=\"?page=$i\">$i</a>";
                }
            ?>
        </div>
    </div>
</body>
</html>

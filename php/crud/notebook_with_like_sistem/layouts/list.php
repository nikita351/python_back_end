<?php
require('../functional/pagination/pagination.php');

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="../js/script.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <a class="col-md-12">
            <h1>All Tasks</h1>
            <a href="create.php" class="btn btn-success">Add Task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($data as $dataByOne): ?>
                    <tr>
                        <td><?= $dataByOne['title']; ?></td>
                        <td><?= $dataByOne['meta_description']; ?></td>
                        <td><?= $dataByOne['content']; ?></td>
                        <td>
                            <a href="show.php?id=<?= $dataByOne['id']; ?>" class="btn btn-info">
                                Show
                            </a>
                            <a href="edit.php?id=<?= $dataByOne['id']; ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a onclick="return confirm('Are you sure?');" href="../crud/delete.php?id=<?= $dataByOne['id']; ?>" class="btn btn-danger">
                                Delete
                            </a>
                            <button class="like btn btn-success" data-id="<?php print $dataByOne['id']?>"><span class="counter"><?php print $dataByOne['count_like'] ?></span> like</button>
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

<?php
require '../ functional/getUsers.php';
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
            <table class="table">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Territory name</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($getAllUsers as $getUser): ?>
                    <tr>
                        <td><?= $getUser['email']; ?></td>
                        <td><?= $getUser['password']; ?></td>
                        <td><?= $getUser['ter_name']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="/loginUsers/" class="btn btn-info">Go back</a>
</div>
</body>
</html>
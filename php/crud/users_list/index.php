<?php
require 'get_all_users.php';
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>All Users</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach ($data as $userByOne): ?>
                    <tr>
                        <td><?= $userByOne['name']; ?></td>
                        <td><?= $userByOne['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <form action="store.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control" name="name">
            </div>

            <div class="form-group">
                <input type="text" placeholder="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
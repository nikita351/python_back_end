<?php
require '../ functional/getTerritory.php';
?>

<!doctype html>
<html>
<head lang="en">
    <meta charset="utf8">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Login</h1>
                <form id="second_form">

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" placeholder="email" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="email">Password:</label>
                        <input type="text" class="form-control" placeholder="password" id="password" name="password">
                    </div>

                    <select name="ter_name" class="select" multiple="true" style="width:200px;">
                        <?php foreach ($terNames as $key => $terName): ?>
                            <option value="<?= $terName['ter_name']; ?>"><?= $terName['ter_name']; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>

                </form>

                <div>
                    <a href="/loginUsers/list" class="btn btn-info">List users</a>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
<script src="../js/script.js"></script>
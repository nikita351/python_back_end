<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Task</h1>
                <form action="../crud/store.php" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="user_name" class="form-control" name="user_name">
                    </div>

                    <div class="form-group">
                        <textarea name="user_email" placeholder="user_email" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <textarea name="content_task" placeholder="content_task" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
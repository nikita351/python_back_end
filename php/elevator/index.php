<?php include ('elevator.php'); 
$elevator = new Elevator();
$getButtons = get_object_vars($elevator);
$buttonsList = $getButtons['button'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Elevator</title>
</head>
<body>
    <p>You are in a 9th building, on the 3rd floor! Which floor will we go to?</p> 

    <form action="" method="POST">
        <div>
            <?php foreach ($buttonsList as $button):?>
                <input type="submit" class="btn btn-info" value="<?php echo $button ?>" name="buttonElevator">
            <?php endforeach;?>
        </div>
    </form>

    <?php 
    if (isset($_POST["buttonElevator"])) {
        $user = new User('3');
        $user->press_button($_POST["buttonElevator"], $elevator);
    }
   ?>
</body>
</html>
<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();

function clean($value = "")
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $login = clean($login);
    $password = clean($password);

    $db->checkAdmin();
}

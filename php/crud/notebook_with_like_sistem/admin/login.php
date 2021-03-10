<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();

$data = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $email = clean($email);
    $password = clean($password);

    if (!empty($email) && !empty($password)) {
        $db->store('log_users', $data);
        header('Location: /notebook/tasks');exit();
    } elseif (empty($email) || empty($password)) {
        header('Location: /notebook/login');exit();
    }
}

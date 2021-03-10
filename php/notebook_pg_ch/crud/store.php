<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();
$data = [
    'user_name' => $_POST['user_name'],
    'user_email' => $_POST['user_email'],
    'content_task' => $_POST['content_task'],
];

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $content_task = $_POST['content_task'];

    $user_name = clean($user_name);
    $user_email = clean($user_email);
    $content_task = clean($content_task);

    if (!empty($user_name) && !empty($user_email) && !empty($content_task)) {
        $db->store('tasks', $data);
        header("Location: /notebook/");exit();
    } else {
        header('Location: /notebook/create');exit();
    }
}
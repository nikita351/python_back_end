<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();
$data = [
    'title' => $_POST['title'],
    'meta_description' => $_POST['meta_description'],
    'content' => $_POST['content'],
];

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $meta_description = $_POST['meta_description'];
    $content = $_POST['content'];

    $title = clean($title);
    $meta_description = clean($meta_description);
    $content = clean($content);

    if (!empty($title) && !empty($meta_description) && !empty($content)) {
        $db->store('tasks', $data);
        header("Location: /notebook/tasks");exit();
    } else {
        header('Location: /notebook/create');exit();
    }
}
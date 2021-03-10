<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();
$data = [
    'id' => $_GET['id'],
    'content_task' => $_POST['content_task'],
    'check_admin' => isset($_POST['check_admin']) ? 1 : 0,
];

$db->update('tasks', $data);
header('Location: /notebook/listForAdmin');exit;
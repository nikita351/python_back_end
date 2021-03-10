<?php
require 'QueryBuilder.php';

$db = new QueryBuilder();
$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email']
];

$db->store('users_list', $data);
header("Location: index.php");exit();
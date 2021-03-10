<?php

require '../database/QueryBuilder.php';
require '../components/Auth.php';

$db = new QueryBuilder();
$auth = new Auth($db);

$email = $_POST['email'];
$password = $_POST['password'];
$ter_name = $_POST['ter_name'];

$auth->register($email, $password, $ter_name);
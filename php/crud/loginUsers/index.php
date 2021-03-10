<?php
$url = $_SERVER['REQUEST_URI'];

if ($url == '/loginUsers/') {
    header('Location: view/loginForm.php');exit();
} elseif ($url == '/loginUsers/list') {
    header('Location: view/listUsers.php');exit();
}
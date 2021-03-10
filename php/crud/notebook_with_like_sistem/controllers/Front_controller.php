<?php

$url = $_SERVER['REQUEST_URI'];

if ($url == '/notebook/tasks') {
    header('Location: layouts/list.php');exit();
} elseif ($url == '/notebook/login') {
    header('Location: layouts/admin_panel.php');exit();
} elseif ($url == '/notebook/') {
    header('Location: layouts/index.html');exit();
} elseif ($url == '/notebook/create') {
    header('Location: layouts/create.php');exit();
}
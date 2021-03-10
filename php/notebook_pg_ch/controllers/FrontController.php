<?php

$url = $_SERVER['REQUEST_URI'];

if ($url == '/notebook/') {

    header('Location: layouts/list.php');exit();

} elseif ($url == '/notebook/login') {

    header('Location: layouts_for_admin/admin_panel.html');exit();

} elseif ($url == '/notebook/create') {

    header('Location: layouts/create.php');exit();

} elseif ($url == '/notebook/listForAdmin') {

    header('Location: layouts_for_admin/list_for_admin.php');exit();
    
}

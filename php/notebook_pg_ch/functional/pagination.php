<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$link = mysqli_connect('localhost', 'root', 'root', 'notebook')
or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$notesOnPages = 2;
$from = ($page - 1) * $notesOnPages;

$query = "SELECT * FROM tasks WHERE id > 0 LIMIT $from,$notesOnPages";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

$query = "SELECT COUNT(*) as count FROM tasks";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_fetch_assoc($result)['count'];
$pagesCount = ceil($count / $notesOnPages);

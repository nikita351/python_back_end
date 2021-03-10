<?php
require("../database/QueryBuilder.php");

$db = new QueryBuilder();
$id = intval($_POST['id']);
$db->get_likes($id);

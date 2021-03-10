<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();
$db->delete('tasks', $id);

header('Location: /notebook/listForAdmin');
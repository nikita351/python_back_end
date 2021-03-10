<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();
$terNames = $db->all('t_koatuu_tree');
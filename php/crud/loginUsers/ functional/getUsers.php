<?php
require '../database/QueryBuilder.php';

$db = new QueryBuilder();
$getAllUsers = $db->all('log_users');
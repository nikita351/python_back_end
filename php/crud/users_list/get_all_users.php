<?php
require 'QueryBuilder.php';

$getUsers = new QueryBuilder();
$data = $getUsers->all('users_list');
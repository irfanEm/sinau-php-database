<?php 

require_once __DIR__ ."/testGetConnection.php";

$connection = getConnection();

$sql = "SELECT username, password FROM users";
$statement = $connection->query($sql);
$users = $statement->fetch();

var_dump($users);

$connection = null;
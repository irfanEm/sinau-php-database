<?php 

require_once __DIR__ ."/testGetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jel@test.com', 'mangga')");
$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jel@test.com', 'mangga')");
$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jel@test.com', 'mangga')");
$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jel@test.com', 'mangga')");

$connection->commit();

$connection = null;
<?php 

require_once __DIR__ ."/testGetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jejel@test.com', 'bonjour')");
$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jejel@test.com', 'bonjour')");
$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jejel@test.com', 'bonjour')");
$connection -> exec("INSERT INTO coments(email, coment) VALUES ('jejel@test.com', 'bonjour')");

$connection->rollback();

$connection = null;
<?php

require_once __DIR__ . "/testGetConnection.php";

$connection = getConnection();

$sql = "INSERT INTO customers (id, name, email) VALUES ('id3', 'mijo', 'mijo@test.com')";
$connection->exec($sql);

$connection = null;
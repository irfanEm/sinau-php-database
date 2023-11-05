<?php 

require_once __DIR__ ."/testGetConnection.php";

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";
$hasil = $connection->query($sql);

foreach ($hasil as $customer)
{
    echo "id : $customer[id], nama : $customer[name], email : $customer[email]" . PHP_EOL;
}

$connection = null;
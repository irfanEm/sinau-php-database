<?php 

require_once __DIR__ . "/testGetConnection.php";

$connection = getConnection();

// $username = "user1'; #";
$username = "user1";
$password = "erhaes";

// $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
$sql = "SELECT username, password FROM users WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

$sukses = false;
$adaUser = null;

foreach ($statement as $row)
{

    $sukses = true;
    $adaUser = $row["username"];
}

if($sukses){
    echo "Login sukses : $adaUser" . PHP_EOL;
} else {
    echo "Login gagal" . PHP_EOL;
}

$connection = null;
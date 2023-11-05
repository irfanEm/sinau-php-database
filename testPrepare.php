<?php 

require_once __DIR__ . "/testGetConnection.php";

$connection = getConnection();

$username = "user1'; #";
$password = "erhaes";

// $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
$sql = "SELECT username, password FROM users WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
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
<?php 

require_once __DIR__ . "/testGetConnection.php";

$connection = getConnection();

// $username = "user1'; #";
$username = "user2";
$password = "erhaes2";

// $sql = "INSERT INTO users(username, password) VALUES (?, ?)";
$sql = "SELECT username, password FROM users WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

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
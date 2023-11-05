<?php

function getConnection()
{
    $host = "localhost";
    $port = 3306;
    $dbname = "belajar_php_database";
    $username = "root";
    $password = "";

    return new PDO ("mysql:host=$host:$port;dbname=$dbname", $username, $password);
}
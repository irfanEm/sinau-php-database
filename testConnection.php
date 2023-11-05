<?php

require_once __DIR__ ."/testGetConnection.php";

try {

    $connection = getConnection();
    echo "koneksi berhasil" . PHP_EOL;

    $connection = null;
}catch(PDOException $err){
    echo "koneksi gagal : " . $err->getMessage() . PHP_EOL;
}


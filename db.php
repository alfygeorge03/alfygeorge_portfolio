<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {

    $conn = new PDO(
        "mysql:host=" . getenv('MYSQLHOST') .
        ";port=" . getenv('MYSQLPORT') .
        ";dbname=" . getenv('MYSQLDATABASE'),

        getenv('MYSQLUSER'),
        getenv('MYSQLPASSWORD')
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database Connected";

} catch(PDOException $e) {

    die($e->getMessage());

}
?>
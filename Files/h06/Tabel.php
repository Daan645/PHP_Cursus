<?php

$port = "3308";
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=phpschool" . ';port=' . $port, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    foreach ($conn->query('SELECT * from cursist') as $row){
        print_r($row);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




<?php
$host = "localhost";
$port = "3306";
$user = "root";
$password = "";
$db = "hotel_db";

$dsn = "mysql:host=$host;port=$port;dbname=$db";

try {
    $conn = new PDO($dsn,$user,$password);
    //die('success');
} catch (PDOException $e) {
    die($e->getMessage());
}

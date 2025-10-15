<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "meeting_rooms_db";
$port = "3306";
$dsn = "mysql:host=$host;port=$port;dbname=$db";

try {
    $db = new PDO($dsn, $user, $password);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

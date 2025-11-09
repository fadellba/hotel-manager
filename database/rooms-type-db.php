<?php
require_once __DIR__ . '/db-connect.php';

function addRoomType($name, $night_price, $description, $capacity)
{
    global $conn;

    $query = "INSERT INTO roomstypes 
    (`name`, night_price, `description`, capacity)
    VALUES (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $night_price, $description, $capacity]);
    $stmt->closeCursor();
}

function getAllRoomsTypes()
{
    global $conn;

    $query = "SELECT * FROM roomstypes";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

function updateRoomType($id, $name, $night_price, $description, $capacity)
{
    global $conn;

    $query = "UPDATE roomstypes
    SET `name` = ?, night_price = ?, `description` = ?, capacity = ?
    WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $night_price, $description, $capacity, $id]);
    $stmt->closeCursor();
}

function deleteRoomType($id)
{
    global $conn;

    $query = "DELETE FROM roomstypes WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $stmt->closeCursor();
}

function getRoomTypeById($id)
{
    global $conn;

    $query = "SELECT * FROM roomstypes WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    return $stmt;
}

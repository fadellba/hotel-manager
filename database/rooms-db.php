<?php
require_once __DIR__ . '/db-connect.php';

function addRoom(
    $type_id,
    $status,
    $floor,
    $air_conditioning,
    $balcony,
    $ocean_view,
    $last_date_reservation,
    $created_date
) {
    global $conn;

    $query = "INSERT INTO rooms 
    (`type_id`, `status`, `floor`, 
    air_conditioning, balcony, ocean_view,
    last_date_renovation, created_date )
    VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $type_id,
        $status,
        $floor,
        $air_conditioning,
        $balcony,
        $ocean_view,
        $last_date_reservation,
        $created_date
    ]);
    $stmt->closeCursor();
}

function getAllRooms()
{
    global $conn;

    $query = "SELECT r.*, rt.* FROM rooms r
    INNER JOIN roomstypes rt
    ON r.type_id = rt.id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

function updateRoom(
    $id,
    $type_id,
    $status,
    $floor,
    $air_conditioning,
    $balcony,
    $ocean_view,
    $last_date_reservation,
    $created_date
) {
    global $conn;

    $query = "UPDATE rooms
    SET `type_id` = ?, `status` = ?, `floor` = ?, 
    air_conditioning = ?, balcony = ?, ocean_view = ?,
    last_date_renovation = ?, created_date = ?
    WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $type_id,
        $status,
        $floor,
        $air_conditioning,
        $balcony,
        $ocean_view,
        $last_date_reservation,
        $created_date,
        $id
    ]);
    $stmt->closeCursor();
}

function deleteRoom($id)
{
    global $conn;

    $query = "DELETE FROM rooms WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $stmt->closeCursor();
}

function getRoomById($id)
{
    global $conn;

    $query = "SELECT * FROM rooms WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    return $stmt;
}

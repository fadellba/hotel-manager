<?php
require_once __DIR__ . '/db-connect.php';

function addReservation(
    $room_id,
    $costumer_id,
    $arrival_date,
    $departure_date,
    $night_count,
    $person_count,
    $total_amount,
    $deposit_paid,
    $status,
    $reservation_date
) {
    global $conn;

    $query = "INSERT INTO reservations
    (room_id,
    costumer_id,
    arrival_date,
    departure_date,
    night_count,
    person_count,
    total_amount,
    deposit_paid,
    `status`,
    reservation_date)
    VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $room_id,
        $costumer_id,
        $arrival_date,
        $departure_date,
        $night_count,
        $person_count,
        $total_amount,
        $deposit_paid,
        $status,
        $reservation_date
    ]);
    $stmt->closeCursor();
}

function getAllReservations()
{
    global $conn;

    $query = "SELECT re.*,ro.*,c.* 
    FROM reservations re
    INNER JOIN rooms ro
    ON re.room_id = ro.id
    INNER JOIN costumers c
    ON re.costumer_id = c.id";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

function updateReservation(
    $room_id,
    $costumer_id,
    $arrival_date,
    $departure_date,
    $night_count,
    $person_count,
    $total_amount,
    $deposit_paid,
    $status,
    $reservation_date
) {
    global $conn;

    $query = "UPDATE reservations
    SET costumer_id = ?,
        arrival_date = ?,
        departure_date = ?,
        night_count = ?,
        person_count = ?,
        total_amount = ?,
        deposit_paid = ?,
        `status` = ?,
        reservation_date = ?
    WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $room_id,
        $costumer_id,
        $arrival_date,
        $departure_date,
        $night_count,
        $person_count,
        $total_amount,
        $deposit_paid,
        $status,
        $reservation_date
    ]);
    $stmt->closeCursor();
}

function deleteReservation ($id) 
{
    global $conn;

    $query = "DELETE FROM reservations
    WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $stmt->closeCursor();
}

function getReservationById ($id)
{
    global $conn;

    $query = "SELECT * FROM reservations
    WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute($id);
    return $stmt;
}

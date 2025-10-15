<?php
require_once __DIR__ . '/db_connect.php';

function getRooms($date, $attendeesCount, $hasProjector, $hasWhiteboard) {
    global $db;

    $sql = "SELECT * FROM rooms WHERE 1=1";
    $params = [];

    if (!empty($date)) {
        $sql .= " AND id NOT IN (SELECT room_id FROM reservations WHERE end_datetime = ?)";
        $params[] = $date;
    }

    if (!empty($attendeesCount)) {
        $sql .= " AND capacity >= ?";
        $params[] = $attendeesCount;
    }

    if ($hasProjector) {
        $sql .= " AND has_projector = 1";
    }

    if ($hasWhiteboard) {
        $sql .= " AND has_whiteboard = 1";
    }

    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt;
}

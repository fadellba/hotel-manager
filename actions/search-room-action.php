<?php
require_once __DIR__ . '/../database/rooms-db.php';

$rooms = [];
$error = null;

if (isset($_POST["send"])){

    if (!empty($_POST["partydate"]) ||
        !empty($_POST["attendeescount"]) ||
        !empty($_POST["hasprojector"]) ||
        !empty($_POST["haswhiteboard"])){

        $partydate = htmlspecialchars($_POST["partydate"]);
        $attendeescount = htmlspecialchars($_POST["attendeescount"]);
        $hasprojector = isset($_POST["hasprojector"]) ? 1 : 0;
        $haswhiteboard = isset($_POST["haswhiteboard"]) ? 1 : 0;

        $stmt = getRooms($partydate, $attendeescount, $hasprojector, $haswhiteboard);
        $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } else {
        $error = "Veuillez remplir le formulaire";
    }

}


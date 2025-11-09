<?php
require_once __DIR__ . '/db-connect.php';

function addCostumer(
    $first_name,
    $last_name,
    $email,
    $phone_number
) {

    global $conn;

    $query = "INSERT INTO costumers
    (first_name,last_name,email,phone_number)
    VALUES (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $first_name,
        $last_name,
        $email,
        $phone_number
    ]);
    $stmt->closeCursor();
}

function getAllCostumers()
{
    global $conn;

    $query = "SELECT * FROM costumers";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

function updateCostumer(
    $id,
    $first_name,
    $last_name,
    $email,
    $phone_number
) {
    global $conn;

    $query = "UPDATE costumers SET first_name = ?, 
    last_name = ?, email = ?, phone_number= ?
    WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $first_name,
        $last_name,
        $email,
        $phone_number,
        $id
    ]);
    $stmt->closeCursor();
}

function deleteCostumer($id)
{
    global $conn;

    $query = "DELETE FROM costumers WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $stmt->closeCursor();
}

function getCostumerById($id)
{
    global $conn;

    $query = "SELECT * FROM costumers 
    WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    return $stmt;
}

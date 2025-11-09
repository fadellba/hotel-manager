<?php
require_once __DIR__ . '/db-connect.php';

function addUser($first_name, $last_name, $email, $password, $role_id)
{

    global $conn;

    $query = "INSERT INTO users 
              (first_name, last_name, email, `password`, role_id)
              VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$first_name, $last_name, $email, $password, $role_id]);
    $stmt->closeCursor();
}

function getAllUsers()
{
    global $conn;

    $query = "SELECT u.*, r.* FROM users u
    INNER JOIN roles r ON u.role_id = r.id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

function updateUser($id, $first_name, $last_name, $email, $password, $role_id)
{
    global $conn;

    $query = "UPDATE users SET first_name = ?, 
    last_name = ?, email = ?, role_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id, $first_name, $last_name, $email, $password, $role_id]);
    $stmt->closeCursor();
}

function deleteUser($id)
{
    global $conn;

    $query = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);
    $stmt->closeCursor();
}

function getUserByEmail($email)
{
    global $conn;

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$email]);
    return $stmt;
}

<?php
// Include the database configuration
require 'config.php';

// Function to add a new activity
function addActivity($activity_name, $date, $details) {
    global $pdo;
    $sql = "INSERT INTO activities (activity_name, date, details) VALUES (:activity_name, :date, :details)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['activity_name' => $activity_name, 'date' => $date, 'details' => $details]);
    return $pdo->lastInsertId();
}

// Function to get all activities
function getActivities() {
    global $pdo;
    $sql = "SELECT * FROM activities";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to update an existing activity
function updateActivity($id, $activity_name, $date, $details) {
    global $pdo;
    $sql = "UPDATE activities SET activity_name = :activity_name, date = :date, details = :details WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['id' => $id, 'activity_name' => $activity_name, 'date' => $date, 'details' => $details]);
}

// Function to delete an activity
function deleteActivity($id) {
    global $pdo;
    $sql = "DELETE FROM activities WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['id' => $id]);
}
?>
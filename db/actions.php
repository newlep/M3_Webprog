<?php
// Include the CRUD functions
require 'crud.php';

$action = $_POST['action'] ?? '';

if ($action === 'add') {
    $activity_name = $_POST['activity_name'];
    $date = $_POST['date'];
    $details = $_POST['details'];
    $id = addActivity($activity_name, $date, $details);
    echo json_encode(['id' => $id, 'message' => 'Activity added successfully']);
} elseif ($action === 'update') {
    $id = $_POST['id'];
    $activity_name = $_POST['activity_name'];
    $date = $_POST['date'];
    $details = $_POST['details'];
    updateActivity($id, $activity_name, $date, $details);
    echo json_encode(['message' => 'Activity updated successfully']);
} elseif ($action === 'delete') {
    $id = $_POST['id'];
    deleteActivity($id);
    echo json_encode(['message' => 'Activity deleted successfully']);
} elseif ($action === 'get') {
    $activities = getActivities();
    echo json_encode($activities);
} else {
    echo json_encode(['error' => 'Invalid action']);
}
?>
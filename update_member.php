<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST['studentID']; // Ensure your form includes this input
    $newName = $_POST['newName'];
    $newEmail = $_POST['newEmail'];

    $sql = "UPDATE StudentMember SET StudentName='$newName', Email='$newEmail' WHERE Student_ID='$studentID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

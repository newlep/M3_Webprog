<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST['studentName'];
    $email = $_POST['email'];
    $courseID = $_POST['courseID']; // Ensure your form includes this input
    $yearLevel = $_POST['yearLevel'];
    $contact = $_POST['contact'];
    $genderID = $_POST['genderID'];
    $adminID = $_POST['adminID'];

    $sql = "INSERT INTO StudentMember (StudentName, Email, Course_ID, Year_level, Contact, Gender_ID, Admin_ID)
            VALUES ('$studentName', '$email', '$courseID', '$yearLevel', '$contact', '$genderID', '$adminID')";

    if ($conn->query($sql) === TRUE) {
        echo "New member added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
include 'db_connect.php';

$sql = "SELECT * FROM StudentMember";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Student_ID"] . "</td><td>" . $row["StudentName"] . "</td><td>" . $row["Email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>

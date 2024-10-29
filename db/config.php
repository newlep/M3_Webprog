<?php
// config.php

$host = 'localhost';        // Database host (usually 'localhost')
$dbname = 'your_database';   // Database name
$user = 'your_username';     // Database username
$pass = 'your_password';     // Database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}
?>

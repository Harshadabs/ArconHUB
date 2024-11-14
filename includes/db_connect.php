<?php
// db_connect.php - Establish a connection to the database

$servername = "localhost";
$username = "root";       // Default username in XAMPP
$password = "";           // Default password in XAMPP
$dbname = "my_database";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// dbcon.php - Database connection file

$servername = "localhost";  // Change if needed
$username = "root";         // Change to your MySQL username
$password = "";             // Change to your MySQL password
$dbname = "dvsmining";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
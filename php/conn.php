<?php
//connection variables
$servername = "localhost";
$username = "root";
$password = "zegatta911";
$dbname = "motor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}
?>

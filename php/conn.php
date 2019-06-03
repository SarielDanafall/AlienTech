<?php
//connection variables
$servername = "localhost"; # server location, usualy is "localhost"
$username = "root"; # user nick, usually is "root"
$password = ""; # passwd of the user
$dbname = ""; # Database of the WEB

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}
?>

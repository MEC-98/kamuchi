<?php
// Database connection
$servername = "localhost"; // Change to your server name
$username = "Useradmin"; // Change to your database username
$password = "3vx]FLebrGJHL67A"; // Change to your database password
$dbname = "kamuchi_trans"; // Change to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

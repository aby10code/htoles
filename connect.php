<?php
$servername = "sql213.infinityfree.com";
$username = "if0_37185420"; // Replace with your database username
$password = "yYZeqFEYCbcRaK"; // Replace with your database password
$dbname = "if0_37185420_mini_hotels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

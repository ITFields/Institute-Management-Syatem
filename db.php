<?php
$host = "localhost";
$user = "root"; // Change if needed
$pass = ""; // Change if you have a password
$dbname = "harsh";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
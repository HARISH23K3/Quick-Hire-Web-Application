<?php
$servername = "localhost";
$username = "id21697286_root";
$password = "Quickhire23k3@";
$dbname = "id21697286_harishdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
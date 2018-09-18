<?php 

require_once __DIR__ . '../config/constants.php';

// Create connection
$conn = new mysqli(HOST, USERNAME, PASSWORD);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php


$servername = "localhost"; // Hostname of your MySQL server (usually "localhost" for a local database)
$username = "root"; // Your MySQL database username
$password = ""; // Your MySQL database password
$database = "proiect"; // The name of your MySQL database

// Create a MySQLi connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
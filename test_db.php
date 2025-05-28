<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP is working!"; // To check if PHP is running

$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
} else {
    echo "Database Connected Successfully!";
}
?>
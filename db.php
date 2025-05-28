<?php
$host = 'localhost';
$dbname = 'ecommerce'; // Ensure this is the correct database name
$user = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$sql313.infinityfree.com;dbname=$if0_38626090_ecommerce;charset=utf8", $if0_38626090, $cqtFz1nKwKys4);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage()); // Stops execution on failure
}
?>
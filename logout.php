<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start(); // Start the session

// Destroy the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page
header('Location: login.php');
exit();
?>
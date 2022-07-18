<?php
// Database configuration
$dbHost     = "192.168.43.7";
$dbUsername = "ummi";
$dbPassword = "rootpass";
$dbName     = "userreg";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
<?php 
// db_config.php

// Database credentials
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "petstore_db";

try {
    // Enable exception mode for mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Create a new MySQLi connection
    $conn = new mysqli($db_server, $db_username, $db_password, $db_name);

    // Set the character set to avoid encoding issues
    $conn->set_charset("utf8mb4");

    // Optional: Remove echo for production, log connection instead if needed
    // echo "Connected successfully!";

} catch (Exception $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}

// Always close the connection when done
// $conn->close();
?>

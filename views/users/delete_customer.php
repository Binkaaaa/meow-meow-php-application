<?php
// Include the database connection
require_once(__DIR__ . '/../../include/db_connect.php');

// Check if the form is submitted
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id']; // Get the user_id from the form

    // SQL query to delete the customer
    $sql = "DELETE FROM users WHERE userID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id); // Bind the user_id to the SQL query

    // Execute the query and check if deletion is successful
    if ($stmt->execute()) {
        // Redirect back to the view_customer page after successful deletion
        header("Location: view_customer.php");
        exit();
    } else {
        echo "Error deleting customer: " . $conn->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

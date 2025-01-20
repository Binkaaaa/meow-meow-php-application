<?php
// Include necessary files
require_once(__DIR__ . '/../../include/db_connect.php');

// Check if ID is provided
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Delete the product from the database
    $sql = "DELETE FROM product WHERE productID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);

    if ($stmt->execute()) {
        // Redirect to the product list page with a success message
        header("Location: ../../views/product/view_product.php?message=Product deleted successfully!");
        exit();
    } else {
        // If deletion fails, show an error message
        echo "Error: Failed to delete product.";
    }
}
?>
